<?php

include "./databaseInit.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Outwyrd - Commercial Simple">
    <meta name="keywords" content="Commercial Listings Made Simple" />
    <title>Outwyrd - Commercial Simple</title>

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
    <header class="jumbotron bg-theme">
        <div class="bg-overlay"></div>
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="file:///Users/kaylie/Desktop/outwyrd/PROPERTY/homepage-v1.html#">
                    <img src="images/Outward_logo.png" alt="">
                    <img src="images/Outward_logo.png" alt="">
                </a>

                </ul>

                    <ul class="navbar-nav ">
                        <li>
                        <a href="uploadListing.php" class="btn btn-primary text-uppercase ">add listing
                            </i></a>
                        </li>
                    </ul>
 
            </div>
        </nav>
        <!-- END NAVBAR -->
        <!-- HERO -->
        <div class="wrap__intro d-flex align-items-md-center ">
            <div class="container">
                <div class="row align-items-center justify-content-start flex-wrap">
                    <div class="col-md-10 mx-auto">
                        <div class="wrap__intro-heading text-center" data-aos="fade-up">
                            <!-- <h4>the walls property</h4> -->
                            <h1>
                                Find Your Commercial Property! </h1>
                            <p>Your Property, Our Priority and From as low as $10 per day with limited time offer
                                discounts</p>

                            <!-- SEARCH BAR -->
                            <div class="wrapper__section" >
                                <div class="wrapper__section__components">
                                    <div>
                                        
                                        
                                            
                                                
                                                    <form action="./search.php", method="GET">
                                                    <div style='display: inline-block; width:80%'>
                                                        <input style='' type="text" class="form-control" aria-label="Text input"
                                                            placeholder="Search for Homes by Address, City . . . ." name='searchParam' id='searchParam'>
                                                    </div>


                                                    
                                                    <div style='display: inline-block; '>
                                                        <button class="btn btn-primary btn-block" type="submit" name = 'search' id='search'>
                                                            <i class="fa fa-search"></i> <span
                                                                class="ml-1 text-uppercase">Search</span>
                                                        </button>

                                                    <div>
                                                    </form>
                                                
                                            
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- END HERO -->
    </header>
    <!-- END HEADER -->


    <!-- FEATURED PROPERTIES -->
    <section class="featured__property ">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            featured properties
                        </h2>
                        <p class="text-center text-capitalize">handpicked exclusive properties by our team.</p>

                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                        <div class="item">
                            <!-- ONE -->
                            <div class="card__image card__box">
                                <div class="card__image-header h-250">
                                    <div class="ribbon text-capitalize">featured</div>
                                    <img src="images/feature1.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info"> for sale</div>
                                </div>
                                <div class="card__image-body">
                                    <span class="badge badge-primary text-capitalize mb-2">house</span>
                                    <h6 class="text-capitalize">
                                        Apartment Building
                                    </h6>

                                    <p class="text-capitalize">
                                        <i class="fa fa-map-marker"></i>
                                        west flaminggo road, las vegas
                                    </p>
                                    <ul class="list-inline card__content">
                                        <li class="list-inline-item">

                                            <span>
                                                baths <br>
                                                <i class="fa fa-bath"></i> 2 per floor
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                beds <br>
                                                <i class="fa fa-bed"></i> 2 per room
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                rooms <br>
                                                <i class="fa fa-inbox"></i> 2/3 per room
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                area <br>
                                                <i class="fa fa-map"></i> 43,000 sq ft
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card__image-footer">
                                    <figure>
                                        <img src="images/blog1.png" alt="" class="img-fluid rounded-circle">
                                    </figure>
                                    <ul class="list-inline my-auto">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                tom wilson <br>
                                            </a>

                                        </li>

                                    </ul>
                                    <ul class="list-inline my-auto ml-auto">
                                        <li class="list-inline-item ">
                                            <h6>$700.00 per month</h6>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- TWO -->
                            <div class="card__image card__box">
                                <div class="card__image-header h-250">
                                    <div class="ribbon text-capitalize">featured</div>
                                    <img src="images/feature2.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info"> for rent</div>
                                </div>
                                <div class="card__image-body">
                                    <span class="badge badge-primary text-capitalize mb-2">house</span>
                                    <h6 class="text-capitalize">
                                        Office Building
                                    </h6>

                                    <p class="text-capitalize">
                                        <i class="fa fa-map-marker"></i>
                                        madison, new jersey
                                    </p>
                                    <ul class="list-inline card__content">
                                        <li class="list-inline-item">

                                            <span>
                                                baths <br>
                                                <i class="fa fa-bath"></i> 1/2 per room
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                beds <br>
                                                <i class="fa fa-bed"></i> 3 per room
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                rooms <br>
                                                <i class="fa fa-inbox"></i> 3/4 per room
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                area <br>
                                                <i class="fa fa-map"></i> 50,000 sq ft
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card__image-footer">
                                    <figure>
                                        <img src="images/blog2.png" alt="" class="img-fluid rounded-circle">
                                    </figure>
                                    <ul class="list-inline my-auto">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                lisa truman <br>
                                            </a>

                                        </li>

                                    </ul>
                                    <ul class="list-inline my-auto ml-auto">
                                        <li class="list-inline-item">

                                            <h6>$350.00 per month</h6>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <!-- THREE -->
                            <div class="card__image card__box">
                                <div class="card__image-header h-250">
                                    <div class="ribbon text-capitalize">featured</div>
                                    <img src="images/feature3.jpg" alt="" class="img-fluid w100 img-transition">
                                    <div class="info"> for lease</div>
                                </div>
                                <div class="card__image-body">
                                    <span class="badge badge-primary text-capitalize mb-2">house</span>
                                    <h6 class="text-capitalize">
                                        Storage Unit
                                    </h6>

                                    <p class="text-capitalize">
                                        <i class="fa fa-map-marker"></i>
                                        new york city, new york
                                    </p>
                                    <ul class="list-inline card__content">
                                        <li class="list-inline-item">

                                            <span>
                                                baths <br>
                                                <i class="fa fa-bath"></i> 0
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                beds <br>
                                                <i class="fa fa-bed"></i> 0
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                rooms <br>
                                                <i class="fa fa-inbox"></i> 10 per corridor
                                            </span>
                                        </li>
                                        <li class="list-inline-item">
                                            <span>
                                                area <br>
                                                <i class="fa fa-map"></i> 2,700 sq ft
                                            </span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card__image-footer">
                                    <figure>
                                        <img src="images/blog3.png" alt="" class="img-fluid rounded-circle">
                                    </figure>
                                    <ul class="list-inline my-auto">
                                        <li class="list-inline-item">
                                            <a href="#">
                                                jessica wilson <br>
                                            </a>

                                        </li>

                                    </ul>
                                    <ul class="list-inline my-auto ml-auto">
                                        <li class="list-inline-item">

                                            <h6>$200.00 per month</h6>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="item">
                                    </ul>
                                    <ul class="list-inline my-auto ml-auto">
                                        <li class="list-inline-item">
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- END FEATURED PROPERTIES -->

    <!-- CALL TO ACTION -->
    <section class="bg-theme-v1">
        <div class="cta">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-12 col-lg-12 text-center">
                        <h2 class="text-uppercase text-white">signup & build your dream house</h2>
                        <p class="text-capitalize text-white">We'll help you to grow your career and growth, please
                            contact
                            team
                            walls real estate and get this offer promo</p>
                        <a href="https://www.outwyrd.com/" class="btn btn-primary text-uppercase ">request a quote
                            <i class="fa fa-angle-right ml-3 arrow-btn "></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- BLOG -->
    <section class="blog__home">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-6 mx-auto">
                    <div class="title__head">
                        <h2 class="text-center text-capitalize">
                            lastest news
                        </h2>
                        <p class="text-center text-capitalize">find of the most popular real estate company all around
                            indonesia. </p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <!-- BLOG  -->
                    <div class="card__image">
                        <div class="card__image-header h-250">
                            <img src="images/blogone.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> event</div>
                        </div>
                        <div class="card__image-body">
                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                            <h6 class="text-capitalize">
                                <a href="/blog-single.html">Best Interior Oppertunity </a>
                            </h6>
                            <p class=" mb-0">
                                Real estate festival is one of the famous feval for explain to you how all this mistaolt
                                deand praising pain
                                wasnad I will give complete

                            </p>


                        </div>
                        <div class="card__image-footer">
                            <figure>
                                <img src="images/blog1.png" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item ">
                                    <a href="#">
                                        tom wilson
                                    </a>

                                </li>

                            </ul>
                            <ul class="list-inline my-auto ml-auto">
                                <li class="list-inline-item ">
                                <a href='https://thesoughtafter.com/2021/12/29/best-interior-design-blogs/'><button>Read More!</button></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG -->
                </div>
                <div class="col-md-4">
                    <!-- BLOG  -->
                    <div class="card__image">
                        <div class="card__image-header h-250">
                            <img src="images/blogtwo.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> event</div>
                        </div>
                        <div class="card__image-body">
                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                            <h6 class="text-capitalize">
                                <a href="/blog-single.html">Tips & Trick buy real estate </a>
                            </h6>
                            <p class=" mb-0">
                                Real estate festival is one of the famous feval for explain to you how all this mistaolt
                                deand praising pain
                                wasnad I will give complete

                            </p>


                        </div>
                        <div class="card__image-footer">
                            <figure>
                                <img src="images/blog2.png" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline my-auto">
                                <li class="list-inline-item">
                                    <a href="/blog-single.html">
                                        lisa truman
                                    </a>

                                </li>

                            </ul>
                            <ul class="list-inline my-auto ml-auto">
                                <li class="list-inline-item">
                                <a href='https://www.thebalance.com/mega-tips-for-a-first-time-home-seller-4057383'><button>Read More!</button></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG -->
                </div>
                <div class="col-md-4">
                    <!-- BLOG  -->
                    <div class="card__image">
                        <div class="card__image-header h-250">
                            <img src="images/blogthree.jpg" alt="" class="img-fluid w100 img-transition">
                            <div class="info"> event</div>
                        </div>
                        <div class="card__image-body">
                            <!-- <span class="badge badge-secondary p-1 text-capitalize mb-3">May 08, 2019 </span> -->
                            <h6 class="text-capitalize">
                                <a href="/blog-single.html">Our Most Popular Deluxe House </a>
                            </h6>
                            <p class=" mb-0">
                                Real estate festival is one of the famous feval for explain to you how all this mistaolt
                                deand praising pain
                                wasnad I will give complete

                            </p>


                        </div>
                        <div class="card__image-footer">
                            <figure>
                                <img src="images/blog3.png" alt="" class="img-fluid rounded-circle">
                            </figure>
                            <ul class="list-inline  my-auto">
                                <li class="list-inline-item">
                                    <a href="/blog-single.html">
                                        jessica wilson
                                    </a>

                                </li>

                            </ul>
                            <ul class="list-inline my-auto ml-auto">
                                <li class="list-inline-item ">
                                <a href='https://www.thehousedesigners.com/house-plans/luxury/'><button>Read More!</button></a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <!-- END BLOG -->
                </div>
            </div>
        </div>
    </section>
    <!-- END BLOG -->




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