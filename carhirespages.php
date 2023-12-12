<!DOCTYPE html>
<html lang="en">

<head>
    <title>afriCarsHub</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<header style="background-color: rgb(255, 255, 255);">
<div class="topnav" id="myTopnav">
        <a href="index.php" class="active">
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
    require_once 'php/conn.php';
    ?>


            <?php

            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }

            $sql = "SELECT * FROM car_hire WHERE id =$id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<img src="';
                    echo $row["logo"];
                    echo '"width="100px" style="margin: 20px; border: solid; border-radius: 20px;">';
                    
                    echo '<h2>' . $row["name"] . '</h2>';
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