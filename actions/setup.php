<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_GET['action'])){
  if($_GET["action"] == "setup"){

  //Create database
$sql = "CREATE DATABASE `camcodb`";
if ($conn->query($sql) === TRUE) {
echo "Database created successfully";
} else {
echo "Error creating database: " . $conn->error;
}

//CREATING TABLE
$conn = mysqli_connect("localhost","root","","camcodb");
$sql= " CREATE TABLE `categories` (
  `category_id` int(15) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(70) NOT NULL,
  `category_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (category_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

//CREATING TABLE
$conn = mysqli_connect("localhost","root","","camcodb");
$sql= "  CREATE TABLE `events` (
  `event_id` int(15) NOT NULL AUTO_INCREMENT,
  `event_name` varchar(70) NOT NULL,
  `event_host` varchar(25) NOT NULL,
  `event_guest` varchar(40) NOT NULL,
  `event_location` varchar(60) NOT NULL,
  `event_start_date` varchar(20) NOT NULL,
  `event_end_date` varchar(20) NOT NULL,
  `event_start_time` varchar(15) NOT NULL,
  `event_end_time` varchar(15) NOT NULL,
  PRIMARY KEY (event_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


//CREATING TABLE
$conn = mysqli_connect("localhost","root","","camcodb");
$sql= "CREATE TABLE `orders` (
  `order_id` int(15) NOT NULL AUTO_INCREMENT,
  `order_product_id` int(25) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `order_location` varchar(25) NOT NULL,
  `order_user_id` int(25) NOT NULL,
  `order_amount` float(10,2) NOT NULL COMMENT 'product price * product quantity',
  `order_status` int(5) NOT NULL DEFAULT '0' COMMENT '0:not approved, 1:approved, 2:Approved and paid',
  `order_reference_number` varchar(12) NOT NULL,
  `order_date_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
   PRIMARY KEY (order_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


//CREATING TABLE
$conn = mysqli_connect("localhost","root","","camcodb");
$sql= "CREATE TABLE `products` (
  `product_id` int(15) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(70) NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_img_url` varchar(40) NOT NULL,
  `product_code` varchar(45) NOT NULL,
  `product_category_id` int(12) NOT NULL,
  `product_number` int(15) NOT NULL,
  `product_description` text NOT NULL,
  `product_date_added` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (product_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


//INSERT DATA
$conn = mysqli_connect("localhost","root","","camcodb");
$sql="INSERT INTO `products` (`product_id`, `product_name`, `product_price`, `product_img_url`, `product_code`, `product_category_id`, `product_number`, `product_description`, `product_date_added`) VALUES
(1, 'Front Loader With Log Grapple', 450000.00, '1.jpg', '202cb962ac59075b964b4b70', 1, 5, 'Powerful WEICHAI Engine.', '2020-10-16 23:46:24.991743'),
(2, 'Charger', 100000.00, '2.jpg', '202cb962ac59075b964b07152d0', 3, 26, 'Suitable for charging lead-acid.', '2020-10-17 00:10:47.020952'),
(3, 'CDM series Road Roller', 450000.00, 'CDM-series-Road-Roller-1.jpg', '202cb962ac59075d234b70', 1, 0, 'reliable hydraulic vibration system and Powerful engine.', '2020-10-17 00:14:52.785060'),
(4, 'Walking Tractor', 370000.00, 'Walking-Tractor.jpg', '202cb962ac5907d234b70', 2, 0, 'Used for ploughing and harrowing.', '2020-10-17 00:23:32.710772'),
(5, 'Light and Medium Disc Harrow', 100000.00, 'Light-and-Medium-Disc-Harrow.jpg', '202cb962ac59075b92d234b70', 3, 16, 'Suitable for breaking up the clods of farmland.', '2020-10-17 00:30:38.950697'),
(7, 'Precision Planter', 120000.00, 'Precision-Planter-1.jpg', '202cb962ac59075d234b70', 3, 13, 'It  is suitable for planting maize, soybean and etc.', '2020-10-17 01:15:09.634436'),
(8, 'GFS series Diesel Generator', 290000.00, 'GFS-series-Diesel-Generator-1.jpg', '202cb962ac59075b52d234b70', 2, 18, 'User friendly set-up and button layout.', '2020-10-17 01:17:22.010525'),
(11, 'SL series Gasoline Generator', 230000.00, 'SL-series-Gasoline-Generator-2.jpg', '202cb962ac64b07152d234b70', 8, 11, 'Inductive alternator technology with grade engine.', '2020-10-17 12:26:14.980294'),
(12, 'PB series Gasoline Generator', 210000.00, 'PB-series-Gasoline-Generator1.jpg', '202cb962a07152d234b70', 2, 18, 'More convenient: easier to use and maintain', '2020-10-17 12:29:34.506740'),
(13, 'WEICHAI Diesel Generator', 150900.00, 'WP-series-diesel-generator-55.jpg', '202cb9b964b07152d234b70', 2, 13, 'Silent type diesel generator.', '2020-10-17 12:33:00.378087'),
(14, 'RG series Forklift', 450000.00, 'RG-eries-Forklift.jpg', '202cb962ac07152d234b70', 2, 0, 'Environment friendly, Forklift.', '2020-10-17 12:35:38.247706'),
(15, 'Irrigation Pump Set', 105000.00, 'Irrigation-Pump-Set.jpg', '202cb96b07152d234b70', 3, 21, 'Used mainly for spraying and irrigation.', '2020-10-17 12:38:45.452123'),
(16, 'RG series Submersible Pump', 50000.00, 'RR-Series-Submersible-Pump.jpg', '202cb9b964b07152d234b70', 3, 9, 'Water - lifting machine.', '2020-10-17 12:41:11.575487'),
(17, 'Booster Pump', 70000.00, 'Booster-Pump.jpg', '202cb969075b964b07152d234b70', 3, 20, '-- NO DESCRIPTION --', '2020-10-17 12:44:58.823924'),
(18, 'Maize Deluller', 170000.00, 'Maize-Deluller.jpg', '202cb962ac64b07152d234b70', 3, 16, 'Suitable for small size of food processing.', '2020-10-17 12:49:47.288141'),
(19, 'Hammer Mill', 200000.00, 'Hammer-Mill.jpg', '202cb962ac590b07152d234b70', 3, 10, 'Crushs maize, cassava and sorghum.', '2020-10-17 12:52:08.056059'),
(20, 'Fish Feeder', 45000.00, 'Fish-Feeder.jpg', '202cb962a5b964b07152d234b70', 3, 0, 'Has large area of throwing feed.', '2020-10-17 12:54:43.129603'),
(21, 'CLG series Grader', 950000.00, 'CLG-series-Grader.jpg', '2075b964b07152d234b70', 1, 0, 'Powerful WECHAI Engine CLG-series-Grader.', '2020-10-22 22:36:44.041723'),
(22, 'Hole Digger', 250000.00, 'Hole-Digger.jpg', '202cb962ac590152d234b70', 2, 23, 'Hole Digger and Powerful Equipment.', '2020-10-24 02:02:00.689442'),
(23, 'Wood Working Machine', 300000.00, 'Wood-Working-Machine.jpg', '20275b964b07152d234b70', 2, 22, 'Sharp Machine For Wood', '2020-10-24 18:24:41.881253'),
(24, 'Solar Panel', 340000.00, 'Solar-Panel-2.jpg', '202cb962ac57152d234b70', 4, 0, 'Keeps Energy For 5 Days Without Being Exposed To Sunlight.', '2020-10-24 18:38:23.123295')";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table: " . $conn->error;
}



//CREATING TABLE
$conn = mysqli_connect("localhost","root","","camcodb");
$sql= "CREATE TABLE `promotions` (
  `promotion_id` int(15) NOT NULL AUTO_INCREMENT,
  `promotion_name` varchar(25) NOT NULL,
  `promotion_price` double(10,2) NOT NULL,
  `promotion_description` varchar(225) NOT NULL,
  `promotion_start_date` date NOT NULL,
  `promotion_end_date` date NOT NULL,
  `promotion_dated_created` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
  PRIMARY KEY (promotion_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}

//INSERT DATA
$conn = mysqli_connect("localhost","root","","camcodb");
$sql="INSERT INTO `promotions` (`promotion_id`, `promotion_name`, `promotion_price`, `promotion_description`, `promotion_start_date`, `promotion_end_date`, `promotion_dated_created`) VALUES
(1, 'Mothers Day Promo.', 300.00, 'Let\'s Celebrate Our Mothers with a <em><span class=\"font-weight-bold text-warning\" style=\"font-size: 40px;\">50% OFF</span></em> Order Now!', '2020-08-14', '2020-08-15', '0000-00-00 00:00:00.000000'),
(2, 'Camco Promo.', 899.00, 'Get New Equipments At a Low Price at Camco with a <em><span class=\"font-weight-bold text-warning\" style=\"font-size: 40px;\">45% OFF!</span></em>', '2020-10-15', '2020-12-12', '0000-00-00 00:00:00.000000'),
(3, 'Zakwathu Promo.', 100.00, 'Get Ready For Zakwathu Promo. On 16th Nov. With a <em><span class=\"font-weight-bold text-warning\" style=\"font-size: 40px;\">30% OFF!</span></em>', '2020-10-31', '2020-11-04', '0000-00-00 00:00:00.000000')";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table: " . $conn->error;
}

//CREATING TABLE
$conn = mysqli_connect("localhost","root","","camcodb");
$sql= "CREATE TABLE `promotion_joint` (
  `id` int(15) NOT NULL AUTO_INCREMENT,
  `product_id` int(15) NOT NULL,
  `promotion_id` int(15) NOT NULL,
  PRIMARY KEY (id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
echo "Table users created successfully";
} else {
echo "Error creating table 1: " . $conn->error;
}


//INSERT DATA
$conn = mysqli_connect("localhost","root","","camcodb");
$sql="INSERT INTO `promotion_joint` (`product_id`, `promotion_id`) VALUES
(11, 1),
(12, 2),
(12, 1)";

if ($conn->query($sql) === TRUE) {
echo "insert successfully";
} else {
echo "Error creating table: " . $conn->error;
}


//CREATING TABLE
$conn = mysqli_connect("localhost","root","","camcodb");
$sql= "CREATE TABLE `users` (
  `user_id` int(15) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(70) NOT NULL,
  `user_email` varchar(70) NOT NULL,
  `user_password` varchar(40) NOT NULL,
  `user_type` int(6) NOT NULL DEFAULT '0' COMMENT '0:customer,1:admin',
  `user_location` varchar(50) NOT NULL,
  `user_phone` varchar(12) NOT NULL,
  `user_date` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6),
   PRIMARY KEY (user_id)
) ENGINE=InnoDB DEFAULT CHARSET=latin1";

if ($conn->query($sql) === TRUE) {
header("location:../index.php"); 
} else {
echo "Error creating table 1: " . $conn->error;
}

}
}
?>
<button><a href="setup.php?action=setup" style="text-decoration: none;font-size: 30px; color: black;">Run Setup</a>
</button>