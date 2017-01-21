<?php
  include_once 'mysqlDB.php';
  $data=json_decode(file_get_contents("php://input"));

  $name = $data->firstname;
  $lastname = $data->lastname;
  $password = $data->password;
  $email = $data->email;

  if(isset($_POST['phone'])) $phone = $data->phone;

  $conn= new mysqlDB;
  $conn->connect();
    // $conn->query("INSERT INTO `USERS`(`UNAME`,`ULASTNAME`, `UPASSWORD`, `UEMAIL`,`UPHONE`) VALUES ('$firstname', '$lastname', $password', '$email', '$phone')");
    // $conn->disConnect();



?>
