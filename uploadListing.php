
<?php include "./newHeader.php" ?>
<?php
// these are debugging settings, enable them to begin debugging this page
// ini_set('display_errors', 1);
// ini_set('display_startup_errors', 1);
// error_reporting(E_ALL);

include "./databaseInit.php";

session_start(); 
if($_SESSION['loggedIn']!=true){ //do not allow a user to upload a listing if they are logged in, redirects to login page
    header('Location: ./login.php');

}



if($_POST["submit"]==true){         //when submit button is pressed
    //submits listing info to database
    
    //                                     int        text         text        text        text            text    longtext
    $insertQuery = "INSERT INTO listings (user_id, addressStreet,addressCity,addressState,addressZipcode,saleType,description, nameListing, price) VALUES (?,?,?,?,?,?,?,?,?)";//may have to work with current_timestamp
    $stmd = $mysqli->prepare($insertQuery);
    $stmd->bind_param("isssssssi",$_SESSION['user_id'],$_POST["addressStreet"],$_POST["addressCity"],$_POST['addressState'],$_POST['addressZipcode'],$_POST['saleType'],$_POST['description'],$_POST['nameListing'], $_POST['price']);
    if($stmd->execute()){ 
        echo '<script>alert("listing uploaded!")</script>';

    }else{
        echo "<br>Failed<br>Contact local admin<br>";
        echo($stmd->error);
    }
    //prepaired query, stores the listing ID in $_SESSION once it is uploaded
    $getListingID="SELECT * FROM listings WHERE user_id=? AND addressStreet=? AND addressCity=? AND addressState=? AND addressZipcode=? AND saleType=? AND description=? AND nameListing=? AND price=?";
    $stmd=$mysqli->prepare($getListingID);
    $stmd->bind_param('isssssssi',$_SESSION['user_id'],$_POST["addressStreet"],$_POST['addressCity'],$_POST['addressState'],$_POST['addressZipcode'],$_POST['saleType'],$_POST['description'], $_POST['nameListing'], $_POST['price']);
    $stmd->execute();
    $result=$stmd->get_result();
    
    while($row = $result->fetch_assoc()) {
        echo('ListingID: '.$row["listingID"]);
        $listingID=$row["listingID"];
        
        
    }


    // image upload processing
    $listingImages='./listingImages';
    //moves files to their own directory based on listingID in listingImages directory
    foreach($_FILES['files']['error'] as $key=>$error){
        if($error==0){
            if(! is_dir("$listingImages/$listingID")){
                mkdir("$listingImages/$listingID");
                $tmp_name = $_FILES['files']["tmp_name"][$key];
                $name=basename($_FILES['files']['name'][$key]);
                move_uploaded_file($tmp_name,"$listingImages/$listingID/$name");
            }else{
                $tmp_name = $_FILES['files']["tmp_name"][$key];
                $name=basename($_FILES['files']['name'][$key]);
                move_uploaded_file($tmp_name,"$listingImages/$listingID/$name");

            }
            


        }else{
            echo("error not 0");
        }
    }
    
    

}
?>
<html>

    <header>
        <style>
            .upload{
                font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                padding:.75rem;
                color: white;
                font-weight: bold;
                font-size: 15px;
                position: relative;


            }
            textarea{
                vertical-align:top;
            }
        </style>

    </header>

    <body>
    <header class="jumbotron bg-theme">
    <div class="bg-overlay"></div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <img src="images/Outward_logo.png"  width='300' height='300'>
                    <img src="images/Outward_logo.png"  width='300' height='300'>
                </a>

                </ul>

        <div class='upload'>
        <li>
            <form action="<?php $_PHP_SELF ?>", id='uploadListing' method="POST" enctype="multipart/form-data">
                        <label style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><center><b>LISTING INFORMATION</b></label></center><br>
                        <label>Listing Name: </label>
                        <input type="text" name="nameListing" placeholder="Listing Name" id='nameListing' required><br>
                        <label>Street Address: </label>
                        <input type="text" name="addressStreet" placeholder="Street Address" id='addressStreet' required><br>
                        <label>City: </label>
                        <input type="text" name="addressCity" placeholder="City" id='addressCity' required><br>
                        <label>State: </label>
                        <select name='addressState' id='addressState' required>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA">California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District Of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                        </select><br>
                        <label>Area Code: </label>
                        <input type='text' name='addressZipcode' placeholder='00000' id='addressZipcode' required><br>
                        <label>Sale Type: </label>
                        <select name='saleType' id='saleType' required>
                            <option value="Sale">Sale</option>
                            <option value="Auction">Auction</option>
                            <option value="Rent">Rent</option>
                            <option value="Lease">Lease</option>
                        </select><br>
                        <label>Price: </label>
                        <input type='float' name='price' placeholder='00.00' id='price' required><br>
                        <label>Description:</label><br>
                        <textarea id='description' name='description' rows='10' cols='50' placeholder='Suggestions: Additional Facilities, Parking, Proximity to Main Roads, Property Taxes, ect.'></textarea><br>


                        <!-- image uploading -->

                        <label for="files">Upload Images:</label>
                        <input type="file" id="files" name="files[]" accept="image/*, .jpeg, .png, .tif" multiple><br>
                        
                        
                        <input type="submit" value="Submit" name="submit" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            </form>
        </div>
        </body>

</html>

<?php
$stmd->close();
$mysqli->close();
?>
