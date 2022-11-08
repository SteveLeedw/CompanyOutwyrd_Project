<?php
//the new header to be php included at the beginning of all files
session_start();


?>
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="Outwyrd - Commercial Simple">
<meta name="keywords" content="Outwyrd - Commercial Simple" />
<meta name="author" content="">

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

<header>
    <!-- style="position:fixed; width:100%; -webkit-transform: translateZ(0); z-index: 1000; overflow:visible;   -->
        <!-- NAVBAR TOP -->
        <div class="topbar d-none d-sm-block" >
            <div class="container " >
                <div class="row">
                    <div class="col-sm-12 col-md-5">
                        <div class="topbar-left">
                            <div class="topbar-text">
                                <?php echo(date("l".", M d, Y")); ?>
                                <!-- Monday, March 22, 2020 -->
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-7">
                        <div class="list-unstyled topbar-right">
                            <ul class="topbar-link">
                                <li>
                                    
                                
                                
                                <!-- <a href="./login.php" title="">Login / Register</a> -->
                            
                                <?php
                                    if(isset($_SESSION["loggedIn"])==true && $_SESSION["loggedIn"]==true){//if a login was attempted and was successful
                                        echo '<a href="userInfo.php">'.$_SESSION['firstName'].'</a>';

                                    }else{//if no login was attempted or login failed, display login link
                                        echo '<a  href="./login.php">Login / Register</a>';

                                    }

                                ?>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</header>