<?php

$host = "localhost";
$user = "id1332318_server";
$password = "progetto";
$db = "id1332318_server";

$con = mysqli_connect($host,$user,$password,$db);

if(!$con) 
{
	die ("Error with the connection from MySqL" . mysqli_connect_error() );
}

?>