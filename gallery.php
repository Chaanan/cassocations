<!DOCTYPE html>
<html lang="en">
<?php
include_once('connect.php');
?>
  <head>
    
  <?php
include_once('navbar.php');
?>
</head>
<body class="animsition">

  		
	<h1 style="color:#000;"> GALLERY </h1>
     
	<div class="container">
           <div class="row">
            <?php	$sql ="select * from `image`";
				  $result = mysqli_query($con,$sql);
				  if($result)
				  {
				    while($row = mysqli_fetch_array($result))
					{
					   echo"
					         <div class='col col-md-3'
							 style='height:310px; width:280px; border:2px solid #000;padding:10px;margin-left:10px; margin-top:50px;box-shadow:5px 5px 5px #000;'>
							 <img src='$row[1]'style='height:250px; width:250px;' class='img-responsive'><br>
						     Discription: $row[2]
							 </div>
				";
					}
				  }
			  ?>
           </div>
       </div>
	   </div>
		</section> 



	
</body>
</html>