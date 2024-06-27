<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "masseuse";

try {
    $conn = new PDO('mysql:host='.$servername.';dbname='.$dbname, $username, $password);
} catch(PDOException $e) {
    throw $e;
}
    
