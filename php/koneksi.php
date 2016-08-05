<?php
	$username = "root";
	$password = "";
	$database = "sistempoin";
	$hostname = "localhost";
	mysql_connect($hostname, $username, $password);
	mysql_select_db($database);
	// echo "Koneksi Terbuka";
	// try {
	// 	$dbo = new PDO('mysql:host='.$username.';dbname='.$database, $username, $password);
	// } catch (PDOException $e) {
	// 	print "Error!: " . $e->getMessage() . "<br/>";
	// 	die();
	// }
?>