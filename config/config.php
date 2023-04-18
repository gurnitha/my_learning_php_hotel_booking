<?php  

// Host
define("HOST", "localhost");

// Dbname
define("DBNAME", "my_learning_php_hotel_booking");

// User
define("USER", "root");

// Password
define("PASSWORD", "root");


// Koneksi ke database
$conn = new PDO("mysql:host=".HOST.";dbname=".DBNAME."", USER, PASSWORD);

if($conn == true){
	echo "Koneksi dengan database berhasil ...";
} else {
	echo "error";
}

