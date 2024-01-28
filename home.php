<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.js">

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/main.css">


</head>

<body>

    <!-- header -->
    <section class="header">
        <a href="home.php" class="logo">Travel Bangladesh<a />
            <nav class="navbar">
                <a href="home.php"> home </a>
                <a href="about.php"> about </a>
                <a href="package.php"> package</a>
                <a href="book.php">book </a>
            </nav>

            <div id="menu-btn" class="fas fa-bars"></div>

    </section>
    <!-- header  -->

    <!-- home section  -->
    <section class="home">
        <div class="swiper-home-slider">

            <div class="swiper-wrapper">

                <div class="swiper-slide" style="background:url(/Project32/images/saintmatin.jpg) no-repeat ">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Travel arround Bangladesh</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>

                <!-- <div class="swiper-slide" style="background:url(/Project32/images/Sadarghat.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>Discover the New places</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div>


                <div class="swiper-slide" style="background:url(/Project32/images/lalbag1.jpg) no-repeat">
                    <div class="content">
                        <span>Explore, Discover, Travel</span>
                        <h3>make your tour worthwhile</h3>
                        <a href="package.php" class="btn">discover more</a>
                    </div>
                </div> -->
            </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>

        </div>

    </section>

    <!-- home section  -->

    <!-- service  -->
    <section class="services">
        <h1 class="heading-title"> Our Services </h1>

        <div class="box-container">



            <div class="box">
                <img src="/Project32/images/bagpack.svg" alt="" height="150px" width="150px">
                <h3>Tour Guide</h3>
            </div>

            <div class="box">
                <img src="/Project32/images/airplane.svg" alt="" height="150px" width="150px">
                <h3>Adventure</h3>
            </div>

            <div class="box">
                <img src="/Project32/images/tent.svg" alt="" height="150px" width="150px">
                <h3>camping</h3>
            </div>

            <div class="box">
                <img src="/Project32/images/campfire-.svg" alt="" height="150px" width="150px">
                <h3>Camp fire</h3>
            </div>

            <div class="box">
                <img src="/Project32/images/mountains-FBQJMLK6HU.svg" alt="" height="150px" width="150px">
                <h3>Trekking</h3>
            </div>

            <div class="box">
                <img src="/Project32/images/location-.svg" alt="" height="150px" width="150px">
                <h3>off road</h3>
            </div>


        </div>

    </section>

    <!-- service  -->

    <!-- gallary  -->



    <!-- home about section start -->
    <Section class="home-about">

        <div class="image">
            <img src="/Project32/images/Sadarghat.jpg" alt="">
        </div>

        <div class="content">
            <h3>about us</h3>
            <p>Welcome to "Travel Bangladesh," your gateway to an enchanting and culturally rich land nestled in the heart of South Asia. Our website is designed to be your ultimate companion as you embark on a journey to explore the myriad wonders that Bangladesh has to offer.

                Immerse yourself in the captivating beauty of the Sundarbans, the world's largest mangrove forest, home to the elusive Bengal tiger and an abundance of unique wildlife. Discover the ancient city of Bagerhat, a UNESCO World Heritage Site, where you can marvel at the historic mosques and structures that stand as a testament to the country's rich heritage.
            </p>
            <a href="about.php" class="btn">read more</a>
        </div>

    </Section>


    <!-- home about section end -->






    <!-- home package section start -->
    <section class="home-package">
        <h1 class="heading-title">
            Our Packages
        </h1>

        <div class="box-container">

            <div class="box">
                <img src="/Project32/images/lalbag1.jpg" class="image" alt="">
                <div class="content">
                    <h3>Look around in lalbag</h3>
                    <p>Lalbagh Fort is a fort in the old city of Dhaka, Bangladesh. Its name is derived from its neighborhood Lalbagh, which means Red Garden. The term Lalbagh refers to reddish and pinkish architecture from the Mughal period. The original fort was called Fort Aurangabad.</p>
                    <h3>1200 BDT</h3>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="/Project32/images/sundarban1.jpg" class="image" alt="">
                <div class="content">
                    <h3>Adventure & tour in Sundarban</h3>
                    <p>The Sundarbans mangrove forest, one of the largest such forests in the world (140,000 ha), lies on the delta of the Ganges, Brahmaputra and Meghna rivers on the Bay of Bengal. The site is intersected by a complex network of tidal waterways, mudflats.</p>
                    <h3>10000 BDT</h3>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>


            <div class="box">
                <img src="/Project32/images/Tanguar.jpeg" class="image" alt="">
                <div class="content">
                    <h3>Adventure in tanguar Haor</h3>
                    <p>Tanguar Haor (Bengali: টাঙ্গুয়ার হাওর), located in the Dharmapasha and Tahirpur upazilas of Sunamganj District in Bangladesh, is a unique wetland ecosystem of national importance and has come into international focus. Tanguar Haor is one of the largest natural water reservoirs in South Asia</p>
                    <h3>7000 BDT</h3>
                    <a href="book.php" class="btn">book now</a>
                </div>
            </div>



        </div>
        <div class="load-more">
            <a href="package.php" class="btn">
                load more...
            </a>
        </div>


    </section>

    <!-- home package section end  -->

    <!-- home offer section start  -->
    <section class="home-offer">
        <div class="content">
            <h3>upto 50% off</h3>
            <p>
                Our website is not just a platform for information; it's your personalized travel guide. Browse through meticulously curated itineraries, helpful travel tips, and insider recommendations to ensure that your journey through Bangladesh is seamless and unforgettable. Whether you seek adventure in the hill tracts of Chittagong or tranquility in the serene beaches of Cox's Bazar, "Travel Bangladesh" is your compass to navigate the diverse landscapes and experiences this beautiful country has to offer.
            </p>
            <a href="book.php" class="btn">Book now</a>
        </div>
    </section>

    <!-- home offer section end -->



    <!--foter section start-->
    <section class="footer">
        <div class="box-container">
            <div class="box">
                <h3>quick Links</h3>
                <a href="home.php"> <i class="fas fa-angle-right"></i>home </a>
                <a href="about.php"> <i class="fas fa-angle-right"></i> about </a>
                <a href="package.php"> <i class="fas fa-angle-right"></i> package </a>
                <a href="book.php"> <i class="fas fa-angle-right"></i> Book </a>
            </div>
            <div class="box">

                <h3>extra Links</h3>
                <a href="#"> <i class="fas fa-angle-right"></i> ask questions </a>
                <a href="#"> <i class="fas fa-angle-right"></i> about us </a>
                <a href="#"> <i class="fas fa-angle-right"></i> privacy policy </a>
                <a href="#"> <i class="fas fa-angle-right"></i> terms of us </a>

            </div>
            <div class="box">
                <h3>contact us</h3>
                <a href="#"> <i class="fas fa-phone"></i> +8801724903990 </a>
                <a href="#"> <i class="fas fa-phone"></i> +8801961717323</a>
                <a href="#"> <i class="fas fa-envelope"></i> travelbd@gmail.com</a>
                <a href="#"> <i class="fas fa-map"></i> Dhaka,Bangladesh</a>
            </div>

            <div class="box">
                <h3>follow us</h3>
                <a href="#"> <i class="fab fa-facebook"></i> facebook</a>
                <a href="#"> <i class="fab fa-instagram"></i> instagram</a>
                <a href="#"> <i class="fab fa-twitter"></i> twitter</a>
                <a href="#"> <i class="fab fa-linkedin"></i> linkedin</a>

            </div>

        </div>

        <div class="credit"> <span>Created by Rezaul Karim Shibly & jakirul Islam jakir | all rights reserved</span>
        </div>


    </section>


    <!--foter section end-->

    <!--swiper js link-->
    <script src="https://unpkg.com/swiper@7/swiper-bundle.min.js"></script>

    <script src="js/Script.js">
    </script>
</body>

</html>