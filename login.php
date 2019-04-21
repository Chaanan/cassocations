<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	      .frm{
			  border:2px solid #000;			  
			  padding:10px;
			  background-color:#0066ff;
			  width:300px;
			  color:#fff;
			  top:50%;
			  left:50%;
			  position:absolute;
			  margin-left:-150px;
			  margin-top:-150px;
		  }
		  .header{
			      text-align:center;
				  }
		   .txt{
			     height:22px;
				 line-height:22px;
				 font-size:16px;
				 padding-left:5px;
		   }		  
	  </style>

	<?php
		include_once('header.php');
	?>
</head>

<body >

	<?php
		include_once('navbar.php');
	?>   
				<div class="container">
				<div>
					<form action="data1.php" method="post">
						<div class="frm">
						<div class="header">
						<h1>LOGIN</h1>
						</div>
		 
						<div>
							<?php echo isset($_SESSION["user"])?"<br>Hi "." ".$_SESSION["user"]:'';?>
						</div>
			
						<div>
					<label>USER NAME</label><br>
					<input class="form-control" style="color:#000;"class="txt" type="text" name="usn" id="usn" required autofocus/><br>
					<label>PASSWORD</label><br>
					<input class="form-control" style="color:#000;" class="txt" type="password" name="pwd" id="pwd" required /><br>
					<input type="submit" name="submit"/>
					</div>
						</div>
						</form>
						</div>
						</div>

	

	

</body>
</html>

