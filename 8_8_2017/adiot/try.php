<?php 
include("../init.php");					  
if( session_status() != PHP_SESSION_ACTIVE) session_start();
$azienda = $_POST['azienda'];
$_SESSION['Azienda'] = $azienda;
$query =  mysqli_query($con,"SELECT Impianto FROM Ambienti WHERE Azienda = '$azienda' ORDER BY Impianto;");
$arr = array();
while ( $fetch = mysqli_fetch_array( $query )){
	
	$arr[] = $fetch['Impianto'];}
	
echo ( json_encode($arr) );


?>