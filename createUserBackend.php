<?php include "./databaseInit.php" ?>
<?php

function checkUniqueUser($email,$mysqli){    //checks if the user creating a new account is using an email already in use
    $stmt = $mysqli->prepare("SELECT * FROM users WHERE email LIKE ?");//prepared statement to find if a user with that email already exists
    $stmt->bind_param("s",$email);
    $stmt->execute();
    $result = $stmt->get_result();
    while($row = $result->fetch_assoc()) {
        // echo("<br>email already exists<br>");
        // echo($row["email"]);
        return true;
        
    }

}



echo $_POST['firstName'];
echo "<html><br></html>";
// echo $_POST['lastName'];
// echo "<html><br></html>";
// echo $_POST['email'];
// echo "<html><br></html>";
// echo $_POST['password'];

if((checkUniqueUser($_POST['email'],$mysqli))==true){
    // new user should not be created!
    // echo "user already found";
    session_start();
    $_SESSION["emailAlreadyExists"]=true;//track if user already exist for error message on acc. creation screen
    //this process could be improved
    header('Location: ./createUserFrontend.php');
}else{
    session_start();
    $_SESSION["emailAlreadyExists"]=false;
    // new user should be created

    // TODO: Create New User

    //prepared statment for adding a user
    // echo "something here";
    // echo "<html><br></html>";

    // echo $_POST["email"];

    $insertQuery = "INSERT INTO users (firstName, lastName, email, password) VALUES (?,?,?,?)";
    $stmd = $mysqli->prepare($insertQuery);
    $stmd->bind_param("ssss",$_POST["firstName"],$_POST["lastName"],$_POST["email"],$_POST['password']);
    if($stmd->execute()){
       header('Location: ./accountcreated.php');

    }else{
        echo "<br>Failed to insert<br>Contact local admin<br>";
    }
}






$mysqli->close();
?>

