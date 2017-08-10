<?php

include("../init.php");

$id = $_POST['id'];
$azienda = $_POST['azienda'];
$impianto = $_POST['imp'];
$ambiente = $_POST['amb'];

if( mysqli_query($con,"UPDATE Ambienti SET Azienda='$azienda', Impianto  = '$impianto', Ambiente = '$ambiente' 
WHERE Id = $id;"))
	
echo "Ambiente:  " . $ambiente."  modificato con successo";

	else
		echo "Error";

mysqli_close($con);

?>