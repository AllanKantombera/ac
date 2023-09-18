<!DOCTYPE html>
<html lang="en">

<head>
    <title>afriCarsHub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/main.css">
</head>
<header style="background-color: rgb(255, 255, 255);">
<div class="topnav" id="myTopnav">
        <a href="../index.php" class="active">
            <l>HOME</l>
        </a>
        <a href="carsreviews.php">
            <l>CAR REVIEWS</l>
        </a>
        <a href="news.php">
            <l>NEWS</l>
        </a>
        <a href="articles.php">
            <l>ARTICLES</l>
        </a>
        <a href="aboutus.php">
            <l>ABOUT US</l>
            <a href="javascript:void(0);" class="icon" onclick="myFunction()">
                <i class="fa fa-bars" style="color: black; font-size: 15px;">⥫</i>
            </a>
    </div>
</header>

<body>
<?php
    require_once '../php/conn.php';
    ?>


            <?php

            if (isset($_GET['id'])) {
                $car_dealersId = $_GET['id'];
            }

            $sql = "SELECT * FROM car_dealers WHERE id =$car_dealersId";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<img src="../';
                    echo $row["logo"];
                    echo '"width="100px" style="margin: 20px; border: solid; border-radius: 20px;">';
                    echo '<h2>' . $row["names"] . '</h2>';
                    echo '<h4>' . $row["description"] . '</h4>';

                    echo '    <div class="grid-container1"><div class="grid-item1"><h4>ABOUT US</h4>';
                    echo '<h4>' . $row["about_us"] . '</h4> </div>';
                    echo '    <div class="grid-container1"><div class="grid-item1"><h4>CONTATS</h4>';
                    echo '<h4>' . $row["contacts"] . '</h4> </div></div>';
                    echo '    <div class="grid-container1"><div class="grid-item1"><h4>LOCATION</h4>';
                    echo '<h4>' . $row["location"] . '</h4> </div></div>';
                    echo '</div>';
                }

                
            } else {
                echo "0 results";
            }
            ?>
    
    <br><br><br> <br><br><br>

    <script src="../js/main.js"></script>
</body>
<footer>
    <div class="grid-container">
        <div class="grid-item">
            Follow Us On<br>
            <div style="display:block">
                <img src="../images/icon/fbicon.jpg" width="40px">
                <img src="../images/icon/instaicon.jpg" width="40px">
                <img src="../images/icon/lnicon.jpg" width="40px">
                <img src="../images/icon/instaicon.jpg" width="40px">
            </div>
        </div>
        <div class="grid-item">
        ABOUT US<br>
            Welcome to Africars Hub, your premier destination for all things automotive in Africa.
             We are your one-stop online platform dedicated to revolutionizing the way you discover,
              connect with, and access a wide range of automotive services and products such as car dealers,
               car hire services, mechanics & garages, auto-parts shops and more.(we are currently operating in Malawi only).
        </div>
        <div class="grid-item">
            Contacts Us
        </div>
        <div class="grid-item">
            services
        </div>
        <div class="grid-item">
            Copyright
        </div>
    </div>
</footer>
</html>