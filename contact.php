<!DOCTYPE html>
<html lang="en">
<head>
	<?php include_once("header.php");?>
</head>

<body id="page-top">
  <?php include_once("navbar.php");?>
<section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/overlay-bg.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      Feedback
                    </h5>
                  </div>
                  <div>
                      <form action="data.php" method="post" role="form" class="contactForm">
                      <div id="sendmessage">Your message has been sent. Thank you!</div>
                      <div id="errormessage"></div>
                      <div class="row">
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="text" name="nm" class="form-control" id="nm" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <input type="email" class="form-control" name="eml" id="eml" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12 mb-3">
                            <div class="form-group">
                              <input type="text" class="form-control" name="cont" id="cont" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 10 chars of subject" />
                              <div class="validation"></div>
                            </div>
                        </div>
                        <div class="col-md-12 mb-3">
                          <div class="form-group">
                            <textarea class="form-control" name="msg" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                            <div class="validation"></div>
                          </div>
                        </div>
                        <div class="col-md-12">
                          <button type="submit" class="button button-a button-big button-rouded">Send</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Location
                    </h5>
                  </div>
                  <div class="more-info">
					<div id="googleMap" style="width:380px; height:350px;">
					<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2783.134955411856!2d75.5962002151455!3d31.310749981439447!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzHCsDE4JzM4LjciTiA3NcKwMzUnNTQuMiJF!5e1!3m2!1sen!2sin!4v1555323910641!5m2!1sen!2sin" width='380' height='340' frameborder='0' style='border:0'></iframe>
					</div>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>EH-14, PLOT NO 4,NEAR LYAALPUR KHALSA COLLEGE, HORGOBINDPURA, JALANDHAR</li>
                      <li><span class="ion-ios-telephone"></span> 9815725050</li>
                      <li><span class="ion-email"> smarthousejal@gmail.com</span></li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href="https://www.facebook.com/ChaananCenter/?epa=SEARCH_BOX"><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href="https://www.instagram.com"><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href="https://www.twitter.com"><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright. All Rights Reserved</p>
              <div class="credits">
                <!--
                  All the links in the footer should remain intact.
                  You can delete the links only if you purchased the pro version.
                  Licensing information: https://bootstrapmade.com/license/
                  Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=DevFolio
                -->
                 <a href=""></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>
  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>

  <?php 
	include_once("footer.php");
  ?>
</body>
</html>
