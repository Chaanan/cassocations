<?php
    $host = "localhost";
    $db = "chaanan";
	$user = "root";
	$pwd = "";
	$con = mysqli_connect($host,$user,$pwd,$db);
    if(!$con)
	{
		echo"Sorry failed to establish connection";
	}		
?>
