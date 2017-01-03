<?php
session_start();
if(isset($_SESSION['id'])){
$FirstName = $_SESSION['FirstName'];
$FamilyName = $_SESSION['FamilyName'];
?>
<h1> Hello <?php echo $FirstName; echo " "; echo $FamilyName; ?>, ready to workout ? </h1>
































<?php
}
else {
	//header('Location : index.php');
	header('Location: http://www.apifit.fr/ApifitWeb/index.php');
}
?>