<!DOCTYPE html>
<html lang="en">
<head>
    <title>afriCarsHub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<header>
    <div class="topnav" id="myTopnav">
        <a href="index.php" class="active">
            <l style="color:  #007bff; font-weight: bolder;">AFRICARS-HUB</l>
        </a>
        <a href="index.php">
            <l>HOME</l>
        </a>
        <a href="carreviews.php?id=1">
            <l>CAR REVIEWS</l>
        </a>
        <a href="news&articles.php?id=1">
            <l>NEWS/ARTICLES</l>
        </a>
        <a href="aboutus.php">
            <l>ABOUT US</l>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars" style="color: black; font-size: 15px;">⥫</i>
            </a>
    </div>
    <div class="grid-container1">
        <div class="grid-item">
            <div class="linkbox">
                <br>
                <a href="autoshops.php">
                    <l>Auto-Parts shops</l>
                </a><br><br>
                <a href="garages&mechanics.php">
                    <l>Garages & Mechanics
                </a><br><br>
                <a href="cardealers.php">
                    <l>Car Dealers</l>
                </a><br><br>
                <a href="carhires.php">
                    <l>Car Hires</l>
                </a><br><br>
                <a href="otherservices.php">
                    <l>Other Services</l>
                </a><br><br>
            </div>
        </div>
        <div class="grid-item">

<img src="images/logo2.png" height="30px" style="border-radius: 0px;">
            <h2 style="color: black;">Welcome to <b>AfriCars Hub</b>, your All-In-One destination for car-ralated 
                solutions in africa. "Find what you need <b>easily, faster, Near you!</b>"</h2>
    
            <form method="GET" action="srch.php" onsubmit="return validateForm();"
                style="display: flex; margin-bottom: 5px; float: right;">
                <div class="search-container">
                    <input type="text" name="search" class="search-input" placeholder="search services/products">
                    <button class="search-button" type="submit" value="Search">Search</button>
                </div>
            </form>
        </div>

    </div>

</header>


<body>
    <div class="contentbox">
    <h2>ABOUT US</h2>
    <p>About Africars Hub**

    Welcome to Africars Hub, your premier destination for all things automotive in Africa. We are your one-stop online platform dedicated to revolutionizing the way you discover, connect with, and access a wide range of automotive services and products such as car dealers, car hire services, mechanics & garages, auto-parts shops and more.(we are currently operating in Malawi only).
    
    At Africars Hub, we understand the challenges people face when searching for reliable car services, dealers, mechanics, or spare parts providers. With the African automotive industry constantly evolving and expanding, finding the right information quickly and conveniently can be a daunting task. That's where we step in.
    
    **Our Mission**
    Our mission is simple yet powerful: to simplify and streamline your automotive journey. We are committed to making your life easier by providing a comprehensive and user-friendly platform where you can effortlessly discover the services and products you need, all in one place. Our goal is to save you time and effort, ensuring you find the perfect solution for your automotive needs.
    
    **What We Offer**
    - **Extensive Service Listings:** Africars Hub hosts a vast database of car dealers, car hire services, mechanics, garages, and more. Whether you're looking for a trusted mechanic for repairs, a reputable car dealer to purchase your dream vehicle, or even spare parts to keep your car running smoothly, we've got you covered.
    
    - **Product Catalog:** Explore our product listings for cars, spare parts, and accessories that are currently in stock at various dealerships. You can now easily find the right products to meet your specific requirements.
    
    - **Informative Content:** Stay updated with the latest automotive news, reviews, and articles. Our engaging content not only keeps you informed but also helps you make informed decisions about your vehicle.
    
    **Why Choose Africars Hub?**
    - **Convenience:** Say goodbye to the frustration of searching multiple websites or directories for car-related services and products. We bring it all together for you in one convenient location.
    
    - **Reliability:** We partner with trusted and reputable automotive service providers to ensure you have access to high-quality services and products.
    
    - **Community:** Join a community of car enthusiasts and experts who share their knowledge, experiences, and insights in our forums and discussions.
    
    Africars Hub is committed to enhancing your automotive experience by providing a fast, reliable, and user-friendly platform. Whether you're a car owner, a dealer, or a service provider, we are here to serve you better and connect you with the automotive solutions you seek.
    
    Thank you for choosing Africars Hub. Your journey to hassle-free automotive solutions starts here.<p>
    </div>
    
        <script src="js/main.js"></script>
</body>
<footer>
    <?php include 'footer.php'; ?>

</footer>
</html>