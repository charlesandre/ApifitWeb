<?php 
session_start();

$Mail = $_POST['email'];
$Password1 = $_POST['Password1'];

//Variables to connect to the database
$username="root";
$password="";
$database="apifit";

//Connection to the database
mysql_connect("localhost",$username,$password);

//select the database or print error
@mysql_select_db($database) or die( "Unable to select database");

//Query to add the new user
$query = "SELECT * FROM USERS WHERE UEMAIL = '$Mail' AND UPASSWORD = '$Password1'";

//Execute Query
$result = mysql_query($query);

if(!$result){
	die('error');
}
else {
	$num_rows = mysql_num_rows($result);
	if($num_rows == 1){
		$row = mysql_fetch_assoc($result);
		$UID = $row['UID'];
		$_SESSION['id'] = $UID;
		$_SESSION['FamilyName'] = $row['UFAMNAME'];
		$_SESSION['FirstName'] = $row['UFIRNAME'];
		//header('Location: accueil.php');
		header('Location: http://www.apifit.fr/ApifitWeb/accueil.php');
		
	}
	else{
		die('Error');
	}


}


?>
