<?php 
session_start();
include "init.php";
$username= $_POST["username"];
$_SESSION['name'] = $username;
$Password = $_POST["pass"];

$adm = "select * from Dati_iot where Username='$username' and Password='$Password' and Admin!=0;";
$sens= "select * from Dati_iot where Username='$username' and Password='$Password' and Sensorista !=0;";
$amb= "select * from Dati_iot where Username='$username' and Password='$Password' and Ambientista !=0;";
$adc = "select * from Dati_clienti where Username='$username' and Password='$Password'";
$cli = "select * from Dati_clienti where Username='$username' and Password='$Password'";

if(mysqli_num_rows(mysqli_query($con,$adm)) > 0)
{
header("Location: adiot/panel.php");
 
}
elseif (mysqli_num_rows(mysqli_query($con,$sens))> 0) {

 header("Location: adiot/panel.php");
}
elseif (mysqli_num_rows(mysqli_query($con,$amb)) > 0) {

 header("Location: adiot/panel.php");
}
elseif (mysqli_num_rows(mysqli_query($con,$adc)) > 0) {

 header("Location: adiot/panel.php");
}
elseif (mysqli_num_rows(mysqli_query($con,$cli))>0) {

 header("Location: adiot/panel.php");
}
else{

echo '<script type="text/javascript">'; 
echo 'alert("Username o Password errata.");'; 
echo 'window.location.href = "index.php";';
echo '</script>';
}


?>