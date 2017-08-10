<?php

include("../init.php");

$id = $_POST['id'];


if( mysqli_query($con,"DELETE FROM Impianti WHERE id = $id;"))
	
echo "Configurazione eliminata con successo";

	else
		echo "Error";

mysqli_close($con);

?>