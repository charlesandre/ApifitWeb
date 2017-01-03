<?php 
echo 'loool';

$Mail = $_POST['email'];
$password = $_POST['Password'];


//Variables to connect to the database
$username="root";
$password="";
$database="apifit";

//Connection to the database
mysql_connect("localhost",$username,$password);

//select the database or print error
@mysql_select_db($database) or die( "Unable to select database");

//Query to add the new user
$query = "SELECT * FROM USERS WHERE UEMAIL = '$mail' AND UPASSWORD = '$password'"

//Execute Query
$result = mysql_query($query);

if(!$result){
	die('User doesn\'t exist')
}
else {
	$num_rows = mysql_query($result);
	if($num_rows == 1){
		$row = mysql_fetch_assoc($result);
		$UID = $row['UID'];
		echo $UID;
	}


}

?>
