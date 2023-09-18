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
            <l style="color:  #0097bd; font-weight: bolder;">afriCarsHub</l>
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
        <input type="text" name="search" placeholder="Enter search term" style="padding: 4px;">
        <input type="submit" value="Search" style="border-radius: 20px;">
    </form>

</header>

<body>
    <?php
    require_once 'php/conn.php';
    ?>

    <div class="grid-container">
        <div class="card1"><br>
            <img src="images/AfriCarsHub logo2.png" width="100px"><br>

            <h3>
                Did You Know that you can just <i>Search</i> a car part and instantly find where you can buy it?<br>
                Search different car services providers |Car Hires|Car Dealers|Auto-Parts Shops|Mechanics & Garages|etc|
                Faster and Easy!
            </h3>
        </div>

        <div class="card1">
            <?php
            //ads php
            //ID select       
            $id = 2;

            // SQL query to retrieve data by ID
            $sql = "SELECT * FROM ads WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "" . $row["imageurl"]. "<br>" . $row["ad_url"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>


        </div>
        <div class="card1">
        <?php
            //ads php
            //ID select       
            $id = 1;

            // SQL query to retrieve data by ID
            $sql = "SELECT * FROM ads WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "" . $row["imageurl"]. "<br>" . $row["ad_url"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>

           
        </div>
        <div class="card1">

        <?php
            //ads php
            //ID select       
            $id = 3;

            // SQL query to retrieve data by ID
            $sql = "SELECT * FROM ads WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "" . $row["imageurl"]. "<br>" . $row["ad_url"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>

        </div>
    </div>

    <div class="grid-container">
        <div class="card1">
            <h3>NEWS</h3>
            <img src="images/bmw2.png" width="80%">
            <h4>
                <b>Meet Mureza, Africa’s first black-owned OEM</b><br>
                Registered in South Africa and Zimbabwe, Mureza Auto Company is Africa’s first black-owned car building
                company.
                Sales of its Prim8 (say: “primate”)
                <i>read more</i>
            </h4>

        </div>
        <div class="card1">
            <h3>CAR REVIEWS</h3>
            <img src="images/Renault.jpg" width="80%">

            <h4><b>MOBIUS MOTORS</b>Mobius Motors is a manufacturer of cars intended for its customers in Africa. The
                company's cars are designed,
                manufactured, and sold as highly durable and functional, yet affordable vehicles. These are
                designedaround
        </div>

        <div class="card1">
            <h3>ARTICLES</h3>
            <img src="images/maserati2.jpg" style="width: 80%;"><br>
            otors is a manufacturer of cars intended for its customers in Africa. The
            company's cars are designed,
            manufactured, and sold as highly durable and functional, yet affordable vehicles. These are designedaround
            the needs of the African consumer,

        </div>
        <div class="card1">
            <h3>CAR HIRERS</h3>
            <img src="images/rental.jpg" style="width: 60%;"><br>
            Visit<a href="www.axame.com"> Auto HUB</a><br>
            <i>Discover More Auto-Parts shops near you Faster and Easy</i>
        </div>
    </div>
    <div class="grid-container">
        <div class="card1">
            <h3>GARAGES & MECHANICS</h3>
            <img src="images/jaguaree.jpg" width="80%">
            <h4>
                <b>Meet Mureza, Africa’s first black-owned OEM</b><br>
                Registered in South Africa and Zimbabwe, Mureza Auto Company is Africa’s first black-owned car building
                company.
                Sales of its Prim8 (say: “primate”)
                <i>read more</i>
            </h4>

        </div>
        <div class="card1">
            <h3>CAR DEALERS</h3>
            <img src="images/mobius3.jpg" width="80%">

            <h4><b>MOBIUS MOTORS</b>Mobius Motors is a manufacturer of cars intended for its customers in Africa. The
                company's cars are designed,
                manufactured, and sold as highly durable and functional, yet affordable vehicles. These are designed
                aroundthe needs of the African consumer,
        </div>

        <div class="card1">
            <h3>TRANSPORTS SERVICES</h3>
            <img src="images//renaultm.webp" style="width: 80%;"><br>
            <i>Discover More transport service near you</i>
            Motors is a manufacturer of cars intended for its customers in Africa. The
            company's cars are designed,
            manufactured, and sold as highly durable and functional, yet affordable vehicles. These are designed
            aroundthe needs of the African consumer,
        </div>
        <div class="card1">
            <h3>AUTO-PARTS SHOPS</h3>
            <img src="images/CarPartsShop.png" style="width: 60%;"><br>
            Visit<a href="www.axame.com"> Auto HUB</a><br>
            <i>Discover More Auto-Parts shops near you Faster and Easy</i>
        </div>
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
                <img src="images/icon/twicon.jpg" width="40px">
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
<!-- //GRID TEMPLATE
<div class="grid-container">
    <div class="grid-item">
    </div>
    <div class="grid-item">  
    </div>
</div>
-->

<!--
    //php
        <?php
        require_once 'php/conn.php';
      ?>
      <?php
        // SQL query to retrieve data from the database
        $sql = "SELECT * FROM myportfolio";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            // Output data of each row
            while($row = $result->fetch_assoc()) {
                echo "<p>" . $row["myportfolio"]. "</p>";
            }
        } else {
            echo "0 results";
        }
        ?>
        <?php
            //ID select       
            // The ID you want to retrieve
            $id = 1;

            // SQL query to retrieve data by ID
            $sql = "SELECT * FROM your_table_name WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo "ID: " . $row["id"]. " - Name: " . $row["name"]. " - Email: " . $row["email"]. "<br>";
                }
            } else {
                echo "0 results";
            }
            ?>
        -->