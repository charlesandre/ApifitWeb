<?php
  include_once 'mysqlDB.php';

  $email = $_POST['email'];
  $password = $_POST['password'];

  $conn= new mysqlDB;
  $conn->connect();

  $conn->query("SELECT count(*) FROM users WHERE UEMAIL='$email' AND UPASSWORD='$password'");
  $bdd=$conn->getResults();

  if(isset($bdd) && ($bdd[0][0]==1)){
    echo "success";
  }else{
    echo "failure";
  }
  $conn->disConnect();

?>
