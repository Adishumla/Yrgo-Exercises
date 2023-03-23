<?php
echo "Hello World!";
//$con = mysqli_connect("garali.se.mysql", "garali_sewordpress", "adam123", "garali_sewordpress");
/* $conn = new PDO('mysql:host=192.168.1.4;dbname=DB_TEST;port=3306','username','password'); */
//$conn = new PDO('mysql:host=yrgopelago.se.mysql;dbname=yrgopelago_sejuniper;', 'yrgopelago_sejuniper', 'fruktSTUND');
//$con = mysqli_connect("yrgopelago.se.mysql", "yrgopelago_sejuniper", "fruktSTUND", "yrgopelago_sejuniper");

// PHP Data Objects(PDO) Sample Code:
try {
    $conn = new PDO("sqlsrv:server = tcp:kinokoz.database.windows.net,1433; Database = kino", "CloudSA3141b394", "{your_password_here}");
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    print("Error connecting to SQL Server.");
    die(print_r($e));
}

// SQL Server Extension Sample Code:
$connectionInfo = array("UID" => "CloudSA3141b394", "pwd" => "{your_password_here}", "Database" => "kino", "LoginTimeout" => 30, "Encrypt" => 1, "TrustServerCertificate" => 0);
$serverName = "tcp:kinokoz.database.windows.net,1433";
$conn = sqlsrv_connect($serverName, $connectionInfo);


echo "Connected to MySQL<br />";

//HcX7feyMi0qe6hIt