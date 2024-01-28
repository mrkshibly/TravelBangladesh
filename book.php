<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book</title>

    <!--swiper css link-->
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.js">

    <!--font awesome cdn link-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

    <!-- custom css file -->
    <link rel="stylesheet" href="css/style.css">

    <style>
        :root {
            --main-color: #8e44ad;
            --black: #222;
            --white: #fff;
            --light-black: #777;
            --light-white: #fff9;
            --dark-bg: rgba(0, 0, 0, 0.7);
            --light-bg: #eee;
            --border: 1rem solid var(--black);
            --box-shadow: 0 .5rem 1rem rgba(0, 0, 0, 0.1);
            --text-shadow: 0 1.5rem 3rem rgba(0, 0, 0, 0.3);
        }

        .booking .book-form {
            padding: 2rem;
            background: var(--light-bg);
        }

        .booking .book-form .flex {

            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
        }

        .booking .book-form .flex .inputBox {

            flex: 1 1 41rem;
        }


        .booking .book-form .flex .inputBox input {

            width: 100%;
            padding: 1.2rem 1.4rem;
            font-size: 1.6rem;
            color: var(--light-black);
            text-transform: none;
            margin-top: 1.5rem;
            border: var(--border);
            border-width: 0.1rem;

        }

        .booking .book-form .flex .inputBox input:focus {

            background: var(--black);
            color: var(--white);
        }

        .booking .book-form .flex .inputBox input:focus::placeholder {

            color: var(--light-white);
        }

        .booking .book-form .flex .inputBox span {
            font-size: 1.5rem;
            color: var(--light-black);

        }

        .booking .book-form .btn {

            margin-top: 2rem;
        }
    </style>

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
    <!-- header -->
    <div class="heading" style="background: url('/Project32/images/sadapathorcv.jpg') no-repeat">
        <h1>Book Now</h1>

    </div>







    <!-- booking section start  -->
    <section class="booking">
        <h1 class="heading-title">
            book your trip!
        </h1>

        <form action="book_form.php" method="post" class="book-form">

            <div class="flex">

                <div class="inputBox" style=" flex:1 1 41rem;">
                    <span>name :</span>
                    <input type="text" placeholder="enter your name" name="name">
                </div>

                <div class="inputBox">
                    <span>email :</span>
                    <input type="email" placeholder="enter your email" name="email">
                </div>
                <div class="inputBox">
                    <span>phone :</span>
                    <input type="number" placeholder="enter your number" name="phone">
                </div>
                <div class="inputBox">
                    <span>address :</span>
                    <input type="text" placeholder="enter your address" name="address">
                </div>

                <div class="inputBox">
                    <span>where to :</span>
                    <input type="text" placeholder="place you want to visit" name="location">
                </div>
                <div class="inputBox">
                    <span>how many :</span>
                    <input type="number" placeholder="number of guests" name="guests">
                </div>
                <div class="inputBox">
                    <span>arrivals :</span>
                    <input type="date" name="arrivals">
                </div>

                <div class="inputBox">
                    <span>leaving :</span>
                    <input type="date" name="leaving">
                </div>

                <!-- <div class="inputBox">
                    <span>hotel name :</span>
                    <input type="number" placeholder="your hotel name" name="hotel">
                </div>
                <div class="inputBox">
                    <span>your language :</span>
                    <input type="number" placeholder="language you use" name="language">
                </div> -->


            </div>
            <input type="submit" value="submit" class="btn" name="send">

        </form>
    </section>



















    <!-- booking section end  -->
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