<?php
include "newHeader.php"?>
<?php include "./databaseInit.php"?>
<?php 
if(isset($_GET)){
    //getting listing info from database
        $listingQuery = "SELECT * FROM listings WHERE listingID=?";
        $stmd=$mysqli->prepare($listingQuery);
        $stmd->bind_param('i',$_GET['listingID']);
        $id = $_GET['listingID'];
        
        $stmd->execute();
        $result=$stmd->get_result();
        
        while($row = $result->fetch_assoc()) {
            $timeListed=$row['timeListed'];
            $nameListing=$row['listingName'];
            $addressStreet=$row['addressStreet'];
            $addressCity=$row['addressCity'];
            $addressState=$row['addressState'];
            $addressZipcode=$row['addressZipcode'];
            $saleType=$row['saleType'];
            $description=$row['description'];
            $price=$row['price'];
            
            
        }

        $dir="./listingImages/".strval($id);


        if(is_dir($dir)){
            $filesInDir = scandir($dir,1);
            if($filesInDir != false){
            array_pop($filesInDir);
            array_pop($filesInDir);
            // print_r($filesInDir);

            
            }
            foreach($filesInDir as $file){
                // echo "<img src='$dir/$file'>";
                $picLocation = "$dir/$file";
                break;
                
            }
        }

    //get pictures to display on webpage

        // $dir="./listingImages/".strval($_GET['listingID']);
        // if(is_dir($dir)){
        //     $filesInDir = scandir($dir,1);

        //     if($filesInDir != false){
        //         array_pop($filesInDir);
        //         array_pop($filesInDir);
        //         // print_r($filesInDir);

                
        //     }
        // }

}else{
    //if a user gets to this page without clicking, redirect them?
    header("Location: ./listings.php");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Rethouse - Real Estate HTML Template">
    <meta name="keywords" content="Real Estate, Property, Directory Listing, Marketing, Agency" />
    <meta name="author" content="mardianto - retenvi.com">
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

<body>
    <!-- HEADER -->
    <header class="bg-theme-overlay">
        <!-- <div class="bg-overlay-one"></div> -->
        <!-- NAVBAR -->
        <nav class="navbar navbar-hover navbar-expand-lg navbar-soft navbar-transparent">
            <div class="container">
                <a class="navbar-brand" href="./home.php">
                    <img src="./images/Outward_logo.png" alt="">
                    <img src="./images/Outward_logo.png" alt="">
                </a>
                <a href="uploadListing.php" class="btn btn-primary text-uppercase ">add listing
                            </i></a>
                       
                    </ul>

                </div> <!-- navbar-collapse.// -->
            </div>
        </nav>
        <!-- END NAVBAR -->
        <section class="section__breadcrumb ">
            <div class="container">
                <div class="row d-flex justify-content-center">
                    <div class="col-md-8 text-center">
                        <h2 class="text-capitalize text-white ">single property</h2>
                        <ul class="list-inline ">
                            <li class="list-inline-item">
                                <a href="home.php" class="text-white">
                                    Home
                                </a>
                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </section>
        <!-- END BREADCRUMB -->
    </header>
    <div class="clearfix"></div>

    <!-- SINGLE DETAIL -->
    <section class="single__Detail">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <!-- SLIDER IMAGE DETAIL -->
                    <div class="slider__image__detail-large owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider__image__detail-large-one">
                                <img src="<?php echo $picLocation?>" alt="Image not Found!" class="img-fluid w-100 img-transition">
                                <div class="description">
                                    <span class="badge badge-primary text-capitalize mb-2">Listing</span>
                                    <div class="price">
                                        <h5 class="text-capitalize"><?php echo $addressStreet ?></h5>
                                    </div>
                                    <h4> <?php echo $price ?>.00/month
                                    </h4>

                                </div>

                            </div>
                        </div>
                        <div class="item">
                            <div class="slider__image__detail-large-one">
                                <img src="listingImages/14/invest.jpg" alt="Image not Found!" class="img-fluid w-100 img-transition">
                                <div class="description">
                                <span class="badge badge-primary text-capitalize mb-2">Listing</span>
                                    <div class="price">
                                        <h5 class="text-capitalize"><?php echo $addressStreet ?></h5>
                                    </div>
                                    <h4> <?php echo $price ?>.00/month
                                    </h4>

                                </div>
                        
                            </div>
                        </div>
                    </div>

                    <div class="slider__image__detail-thumb owl-carousel owl-theme">
                        <div class="item">
                            <div class="slider__image__detail-thumb-one">
                                <img src="listingImages/14/download.jpg" alt="" class="img-fluid w-100 img-transition">
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider__image__detail-thumb-one">
                                <img src="listingImages/14/-1x-1.jpg" alt="" class="img-fluid w-100 img-transition">
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider__image__detail-thumb-one">
                                <img src="listingImages/14/invest.jpg" alt="" class="img-fluid w-100 img-transition">
                            </div>
                        </div>
                        <div class="item">
                            <div class="slider__image__detail-thumb-one">
                                <img src="listingImages/14/build.jpg" alt="" class="img-fluid w-100 img-transition">
                            </div>
                        </div>
                            </div>
                        </div>
                    </div>
                    <!-- END SLIDER IMAGE DETAIL -->
                    <div class="row">
                        <div class="col-md-9 col-lg-9">
                            <div class="single__detail-title mt-4">
                                <h3 class="text-capitalize"><?php echo $nameListing ?></h3>
                                <p class='text-capitalize'> <?php

                                    echo $addressStreet;
                                     ?></p>
                                        <p class='text-capitalize'> <?php
                                     echo $addressCity ?>, <?php echo $addressState ?>
                                     </p>
                            </div>
                        </div>
                        <div class="col-md-3 col-lg-3">
                            <div class="single__detail-price mt-4">
                                <h3 class="text-capitalize text-black">
                    
                                <?php
                                echo $price;
                                ?>

                                </h3>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <a href="#" class="badge badge-primary p-2 rounded"><i
                                                class="fa fa-print"></i></a>
                                    </li>
                                    <li class="list-inline-item">
                                        <a href="#" class="badge badge-primary p-2 rounded"><i
                                                class="fa fa-exchange"></i></a>
                                    </li>

                                    <li class="list-inline-item">
                                        <a href="" class="badge badge-primary p-2 rounded"><i
                                                class="fa fa-heart"></i></a>
                                    </li>
                                </ul>
                            </div>

                        </div>
                    </div>
                    <!-- DESCRIPTION -->
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="single__detail-desc">
                                <h6 class="text-capitalize detail-heading">description</h6>
                                <div class="show__more">

                                <?php

                                echo $description;
                                ?>
                                   <br> 
                                <br>
                                    <a href="javascript:void(0)" class="show__more-button ">read more</a>
                                </div>
                            </div>
                            <div class="clearfix"></div>


                                    </figure>
                                </div>
                            </div>

                            <!-- LOCATION -->
                            <div class="single__detail-features">
                                <h6 class="text-capitalize detail-heading">location</h6>
                                <!-- FILTER VERTICAL -->
                                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="pills-map-location-tab" data-toggle="pill"
                                            href="#pills-map-location" role="tab" aria-controls="pills-map-location"
                                            aria-selected="true">
                                            <i class="fa fa-map-marker"></i>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="pills-street-view-tab" data-toggle="pill"
                                            href="#pills-street-view" role="tab" aria-controls="pills-street-view"
                                            aria-selected="false">
                                            <i class="fa fa-street-view "></i></a>
                                    </li>


                                </ul>
                                <div class="tab-content" id="pills-tabContent">
                                    <div class="tab-pane fade show active" id="pills-map-location" role="tabpanel"
                                        aria-labelledby="pills-map-location-tab">
                                        <div id="map-canvas">
                                            <iframe class="h600 w100"
                                                src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d50446.89789906054!2d-122.41577600000001!3d37.791654!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd473843de08ff793!2sBetter%20Property%20Management!5e0!3m2!1sen!2sus!4v1591226304089!5m2!1sen!2sus"
                                                style="border:0;" allowfullscreen="" aria-hidden="false"
                                                tabindex="0"></iframe>
                                        </div>

                                    </div>
                                    <div class="tab-pane fade" id="pills-street-view" role="tabpanel"
                                        aria-labelledby="pills-street-view-tab">
                                        <iframe class="h600 w100"
                                            src="https://www.google.com/maps/embed?pb=!4v1553797194458!6m8!1m7!1sR4K_5Z2wRHTk9el8KLTh9Q!2m2!1d36.82551718071267!2d-76.34864590837246!3f305.15097!4f0!5f0.7820865974627469"
                                            style="border:0;" allowfullscreen></iframe>
                                    </div>


                                </div>
                                <!-- END FILTER VERTICAL -->
                            </div>
                            <!-- END LOCATION -->


                    <div class="sticky-top">
                        <li>
                        <!-- PROFILE AGENT -->
                        <div class="profile__agent mb-30">
                            <div class="profile__agent__group">

                                <div class="profile__agent__header">
                                    <div class="profile__agent__header-avatar">
                                        <figure>
                                            <img src="images/Outward_logo.png" alt="" class="img-fluid">
                                        </figure>

                                        <ul class="list-unstyled mb-0">
                                            <li>
                                                <h5 class="text-capitalize">Outwyrd Contact Support</h5>
                                            </li>
                                            <li><a href="tel:123456"><i
                                                        class="fa fa-phone-square mr-1"></i>(123)456-7890</a></li>
                                            </li>
                                            <li> <a href="javascript:void(0)" class="text-primary">View My Listing</a>
                                            </li>
                                        </ul>
                                    </div>

                                </div>
                                <div class="profile__agent__body">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Phone">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group mb-0">
                                        <textarea class="form-control required" rows="5" required="required"
                                            placeholder="I'm interest in [ Listing ]"></textarea>
                                    </div>
                                </div>
                                <div class="profile__agent__footer">
                                    <div class="form-group mb-0">
                                        <button class="btn btn-primary text-capitalize btn-block"> send message <i
                                                class="fa fa-paper-plane ml-1"></i></button>

                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                    </div>
                </div>
            </div>


    <!-- SCROLL TO TOP -->
    <a href="javascript:" id="return-to-top"><i class="fa fa-chevron-up"></i></a>
    <!-- END SCROLL TO TOP -->
    <script src="./js/index.bundle.js?fd365619e86ad9137a29"></script>
    <script src="./js/app.js"></script>
</body>

</html>