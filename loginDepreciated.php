<?php


?>


<html>
<head>
        <style>
            .loginForm{
                background-color: lightblue;
                position:relative;
                top:30%;
                left:43%;
                padding:20px;
                width: 180px;     
                font-family:'Segoe UI', sans-serif;
                

            }
        </style>
    </head>
    <body>
        <div class="loginForm" >
            <?php 
                if(isset($_SESSION["loggedIn"])==true && $_SESSION["loggedIn"]==false){//if a login was attempted and failed from tryLogin.php
                    echo "<p style='text-align:center'>Login Failed, Email or Password could not be found</p>";
                }
            ?>
            
        <form action="./tryLogin.php", method="POST" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
            <label style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Log In</label>
            <input type="email" name="email" placeholder="Email"><br>
            <input type="text" name="password" placeholder="Password"><br>
            <input type="submit" name="submit" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
        </form>
        <a href="./createUserFrontend.php" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">Create a New Account</a>
        </div>
    </body>

</html>

