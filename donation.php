<html>
<head>
<?php
include_once("header.php");
?>
</head>
<body>
<?php
include_once("navbar.php");
?>
<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
		 
        <div class="col-lg-5" style="margin:80px;text-align:left; padding:10px;border:1px solid #000; box-shadow:1px 2px 2px; width:600px; height:auto;">
           <h1 style="text-align:center;">Donation</h1>
                <form method="post" action="donationform.php" enctype="multipart/form-data">
                <input class="form-control" type="text" name="name" placeholder="Name"><br>
				<input class="form-control" type="email" name="email" placeholder="Email"><br>
				<input class="form-control" type="number" name="contact" placeholder="Contact Number"><br>
				<input class="form-control" type="text" name="address" placeholder="Address"><br>
				<input class="form-control" type="text" name="city" placeholder="City"><br>
				<input class="form-control" type="text" name="state" placeholder="State"><br>
				<input class="form-control" type="text" name="country" placeholder="Country"><br>
                <input type="submit" id="btn" name="submit" class="form-control btn-lg" style="background-color:#00f; color:#fff;padding:4px;">
                </form>
        </div>
        <div class="col-lg-3"></div>
    </div>
</div>
</body>
</html>