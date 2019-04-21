<?php
     error_reporting(E_ALL ^ E_WARNING);
	 if(!isset($_SESSION))
	 {
	   session_start();
	 }
	 include_once("connect.php");
	 $usn = isset($_POST["usn"])?$_POST["usn"]:"";
	 $pwd = isset($_POST["pwd"])?$_POST["pwd"]:"";
	 $usn = trim($usn);
	 $pwd = trim($pwd);
	 $pwd = sha1(md5($pwd));
	 $sql = "SELECT * FROM `login` WHERE `username`='$usn' && `password`='$pwd'";
	 $result = mysqli_query($con,$sql);
	 $count = mysqli_num_rows($result);
	 if($count>0)
	 {
	     $_SESSION["user"] = $usn;	 
		 echo"<script>alert('You are successfully login');</script>";
         echo"<meta http-equiv ='refresh' content='0;URL=add_admin.php'>";
	 }
	 else
	 {
		 echo $pwd;
		 //echo"<script>alert('Sorry incorrect username/password');</script>";
		 //echo"<meta http-equiv ='refresh' content='0;URL=index.php'>";
	 }
	 
	
	 
?>