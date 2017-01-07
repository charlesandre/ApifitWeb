<?php
$data=json_decode(file_get_contents("php://input"));
$Name=$data->uname;
$FamilyName=mysql_real_escape_string($data->ulastname);
$Mail=mysql_real_escape_string($data->uemail);
$Password=mysql_real_escape_string($data->password);
$Phone=mysql_real_escape_string($data->phone);



//Variables to connect to the database
$username="root";
$password="";
$database="apifit";

//Connection to the database
mysql_connect("localhost",$username,$password);

//select the database or print error
@mysql_select_db($database) or die( "Unable to select database");

//Query to add the new user
$query = "INSERT INTO USERS(UFAMNAME, UFIRNAME, UPHONE, UEMAIL, UPASSWORD) VALUES('$FamilyName', '$Name', '$Phone', '$Mail', '$Password')";


//Execute Query
@mysql_query($query) or die ("Problem on query");


?>