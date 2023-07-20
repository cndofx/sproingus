<?php
// Database configuration
$dbHost     = "db5013775844.hosting-data.io";
$dbUsername = "dbu2308078";
$dbPassword = "Magikarp01!";
$dbName     = "dbs11530607";

// Create database connection
$db = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);

// Check connection
if ($db->connect_error) {
    die("Connection failed: " . $db->connect_error);
}
?>