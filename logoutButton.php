<?php
// a logout php button, comes prepackaged for use in php include to include anywhere on the outwyrd/commsimple website
if($_POST["logout"]==true){
    // echo "Successfully logged out";
    session_start();
    session_destroy();
    session_destroy();
    session_destroy();
    
    // header('Location: ./home.php');
    echo '<script type="text/javascript">
        alert("You have been logged out!");
        window.location.replace("./home.php");
        </script>';

}
?>
<html>
    <form action="<?php $_PHP_SELF ?>", method="POST" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            <input type="submit" name="logout" value="Log Out" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
    </form>
</html>


