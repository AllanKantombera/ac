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
            <l>afriCarsHub</l>
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
                <a href="transportservices.php">
                    <l>Transport Services</l>
                </a><br><br>
                <a href="carhires.php">
                    <l>Car Hires</l>
                </a><br><br>
            </div>


        </div>

        <div class="grid-item">
            <h2> WE ARE, AfriCars_Hub.<br>
                "Discover The Ultimate Car Service Network"<br>
                Find different Car services providers near you, faster and easily.
            </h2>

        </div>
    </div>

    <form method="GET" action="srch.php" style="display: flex; margin-bottom: 5px;">
        <input type="text" name="search" placeholder="Enter search term">
        <input type="submit" value="Search" style="border-radius: 20px; background-color: white;">
    </form>


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
    $tableNames = array("car_hire", "car_dealers", "transport_services", "garages_and_mechanics", "autoparts_shops", "cars_reviews", "news", "articles");

    foreach ($tableNames as $tableName) {
        $query = "SELECT * FROM $tableName WHERE tags LIKE '%$searchTerm%'";
        $result = mysqli_query($conn, $query);

        if ($result) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<h4><img src=" '. $row["logo"] . '"width="80px" style="border: solid; border-radius: 8px;"><br>';
                echo "<b>Name: </b>" . $row['names']. "<br>";
                echo "<b>Description: </b>" . $row['description'] . "<br>";
                echo "<b>Location: </b>" . $row['location'] . "</h4><br>";
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

<footer><br>

    <div class="grid-container">
        <div class="grid-item">
            Follow Us On<br>
            <div style="display:block">
                <img src="images/icon/fbicon.jpg" width="40px">
                <img src="images/icon/instaicon.jpg" width="40px">
                <img src="images/icon/lnicon.jpg" width="40px">
                <img src="images/icon/instaicon.jpg" width="40px">
            </div>
        </div>
        <div class="grid-item">
            About Us
        </div>
        <div class="grid-item">
            Contacts Us
        </div>
        <div class="grid-item">
            services
        </div>
        <div class="grid-item">
            Copyrights
        </div>
    </div>
</footer>

</html>