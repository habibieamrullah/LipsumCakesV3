<?php

//Basic Settings
$sitetitle = "Lorem Ipsum Cakes V3";
$sitemotto = "Delicious Online Cake Shop Template";
$siteurl = "http://localhost/ThirteeNov/LoremIpsumCakes3/"; //your current site domain
$mobilenumber = "6287880334339"; //your phone number that can be contacted via WhatsApp

//Admin username and password
$username = "cakes"; 
$password = "cakes123";

// Database Connection Settings
$tablename = "loremipsumcakes";

$host = "localhost";
$dbuser = "root";
$dbpassword = "";
$databasename = "mydatabase";
$connection = mysqli_connect($host, $dbuser, $dbpassword, $databasename);
$connection->set_charset("utf8");

// Creating database table for registration
mysqli_query($connection, "CREATE TABLE IF NOT EXISTS $tablename (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ordernumber VARCHAR(300) NOT NULL,
name VARCHAR(500) NOT NULL,
phone VARCHAR(300) NOT NULL,
cakes VARCHAR(500) NOT NULL,
address VARCHAR(500) NOT NULL,
deliverydate VARCHAR(100) NOT NULL,
deliverytime VARCHAR(100) NOT NULL
)");

?>