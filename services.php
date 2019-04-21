<!DOCTYPE html>
<html lang="en">
<head>
	<style>
	.bttn{
		margin-left:220px;
		 }
	.imgg
		{
	height:350px;
	width:350px;
		}
	.h{
	margin-top:270px;
	margin-left:60px;
	color:#000;
	  }
	</style>
	<?php
		include_once('header.php');
	?>
</head>

<body id="page-top">
	<?php
		include_once('navbar.php');
	?>
  <!--/ Section Services Star /-->
  <section id="service" class="services-mf route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="title-box text-center">
            <h3 class="title-a" style="margin-top:100px;">
              Our Products
            </h3>
            <p class="subtitle-a">
              Special Children can do wonders
            </p>
            <div class="line-mf"></div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4" >
         <div class="service-box imgg" style="background-image: url(images/dii.jpg)">
		  <a href="diya_image.php"><h4 class="h">Hand decorated Diyas</h4>
          </div>
        </div>
        <div class="col-md-4">
         <div class="service-box imgg"style="background-image: url(images/enn.jpg)">
		  <a href="enve.php"><h4 class="h" style="margin-left:80px;">Handmade Envelops</h4></a>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box imgg" style="background-image: url(images/bag.jpg)">
		  <a href="paper.php"><h4 class="h">Handmade Paper Bags</h4></a>
           
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box imgg" style="background-image: url(images/painting.jpg)">
		  <a href="pain.php"><h4 class="h" style="margin-left:220px;">Paintings</h4>
           
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box imgg" style="background-image: url(images/wall.jpg)">
		  <a href="decoimg.php"><h4 class="h" style="margin-left:150px;"> Wall Hangings</h4></a>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box imgg" style="background-image: url(images/raa.jpg)">
		  <a href="wall.php"><h4 class="h"style="margin-left:130px;"> Rakhi Collection</h4></a>
            
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--/ Section Services End /-->

  <!--/ Section Contact-footer End /-->
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

	<?php
	include_once('footer.php');
	?>
</body>
</html>
