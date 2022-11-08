<?php include "./topBar.php" ?>
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
                        <a class="navbar-brand" href="#main_home"> <img src="assets/logo.PNG" width="55"
                                class="pb-1 mx-2"><span class="highlight" class="px-1">OUTWRYD</span>
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
                                    <!-- I might be able to change this so that the styling still works but it displays you are logged in with a php if statement -->
                                    <!-- i think i need to change topBar.php to only include the maintaining login code -->
                                    <a class="nav-link" aria-current="page" href="login.php">login</a>
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

                <div class="banner">
                    <div class="row">
                        <div class="banner-image col-lg-7 col-lg-12">
                            <img src="demoImages/back.PNG" class="img-fluid" alt="logo" width="5000" height="1000">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- search bar here and other things like loopnet.com -->
        <section class="keds container">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="demoImages/home1.PNG" class="card-img-top" alt="">
                        </div>

                        <div class="card-body ps-4 pt-0">
                            <h5 class="card-title">Drew University</h5>
                            <p class="card-text">This is Drew University</p>
                            <div class="d-flex">
                                <h4 class="highlight flex-fill" style="font-size: 28px;
                                        font-weight: 700;">$</h4>


                                <button class="btn main-btn" onclick="location.href='https://drew.edu/'" type="button"><img src="assets/shopping-cart 1.png" width="20"
                                        class="mx-1">Reservation
                                    NOW</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="demoImages/home2.PNG" class="card-img-top" alt="">
                        </div>

                        <div class="card-body ps-4 pt-0">
                            <h5 class="card-title">House </h5>
                            <p class="card-text">This is huge house.</p>
                            <div class="d-flex">
                                <h4 class="highlight flex-fill" style="font-size: 28px;
                                    font-weight: 700;">$</h4>


                                <button class="btn main-btn" onclick="location.href=''" type="button"><img src="shopping-cart 1.png" width="20"
                                        class="mx-1">Reservation
                                    NOW</button>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col">
                    <div class="card h-100">
                        <div class="card-img">
                            <img src="demoImages/home3.PNG" class="card-img-top" alt="">
                        </div>
                        <div class="card-body ps-4 pt-0">
                            <h5 class="card-title">Apartment</h5>
                            <p class="card-text">This apartment is nice.</p>
                            <div class="d-flex">
                                <h4 class="highlight flex-fill" style="font-size: 28px;
                                font-weight: 700;">$</h4>

                                <button class="btn main-btn" onclick="location.href=''" type="button"><img src="shopping-cart 1.png" width="20"
                                        class="mx-1">Reservation NOW
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </section>

        <section class="info-creative container">

            <div class="row">
                <div class=" info col-md-4">
                    <div class="">
                        <div class="info-body">
                            <div class="d-flex px-3 pt-3">
                                <img src="demoImages/image1.png" height="90px">
                                <div class="mx-3">
                                    <h6>Find the Perfect house</h6>
                                    <p>Everybody live different life sytle, so you can find your style home.</p>
                                </div>
                            </div>


                        </div>

                        <div class="info-body">
                            <div class="d-flex px-3 pt-3 ">
                                <img src="demoImages/image2.png" height="90px">
                                <div class="mx-3">
                                    <h6>Free Reservation</h6>
                                    <p>One of the many reasons you can see houses with peace of mind</p>
                                </div>
                            </div>

                        </div>
                        <div class="info-body">
                            <div class="d-flex px-3 pt-3">
                                <img src="demoImages/image3.png" height="90px">
                                <div class="mx-3">
                                    <h6>Contact Us</h6>
                                    <p>We are here to help you. We support you when you have problem</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-md-8 creative">
                    <div class="d-flex justify-content-center ">
                        <img src="demoImages/home4.PNG" height="300px">
                    </div>

                </div>
            </div>
        </section>
    </main>
    <footer class="text-center">
        <span> ©OUTWYRD 2022
            <a href="" target="_blank" class="link-light">E-MAIL: OUTWYRD@gmail.com / CALL NUMBER: 000-000-0000</a>
        </span>

    </footer>

</body>

</html>