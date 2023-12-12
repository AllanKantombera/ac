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
        <a href="#home" class="active">
            <l style="color:  #007bff; font-weight: bolder;">AFRICARS-HUB</l>
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
                <a href="carhires.php">
                    <l>Other Services</l>
                </a><br><br>
            </div>

        </div>

        <div class="grid-item">

<img src="images/logo2.png" height="30px" style="border-radius: 0px;">
            <h2>Welcome to <b>AfriCars Hub</b>, your All-In-One destination for car-ralated 
                solutions in africa. "Find what you need <b>easily, faster, Near you!</b>"</h2>
    
            <form method="GET" action="srch.php" onsubmit="return validateForm();"
                style="display: flex; margin-bottom: 5px; float: right;">
                <div class="search-container">
                    <input type="text" name="search" class="search-input" placeholder="Enter search term">
                    <button class="search-button" type="submit" value="Search">Search</button>
                </div>
            </form>
        </div>

    </div>

</header>

<body>
<?php
    require_once 'php/conn.php';
    ?>


            <?php

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }

            $sql = "SELECT * FROM otherservices WHERE id =$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<img src="';
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
                echo "";
            }
            ?>
    
    <br><br><br> <br><br><br>

    <script src="js/main.js"></script>
</body>
<footer>

<?php include 'footer.php'; ?>
</footer>
</html>