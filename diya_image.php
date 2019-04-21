<!DOCTYPE html>
<html lang="en">
<head>
	<?php
		include_once("connect.php");
	?>

	<?php
		include_once("header.php");
	?>
 
</head>
<body id="page-top">

  		
	 <?php
		include_once("navbar.php");
	?>
     
	<div class="container" style="margin-top:150px;">
	<h1 style="color:#f00; text-align:center; "> DIYA GALLERY </h1>
           <div class="row">
            <?php	$sql ="select * from `image`";
				  $result = mysqli_query($con,$sql);
				  if($result)
				  {
				    while($row = mysqli_fetch_array($result))
					{
					   echo" 
					         <div class='col col-md-3'style=' margin-top:80px; margin:20px; margin-left:70px;'>
							 <img src='$row[1]'style=' box-shadow:2px 3px 4px 4px #000; height:300px;
								  width:300px;' class='img-responsive'><br>
							 </div>
							 
				";
					}
				  }
			  ?>
           </div>
       </div>
	    <?php
		include_once("footer.php");
	?>
</body>
</html>