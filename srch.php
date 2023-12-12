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
    <?php
    require_once 'php/conn.php';
    ?>

    <h3>SEARCH RESULTS</H3>
    <div style="margin: 4%;">

        <?php

        // Process the search if the form is submitted
        if (isset($_GET['search'])) {
            $searchTerm = mysqli_real_escape_string($conn, $_GET['search']); // Escape user input

            // List of table names to search
            $tableNames = array("car_hire", "car_dealers", "otherservices", "garages_and_mechanics", "autoparts_shops");

            foreach ($tableNames as $tableName) {
                $query = "SELECT * FROM $tableName WHERE tags LIKE '%$searchTerm%'";
                $result = mysqli_query($conn, $query);
            

                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<div class="grid-container2"><div class="searchcard1">';
                        echo '<img src="images/'. $row["logo"] . '" height="80px" style="border-style: solid; border-width: 1px; max-width: 100%;"></div>';
                        echo '<div class="searchcard2"><b>' . $row['name']. "</b><br>";
                        echo "<b>Description: </b>" . $row['description'] . "<br>";
                        echo "<b>Location:</b>" . $row['location'] . "<br>". $row['contacts'] . "</div></div>";

                    }
                    
                } else {
                    echo "Error executing query: " . mysqli_error($conn);
                }
            }
        }
?>


    </div>
    <script src="js/main.js"></script>
</body>

<footer>

    <?php include 'footer.php'; ?>
</footer>

</html>