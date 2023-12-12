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
            <h2 style="color: black;"><b>AfriCars Hub</b>, your All-In-One destination for car-ralated 
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
    <div class="grid-container">
        <div class="card1">
            <h4><b>CAR REVIEWS</b>
                <?php
                //ID select       
                $id = 1;
                // SQL query to retrieve data by ID
                $sql = "SELECT * FROM cars_reviews WHERE id = $id";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<img src="images/reviews/' . $row['img1']. '" width="80%"><br>';
                        echo $row["car_model"] . "<br>" .$row["intro"]. '<a href="' . $row['fullreview_url'] . '"><i>  full review</i></a> <br>';
                    }
                } else {
                    echo "null";
                }
                ?>
            </h4>
        </div>
        <div class="card1">
            <h4><b>CAR REVIEWS</b>
                <?php
                //ID select       
                $id = 2;
    
                // SQL query to retrieve data by ID
                $sql = "SELECT * FROM cars_reviews WHERE id = $id";
                $result = $conn->query($sql);
    
                if ($result->num_rows > 0) {
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo '<img src="images/reviews/' . $row['img1'] . '" width="80%"><br>';
                        echo $row["car_model"] . "<br>" .$row["intro"]. '<a href="' . $row['fullreview_url'] . '"><i>  full review</i></a> <br>';
                    }
                } else {
                    echo "null";
                }
                ?>
            </h4>
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
                   echo '<a href="' . $row["ad_url"] . '"><img src="images/ads/'. $row["image"]. '" width="97%"></a>';
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>


        <div class="card1"><br>
            <h4>
            <img src="images/AfriCarsHub logo2.png" width="150px"><br>
                Did You Know that you can just <i>Search</i> a car part and instantly find where you can buy it?<br>
                Search different car services providers |Car Hires|Car
            </h4>
        </div>



    </div>


    <div class="grid-container">
        <div class="card1">
            <h4><b>CAR REVIEWS</b>
            
            <?php
        
            //ID select       
            $id = 1;

            // SQL query to retrieve data by ID
            $sql = "SELECT * FROM cars_reviews WHERE id = $id";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Output data of each row
                while($row = $result->fetch_assoc()) {
                    echo '<img src="images/reviews/' . $row['img1']. '" width="80%"><br>';
                    echo $row["car_model"] . "<br>" .$row["intro"]. '<a href="' . $row['fullreview_url'] . '"><i>  full review</i></a> <br>';
                }
            } else {
                echo "null";
            }
            ?>
    </h4>
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
                   echo '<a href="' . $row["ad_url"] . '"><img src="images/ads/'. $row["image"]. '" width="97%"></a>';
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
       




        <div class="card1">
            <h4><b>NEWS/ARTICLES</b>
            
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
                    echo $row["car_model"] . "<br>" .$row["intro"]. '<a href="' . $row['fullreview_url'] . '"><i>  full review</i></a> <br>';
                }
            } else {
                echo "null";
            }
            ?>
        </h4>
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
                   echo '<a href="' . $row["ad_url"] . '"><img src="images/ads/'. $row["image"]. '" width="97%"></a>';
                }
            } else {
                echo "0 results";
            }
            ?>
        </div>
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