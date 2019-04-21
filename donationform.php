            <?php
				include_once("connect.php");
				$name = isset($_POST["name"])?$_POST["name"]:"";
				$email = isset($_POST["email"])?$_POST["email"]:"";
				$contact = isset($_POST["contact"])?$_POST["contact"]:"";
				$address = isset($_POST["address"])?$_POST["address"]:"";
				$city = isset($_POST["city"])?$_POST["city"]:"";
				$state = isset($_POST["state"])?$_POST["state"]:"";
				$country = isset($_POST["country"])?$_POST["country"]:"";
				$sql="INSERT INTO `donation`(`name`, `email`, `contact`, `address`, `city`, `state`, `country`) 
				VALUES ('$name','$email','$contact','$address','$city','$state','$country')";
				$result = mysqli_query($con,$sql);
				if($result)
				{
					echo"<script>alert('Thank You!  We Will Get Back To You Soon');</script>";
					echo"<meta http-equiv ='refresh' content='0;URL=index.php'>";
				}
					else
				{
					echo"Sorry failed to insert Record!";
				}	
			  ?>
           