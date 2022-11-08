<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
    <title>Login</title>

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content="" />
    <meta property="og:image" content="" />
    <meta property="og:url" content="" />
    <meta property="og:site_name" content="" />
    <meta property="og:description" content="" />
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <link rel="manifest" href="site.webmanifest">
    <!-- favicon.ico in the root directory -->
    <link rel="apple-touch-icon" href="icon.png">
    <meta name="theme-color" content="#3454d1">
    <link href="./css/styles.css?fd365619e86ad9137a29" rel="stylesheet">
</head>
<?php include "./newHeader.php" ?>
<body>
    <!-- HEADER -->
    <header>
        <!-- END NAVBAR TOP -->
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <img src="images/Outward_logo.png" alt="" class="img-fluid">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main_nav99">
                    <span class="navbar-toggler-icon"></span>
                </button>
                            </div>
                        </div>
                    </div>
                    <!-- Search content bar.// -->
                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- BREADCRUMB -->
        <div class="bg-theme-overlay">
            <section class="section__breadcrumb ">
                <div class="container">
                    <div class="row d-flex justify-content-center">
                        <div class="col-md-8 text-center">
                            <h2 class="text-capitalize text-white">login</h2>
                            <ul class="list-inline ">
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <!-- END BREADCRUMB -->
    </header>
    <div class="clearfix"></div>

    <!-- LISTING LIST -->
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Form Login -->
                    <div class="card mx-auto" style="max-width: 380px;">
                        <div class="card-body">
                            <h4 class="card-title mb-4">Sign in</h4>
                            <?php 
                                session_start();
                                if(isset($_SESSION["loggedIn"])==true && $_SESSION["loggedIn"]==false){//if a login was attempted and failed from tryLogin.php
                                    echo "<p style='text-align:center'>Login Failed, Email or Password could not be found</p>";
                                }
                            ?>
                            <form action="./tryLogin.php", method="POST">
                                <!-- <a href="#" class="btn btn-facebook btn-block mb-2 text-white"> <i
                                        class="fa fa-facebook"></i> &nbsp; Sign
                                    in
                                    with
                                    Facebook</a>
                                <a href="#" class="btn btn-primary btn-block mb-4"> <i class="fa fa-google"></i> &nbsp;
                                    Sign in with
                                    Google</a> -->
                                <div class="form-group">
                                    <input class="form-control" placeholder="Email" type="text" name="email">
                                </div> <!-- form-group// -->
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" type="password" name="password">
                                </div> <!-- form-group// -->

                                <div class="form-group">
                                    <a href="#" class="float-right" style="padding-bottom: .5rem">Forgot password?</a>
                                    <!-- <label class="float-left custom-control custom-checkbox"> <input type="checkbox"
                                            class="custom-control-input" checked="">
                                        <span class="custom-control-label"> Remember </span>
                                    </label> -->
                                </div> <!-- form-group form-check .// -->
                                
                                <div class="form-group">
                                
                                    <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                </div> <!-- form-group// -->
                            </form>
                        </div> <!-- card-body.// -->
                    </div> <!-- card .// -->

                    <p class="text-center mt-4">Don't have account? <a href="./register.php">Sign up</a></p>
                </div>
            </div>
        </div>
    </section>
    <!-- END LISTING LIST -->



    <!-- CALL TO ACTION -->
    <section class="cta-v1 py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <h2 class="text-uppercase text-white">Looking To Sell Or Rent Your Property?</h2>
                    <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property
                        Services
                        For You
                    </p>

                </div>
                <div class="col-lg-3">
                    <a href="#" class="btn btn-light text-uppercase ">request a quote
                        <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- END CALL TO ACTION -->


    <!-- Footer  -->
    <footer>
        <div class="wrapper__footer bg-theme-footer">
            <div class="container">
                <div class="row">
                    <!-- ADDRESS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <figure>
                                <img src="images/Outward_logo.png" alt="" class="logo-footer">
                            </figure>
                            <p>
                                Outywrd Commercial Simple is a place for you to help you find your next place! 

                            </p>

                        </div>

                    </div>
                    <!-- END ADDRESS -->

                    <!-- QUICK LINKS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">Quick Links</h4>
                            <div class="link__category-two-column">
                                <ul class="list-unstyled ">
                                    <li class="list-inline-item">
                                        <a href="#">Commercial</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">business</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">House</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Residential</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">Residential Tower</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Beverly Hills</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Los angeles</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">The beach</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Property Listing</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">Clasic</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Modern Home</a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="#">Luxury</a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#">Beach Pasadena</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- END QUICK LINKS -->


                    <!-- NEWSLETTERS -->
                    <div class="col-md-4">
                        <div class="widget__footer">
                            <h4 class="footer-title">follow us </h4>
                            <p class="mb-2">
                                Follow us and stay in touch to get the latest news
                            </p>
                            <p>
                                <button class="btn btn-social btn-social-o facebook mr-1">
                                    <i class="fa fa-facebook-f"></i>
                                </button>
                                <button class="btn btn-social btn-social-o twitter mr-1">
                                    <i class="fa fa-twitter"></i>
                                </button>

                                <button class="btn btn-social btn-social-o linkedin mr-1">
                                    <i class="fa fa-linkedin"></i>
                                </button>
                                <button class="btn btn-social btn-social-o instagram mr-1">
                                    <i class="fa fa-instagram"></i>
                                </button>

                                <button class="btn btn-social btn-social-o youtube mr-1">
                                    <i class="fa fa-youtube"></i>
                                </button>
                            </p>
                            <br>
                            <h4 class="footer-title">newsletter</h4>
                            <!-- Form Newsletter -->
                            <div class="widget__form-newsletter ">
                                <p>

                                    Don’t miss to subscribe to our news feeds, kindly fill the form below
                                </p>
                                <div class="mt-3">
                                    <input type="text" class="form-control mb-2" placeholder="Your email address">

                                    <button class="btn btn-primary btn-block text-capitalize" type="button">subscribe

                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- END NEWSLETTER -->
                </div>
            </div>
        </div>




    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="./js/index.bundle.js?fd365619e86ad9137a29"></script>
</body>

</html>