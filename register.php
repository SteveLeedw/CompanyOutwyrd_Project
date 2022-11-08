<?php
include "newHeader.php"?>
<script src="./scripts/checkSamePasswords.js"></script>

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
        <div class="collapse navbar-collapse" id="main_nav99">
            <ul class="navbar-nav  mx-auto">
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Home </a>
                    <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                        <li><a class="dropdown-item" href="/homepage-v1.html"> Home version one </a>
                        </li>
                        <li><a class="dropdown-item" href="homepage-v2.html"> Home version two </a></li>
                        <li><a class="dropdown-item" href="/homepage-v3.html"> Home version three </a></li>
                        <li><a class="dropdown-item" href="/homepage-v4.html"> Home version four </a></li>
                        <li><a class="dropdown-item" href="/homepage-v5.html"> Home version five </a></li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> Pages </a>
                    <ul class="dropdown-menu animate fade-up">

                        <li><a class="dropdown-item icon-arrow" href="#"> Property Listing </a>
                            <ul class="submenu dropdown-menu  animate fade-up">
                                <li><a class="dropdown-item" href="/listing-style-v1.html"> Style 1</a></li>
                                <li><a class="dropdown-item" href="/listing-style-v2.html"> Style 2</a></li>
                                <li><a class="dropdown-item" href="/listing-style-v3.html"> Style 3</a></li>
                                <li><a class="dropdown-item" href="/listing-style-v4.html"> Style 4</a></li>
                                <li><a class="dropdown-item" href="/listing-style-v5.html"> Style 5</a></li>
                                <li><a class="dropdown-item icon-arrow" href="">Submenu item 3 </a>
                                    <ul class="submenu dropdown-menu  animate fade-up">
                                        <li><a class="dropdown-item" href="">Multi level 1</a></li>
                                        <li><a class="dropdown-item" href="">Multi level 2</a></li>
                                    </ul>
                                </li>
                                <li><a class="dropdown-item" href="">Submenu item 4</a></li>
                                <li><a class="dropdown-item" href="">Submenu item 5</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item icon-arrow" href="#"> Property single detail </a>
                            <ul class="submenu dropdown-menu  animate fade-up">
                                <li><a class="dropdown-item" href="/single-detail-v1.html">Style 1</a></li>
                                <li><a class="dropdown-item" href="/single-detail-v2.html">Style 2</a></li>
                                <li><a class="dropdown-item" href="/single-detail-v3.html">Style 3</a></li>
                                <li><a class="dropdown-item" href="/single-detail-v4.html">Style 4</a></li>
                                <li><a class="dropdown-item" href="/single-detail-v5.html">Style 5</a></li>
                            </ul>

                        </li>

                        <li><a class="dropdown-item icon-arrow" href="#"> Agent </a>
                            <ul class="submenu dropdown-menu  animate fade-up">
                                <li><a class="dropdown-item" href="/agents-v1.html">Style 1</a></li>
                                <li><a class="dropdown-item" href="/agents-v2.html">Style 2</a></li>
                                <li><a class="dropdown-item" href="/agents-detail.html">Agent detail</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item icon-arrow" href="#"> Agency </a>
                            <ul class="submenu dropdown-menu  animate fade-up">
                                <li><a class="dropdown-item" href="/agency-v1.html">Style 1</a></li>
                                <li><a class="dropdown-item" href="/agency-v2.html">Style 2</a></li>
                                <li><a class="dropdown-item" href="/agency-detail.html">Agency detail</a></li>
                            </ul>
                        </li>
                        <li><a class="dropdown-item" href="/about-us.html">About us </a>
                        <li><a class="dropdown-item" href="/login.html">Login </a>
                        <li><a class="dropdown-item" href="/register.html"> Register </a>
                        <li><a class="dropdown-item" href="/contact.html"> Contact </a>
                        <li><a class="dropdown-item" href="/404.html"> 404 Error </a>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" data-toggle="dropdown"> Blog </a>
                    <ul class="dropdown-menu dropdown-menu-left animate fade-up">
                        <li><a class="dropdown-item" href="/blog.html"> Blog </a>
                        </li>
                        <li><a class="dropdown-item" href="/blog-single.html"> Blog Single </a></li>

                    </ul>
                </li>

                <li class="nav-item"><a class="nav-link" href="/contact.html"> contact </a></li>
            </ul>


            <!-- Search bar.// -->
            <ul class="navbar-nav">
                <li>
                    <a href="#" class="btn btn-primary text-capitalize">
                        <i class="fa fa-plus-circle mr-1"></i> add listing</a>
                </li>
            </ul>
            <!-- Search content bar.// -->
            <div class="top-search navigation-shadow">
                <div class="container">
                    <div class="input-group ">
                        <form action="#">

                            <div class="row no-gutters mt-3">
                                <div class="col">
                                    <input class="form-control border-secondary border-right-0 rounded-0" type="search"
                                        value="" placeholder="Search " id="example-search-input4">
                                </div>
                                <div class="col-auto">
                                    <a class="btn btn-outline-secondary border-left-0 rounded-0 rounded-right"
                                        href="/search-result.html">
                                        <i class="fa fa-search"></i>
                                    </a>
                                </div>
                            </div>

                        </form>
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
                            <h2 class="text-capitalize text-white">register</h2>
                            <ul class="list-inline ">
                                <li class="list-inline-item">
                                    <a href="#" class="text-white">
                                        home
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-white">
                                        page
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="text-white">
                                        register
                                    </a>
                                </li>

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
                    <!-- Form Register -->

<div class="card mx-auto" style="max-width:520px;">
    <div class="card-body">
        <h4 class="card-title mb-4">Sign in</h4>
        <form action="./createUserBackend.php", id='createAccount', method="POST">
            <div class="form-row">
                <div class="col form-group">
                    <label>First name</label>
                    <input type="text" class="form-control" name="firstName" id='firstName'>
                </div> <!-- form-group end.// -->
                <div class="col form-group">
                    <label>Last name</label>
                    <input type="text" class="form-control" name="lastName" id='lastName'>
                </div> <!-- form-group end.// -->
            </div> <!-- form-row end.// -->
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" id='email' required="required">
                <small class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div> <!-- form-group end.// -->
            
            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label>Create password</label>
                    <input class="form-control" type="password" name="password" id='pass1'>
                </div> <!-- form-group end.// -->
                <div class="form-group col-md-6">
                    <label>Repeat password</label>
                    <input class="form-control" type="password" name="confirmpassword" id='pass2'>
                </div> <!-- form-group end.// -->
            </div>
            <div class="form-group">
                <button type="button" class="btn btn-primary btn-block" name="submitButton" onclick=check()> Register </button>
            </div> 
            <!-- <div class="form-group">
                <label class="custom-control custom-checkbox"> <input type="checkbox" class="custom-control-input"
                        checked="">
                    <span class="custom-control-label"> I am agree with <a href="#">terms and contitions</a> </span>
                </label>
            </div>  -->
        </form>
    </div><!-- card-body.// -->
</div>
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
                <p class="text-capitalize text-white">We Will Assist You In The Best And Comfortable Property Services
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
                            Rethouse Real Estate is a premium Property template based on Bootstrap 4. Rethouse Real
                            Estate helped thousands of clients to find the right property for their needs.

                        </p>

                        <ul class="list-unstyled mb-0 mt-3">
                            <li> <b> <i class="fa fa-map-marker"></i></b><span>214 West Arnold St. New York, NY
                                    10002</span> </li>
                            <li> <b><i class="fa fa-phone-square"></i></b><span>(123) 345-6789</span> </li>
                            <li> <b><i class="fa fa-phone-square"></i></b><span>(+100) 123 456 7890</span> </li>
                            <li> <b><i class="fa fa-headphones"></i></b><span>support@realvilla.demo</span> </li>
                            <li> <b><i class="fa fa-clock-o"></i></b><span>Mon - Sun / 9:00AM - 8:00PM</span> </li>
                        </ul>
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

    <!-- Footer Bottom -->
    <div class="bg__footer-bottom-v1">
        <div class="container">
            <div class="row flex-column-reverse flex-md-row">
                <div class="col-md-6">
                    <span>
                        © 2020 Rethouse Real Estate - Premium real estate & theme &amp; theme by
                        <a href="#">retenvi.com</a>
                    </span>
                </div>
                <div class="col-md-6">
                    <ul class="list-inline ">
                        <li class="list-inline-item">
                            <a href="#">
                                privacy
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                contact
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                about
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">
                                faq
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Footer  -->
</footer>







    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>

<script type="text/javascript" src="./js/index.bundle.js?10eb1139a9f2b8f356b2"></script></body>

</html>