<?php 

$Name = $_POST['first_name'];
$FamilyName = $_POST['family_name'];
$Phone = $_POST['phone'];
$Mail = $_POST['email'];
$password = $_POST['Password1'];
$password2 = $_POST['Password2'];



//Variables to connect to the database
$username="root";
$password="";
$database="apifit";

//Connection to the database
mysql_connect("localhost",$username,$password);

//select the database or print error
@mysql_select_db($database) or die( "Unable to select database");

//Query to add the new user
$query = "INSERT INTO USERS(UFAMNAME, UFIRNAME, UPHONE, UEMAIL, UPASSWORD) VALUES('$FamilyName', '$Name', '$Phone', '$Mail', '$password2')";

//Execute Query
mysql_query($query);

header('Location: index.php');

//header('Location: http://www.apifit.fr/ApifitWeb/index.php');
?>
