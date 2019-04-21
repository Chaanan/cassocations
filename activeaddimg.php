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
    $insert=$db->prepare("insert into image8(image,description) values (:image,:description)");
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
<nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" style="color:#000;" href="index.html">Chaanan Association</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" style="color:#000;" href="index.html">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" style="color:#000;" href="about.html">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" style="color:#000;" href="services.html">Products Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" style="color:#000;" href="work.html">Team</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" style="color:#000;" href="blog.html">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll" style="color:#000;" href="contact.html">Feedback</a>
          </li>
		  <li class="nav-item">
            <a class="nav-link js-scroll" style="color:#000;" href="add_admin.php"> Admin
			</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </head>
<body>

<div class="container">
    <div class="row">
        <div class="col-lg-2"></div>
        <div class="col-lg-6" style="margin:100px;text-align:left; border:1px solid #000; box-shadow:1px 2px 2px; width:600px; height:auto;">
            <h1>ACTIVITIES IMAGE</h1>
                <form method="post" action="activeaddimg.php" enctype="multipart/form-data">
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




