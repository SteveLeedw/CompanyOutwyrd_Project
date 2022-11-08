<!-- the form login.php will send to.

-->
<?php include "./databaseInit.php" ?> <!-- initializes database from file for better code sustainability -->
<?php


$users = $mysqli->query("SELECT * FROM users");

//will get username and password
session_destroy();
session_destroy();
session_destroy();
session_start();
if($users->num_rows>0){
    while($row=$users->fetch_assoc()){//for each result from query
        
        if($_POST["email"]==$row["email"] && $_POST["password"]==$row["password"]){
            
            
            $_SESSION["loggedIn"]=true;
            $_SESSION["email"]=$row["email"];
            $_SESSION["firstName"]=$row["firstName"];
            $_SESSION["lastName"]=$row["lastName"];
            $_SESSION['user_id']=$row['user_id'];
            // $userID = $mysqli->query("SELECT user_id FROM users WHERE email =");

            // $insertQuery = "SELECT * FROM users WHERE email=user_id VALUES ?";//may have to work with current_timestamp
            // $stmd = $mysqli->prepare($insertQuery);
            // // $stmd->bind_param("s",$row['email']);
            // // if($stmd->execute()){
            // //     $result=$stmd->get_result();
            // //     $row=$result->fetch_assoc();
            // //     $_SESSION['user_id']=$row['user_id'];
                

            // // }else{
            // //     echo "<br>Failed<br>Contact local admin<br>";
            // // }

            echo '<script type="text/javascript">
            
            window.location.replace("./userInfo.php");
            </script>';
            
            
        }
        
    }
    if(!(isset($_SESSION["loggedIn"])) || $_SESSION["loggedIn"]==false){//if someone tries to access this page directly they get redirected
        $_SESSION["loggedIn"]=false;

        header('Location: ./login.php');
    }
}




$mysqli->close();

?>