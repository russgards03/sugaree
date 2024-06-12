<?php
include 'config/config.php';

try {
    $pdo = new PDO("mysql:host=" . DB_SERVER . ";dbname=" . DB_DATABASE, DB_USERNAME, DB_PASSWORD);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $stmt = $pdo->query("SELECT * FROM tbl_specialties");
    $slides = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sugaree Cafe & Gelato</title>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">

        <!--- CSS -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
        <link rel="stylesheet" href="css/style.css">

        <!--- Javascript -->
        <script src="js/script.js"></script>
    </head>
    <body>
        <header>
            <a href="#" class="logo">
                <img src="img/logo.png" alt="Sugaree Logo">
                Sugaree
            </a>
            <nav class="navbar">
                <a class="active" href="#home">Home</a>
                <a href="#dishes">Dishes</a>
                <a href="#about">About</a>
                <a href="#gallery">Gallery</a>
                <a href="#review">Review</a>
                <div class="dropdown">
                    <a href="#" class="dropbtn">Order</a>
                    <div class="dropdown-content">
                        <a href="#"><img src="img/grab.png" alt="Grab Logo" class="logo"> Grab</a>
                        <a href="#"><img src="img/foodpanda.png" alt="FoodPanda Logo" class="logo"> FoodPanda</a>
                        <a href="https://www.facebook.com/EboyRiderOfficialPage" target="_blank"><img src="img/eboy.jpg" alt="Eboy Logo" class="logo"> Eboy</a>
</nav>

<div class="icons">
    <i class="fas fa-bars" id="menu-bars"></i>
    <i class="fas fa-search" id= "search-icon"></i>
    <a href="#" class="fas fa-heart"></a>
    <a href="login.php" id="loginLink" class="fas fa-sign-in-alt"></a> 
    <button id="logoutButton" class="fas fa-sign-out-alt" style="display:none; border: none; background: none; cursor: pointer;"></button>

</div>
    </nav>
</header>

<!--- SEARCH -->
<form action="" id="search-form">
    <input type="search" name="" id="search-box">
    <label for="search-box" placeholder="Search here..." class="fas fa-search"></label>
    <i class="fas fa-times" id="close"></i>
</form>


<!--- home -->
<section class="home" id="home">
    <div class="swiper-container home-slider">
        <div class="swiper-wrapper wrapper">
            <?php 
            $initialSlides = $slides;

            foreach ($initialSlides as $slide): 
            ?>
            <div class="swiper-slide slide">
                <div class="content">
                    <span> Our specialty </span>
                    <h3><?php echo $slide['specialty_title']; ?></h3>
                    <p><?php echo $slide['specialty_desc']; ?></p>
                    <a href="menu.php" class="btn">Order Now</a>
                </div>
                <div class="image">
                    <img src="<?php echo $slide['specialty_img']; ?>" alt='specialty_alt'>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>


<!--- dishes section -->

<section class="dishes"  id="dishes">


<h3 class="sub-heading"> Our Dishes </h3>
<h3 class="heading"> Popular Dishes </h3>

<div class="box-container">

    <div class="box">
        <a href="#" class="fas fa-heart"></a>
        <a href="#" class="fas fa-eye"></a>
        <img src="img/Croissant.png" alt="">
        <h3>Croissant</h3>
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
        </div>
        <span>PHP 85.50 </span>
        <a href="#" class="btn">Go to Menu</a>
        </div>

        <div class="box">
            <a href="#" class="fas fa-heart"></a>
            <a href="#" class="fas fa-eye"></a>
            <img src="img/Pizza.png" alt="">
            <h3>Pizza</h3>
            <div class="stars">
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star"></i>
                <i class="fas fa-star-half-alt"></i>
            </div>

            <span>PHP 399.50 </span>
            <a href="#" class="btn">Go to Menu</a>
            </div>
            <div class="box">
                <a href="#" class="fas fa-heart"></a>
                <a href="#" class="fas fa-eye"></a>
                <img src="img/Gelato.png" alt="">
                <h3>Gelato</h3>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star-half-alt"></i>
                </div>
                <span>PHP 120.99 </span>
                <a href="#" class="btn">Go to Menu</a>
                </div>
                <div class="box">
                    <a href="#" class="fas fa-heart"></a>
                    <a href="#" class="fas fa-eye"></a>
                    <img src="img/Strawberry.png" alt="">
                    <h3>Strawberry</h3>
                    <div class="stars">
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star"></i>
                        <i class="fas fa-star-half-alt"></i>
                    </div>
                    <span>PHP 180.99 </span>
                    <a href="#" class="btn">Go to Menu</a>
                    </div>
                    <div class="box">
                        <a href="#" class="fas fa-heart"></a>
                        <a href="#" class="fas fa-eye"></a>
                        <img src="img/Cappucino.png" alt="">
                        <h3>Cappucino</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                        <span>PHP 150.99 </span>
                        <a href="#" class="btn">Go to Menu</a>
                        </div>
                        <div class="box">
                            <a href="#" class="fas fa-heart"></a>
                            <a href="#" class="fas fa-eye"></a>
                            <img src="img/Cupcake.png" alt="">
                            <h3>Cupcake</h3>
                            <div class="stars">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star-half-alt"></i>
                            </div>
                            <span>PHP 60.50 </span>
                            <a href="#" class="btn">Go to Menu</a>
                            </div>
                            <div class="box">
                                <a href="#" class="fas fa-heart"></a>
                                <a href="#" class="fas fa-eye"></a>
                                <img src="img/Cinnamon.png" alt="">
                                <h3>Cinnamon</h3>
                                <div class="stars">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star-half-alt"></i>
                                </div>
                                <span>PHP 90.00 </span>
                                <a href="#" class="btn">Go to Menu</a>
                                </div>
                            </div>
                        
                        
    </div>
</div>

<!-- about -->
<section class="about" id="about">
<h3 class="sub-heading"> About Sugaree </h3>
<h1 class="heading"> Why choose Sugaree? </h1>

<div class="row">

    <div class="image">
        <img src="img/Sugaree.jpg" alt="">
    </div>

<div class="content">
    <h3>The only one on Bacolod that serves Gelato</h3>
    <p>It has been the dream of Mrs. Eylonah Strauss to have her very own bakery. Her true passion of creating tasty sweets
        for people to eat. Right now, we introduce a new journey for us both, creating outside the lines of our comfort zones
        with a concept of coffee, gelato, bakery, pizza, and cafe. We are excited to join the amazing hospitality & business community
        here in Bacolod. </p>
    <p>
        Pair your gelato with our specialty coffee brewed to perfection, and you have a match made in dessert heaven. 
    Whether you're catching up with friends or treating yourself to a moment of bliss, 
    Sugaree Cafe and Gelato promises a sweet escape you won't soon forget. </p>

    <div class="icons-container">
        <div class="icons">
            <i class="fas fa-shipping-fast"></i>
            <span>available for delivery</span>
        </div>
        <div class="icons">
            <i class="fas fa-dollar-sign"></i>
            <span>easy payments</span>
        </div>
        <div class="icons">
            <i class="fas fa-headset"></i>
            <span>fast service</span>
        </div>
    </div>
    <a href="#" class="btn">learn more</a>


</div>

</div>



</div>

<!-----Gallery--->

<section class="gallery" id="gallery">

    <input type="radio" name="Photos" id="check1" checked>
    <input type="radio" name="Photos" id="check2" checked>
    <input type="radio" name="Photos" id="check3" checked>
    <input type="radio" name="Photos" id="check4" checked>
    
    <div class="container">
        <h1> Our Photo Gallery</h1>
        <div class="top-content">
            <h3>Photo Gallery</h3>
            <label for="check1">All</label>
            <label for="check2">Crew</label>
            <label for="check3">Food</label>
            <label for="check4">Place</label>

        </div>

        <div class="photo-gallery">
            <div class="pic crew">
                <img src="img/crew1.jpg">
            </div>
            <div class="pic crew">
                <img src="img/crew2.JPG">
            </div>
            <div class="pic crew">
                <img src="img/crew3.JPG">
            </div>
            <div class="pic crew">
                <img src="img/crew4.jpg">
            </div>
            <div class="pic crew">
                <img src="img/crew5.jpg">
            </div>
            <div class="pic crew">
                <img src="img/crew6.jpg">
            </div>
            <div class="pic crew">
                <img src="img/crew7.jpg">
            </div>
            <div class="pic crew">
                <img src="img/crew8.JPG">
            </div>
        <div class="pic place">
            <img src="img/place1.jpg">
        </div>
        <div class="pic place">
            <img src="img/place2.jpg">
        </div>
        <div class="pic food">
            <img src="img/food1.jpg">
        </div>
        <div class="pic food">
            <img src="img/food2.jpg">
        </div>
         
         
         
        </div>

    </div>
    
<!--- review -->

<section class="review" id="review">
    <h3 class="sub-heading">people's review</h3>
    <h1 class="heading">what they think</h1>
    <div class="swiper-container review-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/russ.jpg" alt="">
                    <div class="user-info">
                        <h3>Russ Allen Garde</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>Their gelato is divine, with a creamy texture and intense flavors. I also love their pizzas - they're thin crust and perfectly baked. 
                    Whether you're in the mood for gelato or pizza, Sugaree has something delicious for everyone.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/rom.jpg" alt="">
                    <div class="user-info">
                        <h3>Romeo Seva III</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Sugaree is my favorite spot to satisfy my sweet cravings in the City. 
                    Their gelato is top-notch, with flavors that transport you to Italy. The croissants are also amazing - buttery and flaky.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/deng.jpg" alt="">
                    <div class="user-info">
                        <h3>Andrea Gerome</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>I can't get enough of Sugaree's gelato! It's the perfect treat on a hot day. 
                    Their pastries, especially the croissants, are also incredible. The atmosphere is cozy, and the staff is always friendly. </p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/juju.jpg" alt="">
                    <div class="user-info">
                        <h3>Julianne Silawan</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                <p>Sugaree has become my go-to spot for delicious treats in Bacolod. Their gelato is creamy and rich, and they offer a wide variety of flavors to choose from. T
                    he croissants are also a must-try - they're baked to perfection! Sugaree never disappoints.</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/lek2.jpg" alt="">
                    <div class="user-info">
                        <h3>Lexxy Lain Villa</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>Sugaree is a hidden gem in Bacolod! Their gelato is out of this world, with unique flavors that you won't find anywhere else. I also love their croissants, which are flaky and buttery.
                     Whether you're in the mood for gelato or pastries, Sugaree is the place to be!</p>
            </div>
            <div class="swiper-slide slide">
                <i class="fas fa-quote-right"></i>
                <div class="user">
                    <img src="img/yna.jpg" alt="">
                    <div class="user-info">
                        <h3>Ma. Yna Maurich Gellaco</h3>
                        <div class="stars">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                <p>The food is good. It seems like a place out of the 1990s where I can chill and enjoy it's ambience. 
                    They are also customer-friendly. I recommend this place so much!
                </p>
            </div>
        </div>
    </div>
</section>
</div>


    </div>







</section>

<section class="footer">


    <div class="box-container">
        <div class="box">
            <h3>locations</h3>
            <a href="#">Bacolod City</a>

        </div>

        <div class="box">
            <h3>quick links</h3>
            <a href="#">Home</a>
            <a href="#">Dishes</a>
            <a href="#">About</a>
            <a href="#">Gallery</a>
            <a href="#">Review</a>
        </div>
        <div class="box">
            <h3>Contact info</h3>
            <a href="#">09218127464</a>
            <a href="#">09695213199</a>
            <a href="#">+123-456-7890</a>
            <a href="#">+113-136-7394</a>
            <a href="#">+143-176-7240</a>
            
        </div>
        <div class="box">
            <h3>follow us</h3>
            <a href="https://www.facebook.com/profile.php?id=61555400134289" target="_blank"><img src="img/facebook.png" alt="Facebook Logo" class="logo"> Facebook</a>
            <a href="https://www.instagram.com/yourpage" target="_blank"><img src="img/instagram.png" alt="Instagram Logo" class="logo"> Instagram</a>
            <a href="https://www.youtube.com/yourchannel" target="_blank"><img src="img/youtube.png" alt="YouTube Logo" class="logo"> YouTube</a>
        </div>
    </div>
</div>

<div class="credit"> copyright @ 2024 by <span>iBento Creatives - Dyne-Russ-Romeo </span></div>



    </div>
</section>









</section>



</section>






</section>







</section>










    </head>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<!--- custom js -->
    <script src="js/script.js"></script>

</body>
</html>
