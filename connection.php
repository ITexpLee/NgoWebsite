<?php

// Creating connection to Database

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "donation";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("There was an error Connecting to Database: " . mysqli_connect_errno($conn));
}

// $sql = "INSERT INTO products (ngo_name, about, ngo_image) VALUES ('KISS Foundation','Kalinga Institute of Social Sciences (Kiss) is a humble beginning in 1993 with 125 children.Which today has become the largest residential institution for tribals', 'ngologo/KISS-Logo.jpg')";
// if (!mysqli_query($conn, $sql)) {
//     echo "There was an error";
//     exit();
// }
// echo "IT was successfull data insertion";

//Creating Table

/*
CREATE TABLE `products` (
    `id` int(11) NOT NULL AUTO_INCREMENT,
    `name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
    `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
    `status` tinyint(1) NOT NULL DEFAULT '1' COMMENT '1=Active | 0=Inactive',
    PRIMARY KEY (`id`)
   ) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
 */
