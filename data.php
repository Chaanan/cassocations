<?php
    include_once("connect.php");
	$name = isset($_POST["nm"])?$_POST["nm"]:"";
    $email = isset($_POST["eml"])?$_POST["eml"]:"";
	$cont = isset($_POST["cont"])?$_POST["cont"]:"";
	$msg = isset($_POST["msg"])?$_POST["msg"]:"";
	$sql = "INSERT INTO `info`(`name`, `email`, `contact`, `message`) 
	VALUES ('$name','$email','$cont','$msg')";  
	$result = mysqli_query($con,$sql);
	if($result)
	{
		echo"Record is inserted!";
	}
	else
	{
		echo"Sorry failed to insert Record!";
	}	
?>