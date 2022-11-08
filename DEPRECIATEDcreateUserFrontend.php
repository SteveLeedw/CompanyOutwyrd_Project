

<?php include "./databaseInit.php" ?>
<?php include "./newHeader.php" ?>

<?php
session_start();

?>
<html>
    <header>
    <style>

            .centerView{
                background-color: white; 
                background-size:cover;
                background-image: url('images/listings.jpg');
                position:relative;
                font-family:'Segoe UI', sans-serif;
                text-align:center;
                margin: 0 auto;
                height: cover;
            }
            .createUserForm{
                box-sizing: content-box;
                background-color: white;
                position:relative;
                top:20%;
                left:42%;
                padding:20px;
                width: 180px;                 
            }

            .login-form {
                max-width: 350px;
                margin: 0 auto;
                border-radius: 5px;
                overflow:hidden;
                box-shadow: 0 0 15px rgba(0,0,0,0.15);
                padding: 15ppx;
                background: black;
            }

            }

        </style>
    </header>
    <script src="./scripts/checkSamePasswords.js"></script>
    <body>
    <div class='centerView'>"
        <div class="createUserForm">
        <?php
                if (($_SESSION["emailAlreadyExists"])==true){
                    echo "<p style='text-align:center'>Account creation failed! Email already registered!</p>";
                }

            ?>
            <form action="./createUserBackend.php", id='createAccount' method="POST" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif">
                <label style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"><b>Create Account</b></label>
                <input type="text" name="firstName" placeholder="First Name" id='firstName'><br>
                <input type="text" name="lastName" placeholder="Last Name" id='lastName'><br>
                <input type="email" name="email" placeholder="Email" id='email' required="required"><br>
                <input type="text" name="password" placeholder="Password" id='pass1'><br>
                <input type="text" name="confirmpassword" placeholder="Confirm Password" id='pass2'><br>
                <input type="button" name="submitButton" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" 
                value="Submit" onclick=check()></button><!-- name of button cannot be submit --->
                <!-- <input type="submit" name="submit" style="font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif"> -->
            </form>
        </div>
</body>
</html>