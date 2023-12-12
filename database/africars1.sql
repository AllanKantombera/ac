-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 19, 2023 at 11:08 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `africars1`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `advertiser` varchar(100) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `ad_url` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `description`, `image`, `advertiser`, `start_date`, `end_date`, `ad_url`, `tags`) VALUES
(1, 'ad sample', '', 'ad.png', '', '0000-00-00', '0000-00-00', 'www.ad.com', ''),
(2, 'ad sample', '', 'ad.png', '', '0000-00-00', '0000-00-00', 'www.ad.com', ''),
(3, 'ad sample', '', 'ad.png', '', '0000-00-00', '0000-00-00', 'www.ad.com', '');

-- --------------------------------------------------------

--
-- Table structure for table `autoparts_shops`
--

CREATE TABLE `autoparts_shops` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background_photo` varchar(255) NOT NULL,
  `contacts` varchar(100) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `about_us` text NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `autoparts_shops`
--

INSERT INTO `autoparts_shops` (`id`, `name`, `description`, `logo`, `background_photo`, `contacts`, `website_url`, `location`, `about_us`, `page_url`, `tags`) VALUES
(1, 'ZX autoparts LTD', 'We are ZX autoparts LTD, we specialized in truck autoparts. Good quality at good price.', 'image1.png', '', '<b>Phone:</b> 0999000xxx/0888687xxx<br>\n<b>Email:</b> ZXautopartsLTD@gmail.com', 'www.ZXautoparts.com', 'lilongwe area 3, near ZZ shop.', 'We are ZX autoparts LTD, we specialized in truck autoparts. Good quality at good price.', 'autopartsshopspages.php?id=1', 'ZX autoparts LTD\nlilongwe truck autopart\ntruck spare parts\nlilongwe area 3\nautoparts shops'),
(2, 'SS autoparts LTD', 'We are SS autoparts LTD, we specialized in truck autoparts. Good quality at good price.', 'image1.png\n', '', '<b>Phone:</b> 0999000xxx/0888687xxx<br>\r\n<b>Email:</b> ZXautopartsLTD@gmail.com\r\n', 'www.ZXautoparts.com', 'mzuzu, katoto.', 'We are SS autoparts LTD, we specialized in truck autoparts. Good quality at good price.', 'autopartsshopspages.php?id=2', 'mzuzu katoto\nss autoparts LTD\nmzuzu autoparts shops\nmzuzu spareparts shops\nautoparts shops'),
(3, 'auto 77', 'We are auto 77, we specialized in Japanese cars autoparts. Good quality at good price.', 'image1.png\n', '', '<b>Phone:</b> 0999000xxx/0888687xxx<br>\r\n<b>Email:</b> ZXautopartsLTD@gmail.com\r\n', 'www.ZXautoparts.com', 'mzuzu, katoto. Malawi.', 'We are SS autoparts LTD, we specialized in truck autoparts. Good quality at good price.', 'autopartsshopspages.php?id=3', 'auto 77,\nblantyre limbe,\nautoparts shop blantyre,\njapanese cars spareparts autoparts\nautoparts shops'),
(4, 'AUTOX', 'We are AUTOX, we specialized in truck autoparts. Good quality at good price.', 'image1.png', '', '<b>Phone:</b> 0999000xxx/0888687xxx<br>\r\n<b>Email:</b> ZXautopartsLTD@gmail.com', 'www.AUTOX.com', 'limbe, blantyre. Near zz shop', 'We are AUTOX, we specialized in truck autoparts. Good quality at good price.', 'autopartsshopspages.php?id=1', 'autoparts shop in limbe blantyre\ncar spare parts\nlimbe blantyre\nautoparts\nautoparts shops');

-- --------------------------------------------------------

--
-- Table structure for table `cars_reviews`
--

CREATE TABLE `cars_reviews` (
  `id` int(11) NOT NULL,
  `car_model` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `rating` decimal(10,0) NOT NULL,
  `reviewer_name` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `intro` text NOT NULL,
  `fullreview_url` varchar(200) NOT NULL,
  `description` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL,
  `img1` varchar(200) NOT NULL,
  `img2` varchar(200) NOT NULL,
  `img3` varchar(400) NOT NULL,
  `icon` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cars_reviews`
--

INSERT INTO `cars_reviews` (`id`, `car_model`, `content`, `rating`, `reviewer_name`, `date`, `intro`, `fullreview_url`, `description`, `tags`, `img1`, `img2`, `img3`, `icon`) VALUES
(1, 'MAZDA AXELA', '\r\nThe Mazda Axela, also known as the Mazda3 in other markets, is a compact car that has been praised for its sporty handling, stylish design, and fuel efficiency. It is available as a four-door sedan or a five-door hatchback, and comes with a variety of engine and transmission options.\r\n\r\nExterior\r\n\r\nThe Mazda Axela has a sleek and sporty exterior design. The front end is dominated by a large grille and sharp headlights, while the rear end features a pair of taillights that are connected by a light bar. The car also has a low roofline and pronounced wheel arches, which give it a muscular appearance.\r\n\r\nInterior\r\n\r\nThe interior of the Mazda Axela is well-designed and comfortable. The cabin is made of high-quality materials, and the dashboard is laid out in a logical and easy-to-use manner. The front seats are supportive and offer good visibility, and the rear seats are spacious enough for two adults or three children.\r\n\r\nPerformance\r\n\r\nThe Mazda Axela is available with a variety of engine and transmission options. The base engine is a 2.0-liter four-cylinder that produces 155 horsepower and 150 lb-ft of torque. This engine is available with a six-speed manual transmission or a six-speed automatic transmission.\r\n\r\nThe Axela is also available with a 2.5-liter four-cylinder engine that produces 186 horsepower and 186 lb-ft of torque. This engine is available with a six-speed manual transmission or a six-speed automatic transmission.\r\n\r\nFuel Efficiency\r\n\r\nThe Mazda Axela is known for its fuel efficiency. The base engine gets up to 28 mpg in the city and 37 mpg on the highway. The 2.5-liter engine gets up to 25 mpg in the city and 36 mpg on the highway.\r\n\r\nSafety\r\n\r\nThe Mazda Axela is a safe car. It has received a five-star overall safety rating from the National Highway Traffic Safety Administration (NHTSA). The car also comes standard with a variety of safety features, including anti-lock brakes, traction control, and electronic stability control.\r\n\r\nOverall\r\n\r\nThe Mazda Axela is a great choice for anyone looking for a stylish, fuel-efficient, and fun-to-drive compact car. It offers a comfortable interior, excellent performance, and a variety of safety features.\r\n\r\nPros\r\n\r\nSporty handling\r\nStylish design\r\nFuel-efficient\r\nWell-designed interior\r\nVariety of safety features\r\nCons\r\n\r\nRear seat legroom could be better\r\nSome interior materials could be higher quality\r\nCargo space is limited in the hatchback\r\nRecommendation\r\n\r\nIf you are looking for a compact car that is fun to drive, fuel-efficient, and safe, the Mazda Axela is a great option to consider. It offers a comfortable interior, excellent performance, and a variety of safety features.', '0', 'allan kantombera', '2024-01-06', 'The Mazda Axela, also known as the Mazda3 in other markets, is a compact car that has been praised for its sporty handling, stylish design, and fuel efficiency.', 'http://localhost/africarshub/carreviews.php?id=1', '', 'mazda axela\nmazda\naxela \nmazda3', 'madzaaxela (1).jpg', 'madzaaxela (1).png', 'madzaaxela (2).jpg', 'reviews/madzaaxela (1).jpg'),
(2, 'TOYOTA COROLLA ALTIS', 'The Toyota Corolla Altis is a compact car that has been popular for decades due to its reliability, fuel efficiency, and affordability. It is available as a four-door sedan or a five-door hatchback, and comes with a variety of engine and transmission options.\r\n\r\nExterior\r\n\r\nThe Toyota Corolla Altis has a sleek and modern exterior design. The front end is dominated by a large grille and sharp headlights, while the rear end features a pair of taillights that are connected by a light bar. The car also has a low roofline and pronounced wheel arches, which give it a sporty appearance.\r\n\r\nInterior\r\n\r\nThe interior of the Toyota Corolla Altis is well-designed and comfortable. The cabin is made of high-quality materials, and the dashboard is laid out in a logical and easy-to-use manner. The front seats are supportive and offer good visibility, and the rear seats are spacious enough for two adults or three children.\r\n\r\nPerformance\r\n\r\nThe Toyota Corolla Altis is available with a variety of engine and transmission options. The base engine is a 1.6-liter four-cylinder that produces 121 horsepower and 107 lb-ft of torque. This engine is available with a six-speed manual transmission or a continuously variable transmission (CVT).\r\n\r\nThe Corolla Altis is also available with a 1.8-liter four-cylinder engine that produces 138 horsepower and 128 lb-ft of torque. This engine is available with a six-speed manual transmission or a CVT.\r\n\r\nFuel Efficiency\r\n\r\nThe Toyota Corolla Altis is known for its fuel efficiency. The base engine gets up to 30 mpg in the city and 37 mpg on the highway. The 1.8-liter engine gets up to 29 mpg in the city and 39 mpg on the highway.\r\n\r\nSafety\r\n\r\nThe Toyota Corolla Altis is a safe car. It has received a five-star overall safety rating from the National Highway Traffic Safety Administration (NHTSA). The car also comes standard with a variety of safety features, including anti-lock brakes, traction control, and electronic stability control.\r\n\r\nOverall\r\n\r\nThe Toyota Corolla Altis is a great choice for anyone looking for a reliable, fuel-efficient, and affordable compact car. It offers a comfortable interior, excellent performance, and a variety of safety features.\r\n\r\nReview for African market\r\n\r\nThe Toyota Corolla Altis is a great car for the African market. It\'s fuel-efficient, has a comfortable interior, and is reliable. It\'s also relatively affordable, making it a good value for money.\r\n\r\nHere are some of the pros and cons of the Toyota Corolla Altis for the African market:\r\n\r\nPros:\r\n\r\nFuel-efficient\r\nComfortable interior\r\nReliable\r\nRelatively affordable\r\nGood value for money\r\nCons:\r\n\r\nRear seat legroom could be better\r\nSome interior materials could be higher quality\r\nCargo space is limited in the hatchback\r\nOverall, the Toyota Corolla Altis is a great car for the African market. It\'s fuel-efficient, has a comfortable interior, and is reliable. It\'s also relatively affordable, making it a good value for money.\r\n\r\nHere are some additional things to consider when buying a Toyota Corolla Altis for the African market:\r\n\r\nRoad conditions: The Toyota Corolla Altis is a low-slung car, so it may not be ideal for driving on rough roads. If you plan on driving on unpaved roads or roads with potholes, you may want to consider a different car.\r\nClimate: The Toyota Corolla Altis is a Japanese car, so it\'s not specifically designed for hot climates. If you live in a hot climate, you may want to consider a car with a more powerful air conditioning system.\r\nAvailability of parts and service: Toyota is a popular brand in Africa, so parts and service should be relatively easy to find. However, it\'s always a good idea to check with your local Toyota dealer before buying a car to make sure that they have the parts and service you need.\r\nOverall, the Toyota Corolla Altis is a great car for the African market. It\'s fuel-efficient, has a comfortable interior, and is reliable. It\'s also relatively affordable, making it a good value for money. Just be sure to consider the road conditions, climate, and availability of parts and service before buying a car.', '0', 'allan kantombera', '2023-10-05', '\nThe Toyota Corolla Altis is a compact car that has been popular for decades due to its reliability, fuel efficiency, and affordability.', 'http://localhost/africarshub/carreviews.php?id=2', '', 'toyota corolla altis review\r\ncorolla altis\r\ntoyota corolla\r\naltis review', 'Toyotaaltis (1).png', 'Toyotaaltis (2).png', 'Toyotaaltis (3).png', '');

-- --------------------------------------------------------

--
-- Table structure for table `car_dealers`
--

CREATE TABLE `car_dealers` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background_photo` varchar(255) NOT NULL,
  `contacts` varchar(100) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `about_us` text NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `car_dealers`
--

INSERT INTO `car_dealers` (`id`, `name`, `description`, `logo`, `background_photo`, `contacts`, `website_url`, `location`, `about_us`, `page_url`, `tags`) VALUES
(1, 'MZ DEALERS', 'car hire. we hire different cars, suvs, saloons, sedans, 4x4.', 'image1.png', '', '<b>Phone:</b> 0999000xxx/0888687xxx<br>\n<b>Email:</b> ZXautopartsLTD@gmail.com', 'www.comp22.com', 'lilongwe area2 \r\nnear..', 'wgsigwisb wdihiebd ede deibdi edieu', 'cardealerspage.php?id=1', 'avis'),
(2, 'LM MOTORZ', 'eihrf ero roero eihrf ero roero eihrf ero roero eihrf ero roero ', 'image1.png', '', '<b>Phone:</b> 0999000xxx/0888687xxx<br>\n<b>Email:</b> ZXautopartsLTD@gmail.com', 'www.google.com//dede', 'lilongwe', '', 'cardealerspage.php?id=2', 'mec2');

-- --------------------------------------------------------

--
-- Table structure for table `car_hire`
--

CREATE TABLE `car_hire` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background_photo` varchar(255) NOT NULL,
  `contacts` varchar(100) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `about_us` text NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `garages_and_mechanics`
--

CREATE TABLE `garages_and_mechanics` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background_photo` varchar(255) NOT NULL,
  `contacts` varchar(100) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `about_us` text NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `newsarticles`
--

CREATE TABLE `newsarticles` (
  `id` int(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `intro` text NOT NULL,
  `content` text NOT NULL,
  `date` date NOT NULL,
  `fullcontent_url` varchar(100) NOT NULL,
  `img1` varchar(100) NOT NULL,
  `img2` varchar(100) NOT NULL,
  `img3` varchar(100) NOT NULL,
  `tags` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `newsarticles`
--

INSERT INTO `newsarticles` (`id`, `title`, `intro`, `content`, `date`, `fullcontent_url`, `img1`, `img2`, `img3`, `tags`) VALUES
(1, 'MAZDA AXELA', 'The Mazda Axela, also known as the Mazda3 in other markets, is a compact car that has been praised for its sporty handling, stylish design, and fuel efficiency. It is available as a four-door sedan or a five-door hatchback', 'The Mazda Axela, also known as the Mazda3 in other markets, is a compact car that has been praised for its sporty handling, stylish design, and fuel efficiency. It is available as a four-door sedan or a five-door hatchback, and comes with a variety of engine and transmission options. Exterior The Mazda Axela has a sleek and sporty exterior design. The front end is dominated by a large grille and sharp headlights, while the rear end features a pair of taillights that are connected by a light bar. The car also has a low roofline and pronounced wheel arches, which give it a muscular appearance. Interior The interior of the Mazda Axela is well-designed and comfortable. The cabin is made of high-quality materials, and the dashboard is laid out in a logical and easy-to-use manner. The front seats are supportive and offer good visibility, and the rear seats are spacious enough for two adults or three children. Performance The Mazda Axela is available with a variety of engine and transmission options. The base engine is a 2.0-liter four-cylinder that produces 155 horsepower and 150 lb-ft of torque. This engine is available with a six-speed manual transmission or a six-speed automatic transmission. The Axela is also available with a 2.5-liter four-cylinder engine that produces 186 horsepower and 186 lb-ft of torque. This engine is available with a six-speed manual transmission or a six-speed automatic transmission. Fuel Efficiency The Mazda Axela is known for its fuel efficiency. The base engine gets up to 28 mpg in the city and 37 mpg on the highway. The 2.5-liter engine gets up to 25 mpg in the city and 36 mpg on the highway. Safety The Mazda Axela is a safe car. It has received a five-star overall safety rating from the National Highway Traffic Safety Administration (NHTSA). The car also comes standard with a variety of safety features, including anti-lock brakes, traction control, and electronic stability control. Overall The Mazda Axela is a great choice for anyone looking for a stylish, fuel-efficient, and fun-to-drive compact car. It offers a comfortable interior, excellent performance, and a variety of safety features. Pros Sporty handling Stylish design Fuel-efficient Well-designed interior Variety of safety features Cons Rear seat legroom could be better Some interior materials could be higher quality Cargo space is limited in the hatchback Recommendation If you are looking for a compact car that is fun to drive, fuel-efficient, and safe, the Mazda Axela is a great option to consider. It offers a comfortable interior, excellent performance, and a variety of safety features.\r\n\r\n', '0000-00-00', '', 'madzaaxela (1).jpg', 'madzaaxela (2).jpg', 'madzaaxela (1).png', 'mazda axela\r\naxela newsarticle');

-- --------------------------------------------------------

--
-- Table structure for table `otherservices`
--

CREATE TABLE `otherservices` (
  `id` int(10) NOT NULL,
  `name` varchar(100) NOT NULL,
  `description` text NOT NULL,
  `logo` varchar(255) NOT NULL,
  `background_photo` varchar(255) NOT NULL,
  `contacts` varchar(100) NOT NULL,
  `website_url` varchar(255) NOT NULL,
  `location` varchar(100) NOT NULL,
  `about_us` text NOT NULL,
  `page_url` varchar(200) NOT NULL,
  `tags` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `autoparts_shops`
--
ALTER TABLE `autoparts_shops`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cars_reviews`
--
ALTER TABLE `cars_reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_dealers`
--
ALTER TABLE `car_dealers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `car_hire`
--
ALTER TABLE `car_hire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `garages_and_mechanics`
--
ALTER TABLE `garages_and_mechanics`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsarticles`
--
ALTER TABLE `newsarticles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `otherservices`
--
ALTER TABLE `otherservices`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `autoparts_shops`
--
ALTER TABLE `autoparts_shops`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `cars_reviews`
--
ALTER TABLE `cars_reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `car_dealers`
--
ALTER TABLE `car_dealers`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `car_hire`
--
ALTER TABLE `car_hire`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `garages_and_mechanics`
--
ALTER TABLE `garages_and_mechanics`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `newsarticles`
--
ALTER TABLE `newsarticles`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `otherservices`
--
ALTER TABLE `otherservices`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
