<?php
$target_path="gallery/";
$fileupload="";
$desc="";

	if($_SERVER['REQUEST_METHOD']=="POST")
	{
    $target_path = $target_path . basename( $_FILES['image']['name']);
    $fileupload="gallery/".basename( $_FILES['image']['name']);
	$desc=$_POST["desc"];
    $db=new PDO("mysql:host=localhost;dbname=chaanan","root","");
    $insert=$db->prepare("insert into image(image,description) values (:image,:description)");
    $insert->bindParam(":image",$fileupload);
	$insert->bindParam(":description",$desc);
    $insert->execute();
    if(!move_uploaded_file($_FILES['image']['tmp_name'], $target_path))
    {
        echo "There was an error uploading the file, please try again!";

    }
    else
    {
        echo "file uploaded successfully";
    }
}
?>

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
        <div class="col-lg-6" style="margin:100px;text-align:left; border:1px solid #000; box-shadow:1px 2px 2px; width:600px; height:auto;">
            <h1>DIYA IMAGE</h1>
                <form method="post" action="image.php" enctype="multipart/form-data">
                <input class="form-control" type="file" name="image"><br><br>
				<input class="form-control" type="text" name="desc" placeholder="Enter Item description"><br><br>
                <input type="submit" name="submit" class="form-control btn-lg" style="background-color: #00f; color:#fff;padding:4px;">
                </form>
        </div>
        <div class="col-lg-4"></div>
    </div>
</div>
</body>
</html>