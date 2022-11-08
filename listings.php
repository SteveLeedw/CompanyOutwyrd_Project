<?php include "./newHeader.php" ?>
<?php include "./databaseInit.php" ?>
<html>
    <header>
        <style>
            .centerView{
                background-color: white; 
                background-image: url('images/listings.jpg');
                position:relative;
                /* top:40%; */
                /* top:30%;
                left:43%;
                padding:20px; */
                /* width: 180px;      */
                height:100%;
                font-family:'Segoe UI', sans-serif;
                text-align:center;
                margin: 0 auto;
            }
            .listing{
                text-align:center;
                margin: 0 auto;
                position:relative;
                font-family:'Segoe UI', sans-serif;
                color: white;
                font-size: 18px;
                /* outline: .5rem solid blue; */
            }
        </style>


    </header>
<?php

// these are debugging settings, enable them to begin debugging this page
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);


// $users = $mysqli->query("SELECT * FROM users");
$listingsQuery = "SELECT * FROM listings";
$listings = $mysqli->query($listingsQuery);
// $stmd->bind_param("ssss",$_POST["firstName"],$_POST["lastName"],$_POST["email"],$_POST['password']);
if($listings->num_rows>0){
    echo "<html>
    <div class='centerView'>";
    
    while($row=$listings->fetch_assoc()) {
        $address=$row['addressStreet'];
        $listingID=$row['listingID'];
        echo('
        
        <div class="listing">
        <b>Address:</b> '.$row['addressStreet'].', '.$row['addressCity'].', '.$row['addressState'].', '.$row['addressZipcode']);

        echo "<br>
        <button onClick=javascript:window.location.href='./viewListing.php?listingID=$listingID'>View Listing</button></div><br>
        ";

        //href/ make all the listings selectable with $_GET
        //create a view individual listing page and pull data with listingID and $_GET to populate
        //make sure text and images are viewable
        
        
        
    }

    echo "
    </div>
    </html>";
}else{
    echo "<br>Failed to find data<br>Contact local admin<br>";
}

?>


</html>

<?php
    $stmd->close();
    $mysqli->close();
?>