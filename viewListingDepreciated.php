<?php include "./commSimpleHeader.php" ?>
<?php include "./databaseInit.php" ?>
<?php

// these are debugging settings, enable them to begin debugging this page
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


if(isset($_GET)){
    //getting listing info from database
        $listingQuery = "SELECT * FROM listings WHERE listingID=?";
        $stmd=$mysqli->prepare($listingQuery);
        $stmd->bind_param('i',$_GET['listingID']);

        
        $stmd->execute();
        $result=$stmd->get_result();
        
        while($row = $result->fetch_assoc()) {
            $timeListed=$row['timeListed'];
            $addressStreet=$row['addressStreet'];
            $addressCity=$row['addressCity'];
            $addressState=$row['addressState'];
            $addressZipcode=$row['addressZipcode'];
            $saleType=$row['saleType'];
            $description=$row['description'];
            
            
        }

    //get pictures to display on webpage

        $dir="./listingImages/".strval($_GET['listingID']);
        if(is_dir($dir)){
            $filesInDir = scandir($dir,1);

            if($filesInDir != false){
                array_pop($filesInDir);
                array_pop($filesInDir);
                // print_r($filesInDir);

                
            }
        }

    
    
}else{
    //if a user gets to this page without clicking, redirect them?
    header("Location: ./listings.php");
}

?>
<html>
    <body>
        <div>
            <label>Address: <?php echo $addressStreet; ?></label><br>
            <label>City: <?php echo $addressCity; ?></label><br>
            <label>State: <?php echo $addressState; ?></label><br>
            <label>Zipcode: <?php echo $addressZipcode; ?></label><br>
            <label>Sale Type: <?php echo $saleType; ?></label><br>
            <label>Description: <?php echo $description; ?></label><br>
        </div>
        <div>
            <?php
                if(is_dir($dir)){
                    foreach($filesInDir as $file){
                        echo "<img src='$dir/$file'>";
                    }
                }
            ?>
            
        </div>
    </body>



</html>


<?php
    $stmd->close();
    $mysqli->close();
    ?>