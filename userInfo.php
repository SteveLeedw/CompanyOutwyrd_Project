<?php 


// include "./commSimpleHeader.php"
include "newHeader.php"
?>
<?php
session_start();
if($_SESSION['loggedIn']!=true){//redirect user if they are not logged in
    header('Location: ./login.php');

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
                position: relative;

            }
            textarea{
                vertical-align:top;
            }
        </style>

    </header>

<body>
<header class="jumbotron bg-theme">
            <div class="container">
                <a class="navbar-brand" href="home.php">
                    <img src="images/Outward_logo.png"  width='200' height='200'>
                </a>

                </ul>
<center>
<div style='padding:.75rem; font-weight:bold;'>
USER INFORMATION
<br>
<br>
<button onClick="javascript:window.location.href='./uploadListing.php'">Upload Listing</button>
<br>
<br>
<button onClick="javascript:window.location.href='./listings.php'">View All Listings</button>
<br>
<br>

<?php include './logoutButton.php' ?>
</div> </center>
</body>
</html>