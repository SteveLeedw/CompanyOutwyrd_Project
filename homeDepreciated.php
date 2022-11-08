<?php include './commSimpleHeader.php' ?>

                    <!-- above this is the header which can be replaced when testHeader functions -->
                    <!-- if including commSimpleHeader in other areas stops working, try removing stuff from commSimple header and adding it here-->
                    <!-- or if including commSimpleHeader messes up the way other things look -->

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
        <div class="wrapper indexPage">
      		<div class="mainSection">
      			<div class="searchContainer">
      				 <form action="search.php" method="GET">	

      					<input class="searchBox" type="text" name="term" placeholder="Enter location">
      					<input class="searchButton" type="submit" value="Search">

      				</form>
      			</div>
      		</div>
      	</div>

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


                                <button class="btn main-btn" onclick="location.href=''" type="button"><img src="assets/shopping-cart 1.png" width="20"
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

                                <button class="btn main-btn" onclick="location.href=''" type="button"><img src="assets/shopping-cart 1.png" width="20"
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
