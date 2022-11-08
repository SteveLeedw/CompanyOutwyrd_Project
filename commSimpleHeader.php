<?php
session_start();


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Montserrat:wght@700&family=Roboto:wght@500&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <title>Outwryd</title>
</head>

<body>
    <main>
        <section class="nav-banner ">
            <div class="container">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <div class="container-fluid">
                         <!-- Where is store search to user -->
                        <a class="navbar-brand" href="#main_home"> <img src="assets/logo.PNG" width="5"
                                class="pb-1 mx-2"><span class="highlight" class="px-1">Commercial Simple</span>
                        </a>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                            data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                            aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse flex-md-row-reverse" id="navbarNavDropdown">
                            <ul class="navbar-nav">
                                <li class="nav-item px-3">
                                    <!-- official website login to user -->
                                    <?php
                                    if(isset($_SESSION["loggedIn"])==true && $_SESSION["loggedIn"]==true){//if a login was attempted and was successful
                                        echo '<a class="nav-link" aria-current="page" href="userInfo.php">'.$_SESSION['firstName'].'</a>';

                                    }else{//if no login was attempted or login failed, display login link
                                        echo '<a class="nav-link" aria-current="page" href="login.php">login</a>';

                                    }

                                    ?>
                                </li>
                                <li class="nav-item px-3">
                                    <!-- history to clint -->
                                    <a class="nav-link" href="">About us</a>
                                </li>
                                <li class="nav-item px-3">
                                    <!-- connect to us by email -->
                                    <a class="nav-link" href="">Contact us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                                </div>
                                </section>
                                </main>
                                </body>