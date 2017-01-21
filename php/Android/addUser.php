<?php

include_once 'mysqlDB.php';
$conn= new mysqlDB;
$conn->connect();


$conn->query("INSERT INTO users (UFIRNAME,UEMAIL,UPASSWORD) VALUES ('a','b','c')");
echo "test";
$conn->disConnect();

?>
