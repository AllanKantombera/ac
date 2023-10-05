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
            <l style="color:  #0097bd; font-weight: bolder;">AFRICARS-HUB</l>
        </a>
        <a href="carsreviews.php">
            <l>CAR REVIEWS</l>
        </a>
        <a href="articles.php">
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
                <a href="transportservices.php">
                    <l>Transport Services</l>
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
            <h2> Welcome to Africars Hub.<br>
                'The Ultimate Car Service Network'<br>
                Find different Car services providers near you, faster and easily.
            </h2><br><br>
            <form method="GET" action="srch.php" onsubmit="return validateForm();" style="display: flex; margin-bottom: 5px; float: right;">
                <input type="text" name="search" id="search" placeholder="Enter search term" style="padding: 4px;">
                <input type="submit" value="Search" style="border-radius: 20px;">
            </form>
        </div>
     
    </div>

</header>

<body>
    <?php
    require_once 'php/conn.php';
    ?>

    <div class="grid-container">
        <div class="card1"><br>
            <img src="images/AfriCarsHub logo2.png" width="150px"><br>

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
                echo "null";
            }
            ?>
        </div>

        <div class="card1">
            <h4><b>CAR REVIEWS</b>

                <?php
                //ads php
                //ID select       
                $id = 1;
    
                // SQL query to retrieve data by ID
                $sql = "SELECT * FROM cars_reviews WHERE id = $id";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<img src="images/reviews/' . $row['img1']. '" width="80%"><br>';
                        echo $row["car_model"] . "<br>" .$row["intro"]. "<br>";
                    }
                } else {
                    echo "null";
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
    <br>
    <div class="grid-container">
        <div class="card1">
            <?php
            //ads php
            //ID select       
            $id = 1;

            // SQL query to retrieve data by ID
            $sql = "SELECT * FROM cars_reviews WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<img src="images/reviews/' . $row['img1']. '" width="80%"><br>';
                    echo $row["car_model"] . "<br>" .$row["intro"]. "<br>";
                }
            } else {
                echo "null";
            }
            ?>

        </div>
        <div class="card1">
            <h4><b>CAR REVIEWS</b>
                <?php
                //ads php
                //ID select       
                $id = 2;
    
                // SQL query to retrieve data by ID
                $sql = "SELECT * FROM cars_reviews WHERE id = $id";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<img src="images/reviews/' . $row['img1']. '" width="80%"><br>';
                        echo $row["car_model"] . "<br>" .$row["intro"]. "<br>";
                    }
                } else {
                    echo "null";
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
                echo "null";
            }
            ?>
        </div>

        <div class="card1">
            <h3>NEWS/ARTICLES</h3>
            <?php
            //ads php
            //ID select       
            $id = 1;

            // SQL query to retrieve data by ID
            $sql = "SELECT * FROM cars_reviews WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<img src="images/reviews/' . $row['img1']. '" width="80%"><br>';
                    echo $row["car_model"] . "<br>" .$row["intro"]. "<br>";
                }
            } else {
                echo "null";
            }
            ?>
            </div>
  
    </div>


    <script src="js/main.js"></script>
</body>









<footer>

    <?php include 'footer.php'; ?>
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