<?php 
require 'account/loginAndsignup.php';
require 'actions/processes.php';  
require 'header.php';
?>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
										<span class="sr-only">Toggle navigation</span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
										<span class="icon-bar"></span>
									</button>
                <!-- Brand -->
                <a class="d-block" href="index.html" rel="home"><img class="" src="img/logo.png" alt="logo" 
                            style="height: 55px;"></a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#about">Products</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#blog">Upcoming Events</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#aboutus">About Us</a>
                  </li>

                  
                  <li>
                    <a class="page-scroll" href="#contact">Contact Us</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->
<!---------------------------------------------------------------------------------------------------------------->
<!-----------------------DESKTOP VIEW------------------------------------------------------------------------------>
<!---SIGN UP-->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="signup" role="dialog" style="margin-top: 10%; ">
    <div class="modal-dialog modal-sm-md">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center text-dark font-weight-bold">Sign Up</h4>
        </div>
   <div class="modal-body">

    <!--SIGN UP FORM-->
    <form action="index.php" method="POST">
        <div class="form-row">

    <div class="form-group col-md-6">
      <label for="Username">Username</label>
      <input type="text" name="user_name" class="form-control" id="user_name" placeholder="Username" required>
    </div>

    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" name="user_email" class="form-control" id="user_email" placeholder="Email" required>
    </div>

  </div>

   <div class="form-row">

    <div class="form-group col-md-6">
      <label for="Location">Location</label>
      <input type="text" name="user_location" class="form-control" id="user_location" placeholder="Location" required>
    </div>

    <div class="form-group col-md-6">
      <label for="Password">Phone Number</label>
      <input type="tel" name="user_phone" class="form-control" id="user_phone" placeholder="Password" required>
    </div>

  </div>

  <div class="form-row">

   <div class="form-group col-md-6">
      <label for="Password">Password</label>
      <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Password" required>
    </div>

    <div class="form-group col-md-6">
      <label for="Password">Re-enter Password</label>
      <input type="password" name="user_password" class="form-control" id="user_password" placeholder="Password" required>
    </div>

  </div>
  <div class="co" style="padding-left: 3%;">
  <button type="submit" name="signupbtn" class="btn btn-success">
    <i class="fa fa-save"></i> Sign Up</button>
</div>
    </form>
       <!---END SIGN UP FORM-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>
<!---SIGN UP-->

<!--- LOGIN-->
<div class="container">
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog" style="margin-top: 10%;">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title text-center"><span class="text-light font-weight-bold">Login</span></h4>
        </div>
   <div class="modal-body">
    <!--LOGIN FORM-->
    <form action="index.php" method="POST">
          
        <div class="form-row">
            <label for="inputAddress" class="font-weight-bold">
          <i class="fa fa-envelope-o"></i> Email
          </label>
            <input type="email" name="user_email" class="form-control" id="email" placeholder="Email" required> 
        </div>
        <div class="form-row">
            <label for="inputAddress2" class="font-weight-bold">
              <i class="fa fa-key"></i> Password
            </label>
            <input type="password" name="user_password" class="form-control" id="password" placeholder="Password" required>
        </div>
         <div class="co" style=" margin-top: 10px;">
        <button type="submit" name="loginbtn" class="btn btn-success w-50">
          <i class="fa fa-sign-in"></i> Sign In</button>
          <br><br>
          <a href="admin_dashboard/index.php"  style="text-decoration: none; cursor: pointer;"><b>Login As Admin</b></a>
         <br>
        <a href="retrieve.php"  style="text-decoration: none; cursor: pointer;">Forgot password?</a>
      
    </div>
    </form>
    <!---END LOGIN FORM-->
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
     
    </div>
  </div>
</div>
<!---- LOGIN--->
<!---------------------------------------------------------------------------------------------------------------->
<!-----END DESKTOP VIEW----------------------------------------------------------------------------------------->
  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="img/banner5.jpg" alt="" title="#slider-direction-1" />
        <img src="img/banner3.jpg" alt="" title="#slider-direction-2" />
        <img src="img/banner4.jpg" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInDown" data-wow-duration="2s" data-wow-delay=".2s">
                  
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">

                  <a class="ready-btn right-btn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signup">Sign Up</a>
                  <a class="ready-btn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                  
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signup">Sign Up</a>
                  <a class="ready-btn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</a>

                  
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
                <!-- layer 1 -->
                <div class="layer-1-1 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  
                </div>
                <!-- layer 2 -->
                <div class="layer-1-2 wow slideInUp" data-wow-duration="2s" data-wow-delay=".1s">
                 
                </div>
                <!-- layer 3 -->
                <div class="layer-1-3 hidden-xs wow slideInUp" data-wow-duration="2s" data-wow-delay=".2s">
                  <a class="ready-btn right-btn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#signup">Sign Up</a>
                  <a class="ready-btn" type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Login</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
  <div class="contianer newbuttons">
	<a class="new-btn btn" data-toggle="modal" data-target="#signup">Sign Up</a>
	<a class="new-btn2 btn" data-toggle="modal" data-target="#myModal">Login</a>
</div>
     <!-- HOT PRODUCTS -->
  <div id="about" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Hot Products</h2>
            </div>
          </div>
        </div>
        <div class="row">
        	<!---LOOP THROUGH DATABASE--->
        <?php  
       while ($row=mysqli_fetch_assoc($get3products)):?>
          <!-- Start Left Blog -->
        <div class="col-md-4 col-sm-4 col-xs-12">
        <div class="single-blog">
        <div class="single-blog-img">
         <a href="#">
        <img src="img/products/<?php echo $row['product_img_url'];?>" alt="">
        </a>
        </div>
        <div class="blog-text mt-4">
        <h4>
        <a href="#"><?php echo $row['product_name'];?></a>
        </h4>
        <p>
        <?php echo $row['product_description'];?>
        </p>
        </div>
        </div>
        <!-- Start single blog -->
          </div>
          <!-- End Left Blog-->
          <?php endwhile ?>

        </div>
      </div>
    </div>
    <div class="row">
        
            <div class="col-md-12 col-sm-12 col-xs-12 text-center mb-5 layer-1-3 hidden-xs wow slideInUp">
              <a type="button" href="product.php" class="btn btn-primary">View More</a>
            </div>
          
        </div>

        <br>
  </div>
  <!-- End HOT PRODUCTS -->



<div id="blog" class="blog-area" style="background-image: url(img/Small-Wheel-Loader.jpg);">
	<div class="blog-inner area-padding">
		<div class="blog-overly"></div>
		<div class="container ">
	<div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headlinenew text-center">
              <h2 style="color: #fff">Upcoming Events</h2>
            </div>
            
          </div>
        </div>
	<div class="row">
		<div class="container">
	<div class="owl-carousel owl-theme">

  <?php  
  while($row=mysqli_fetch_array($Events)):
        ?> 
	<div class="item" style="box-shadow: 1px 1px #2c2421;">
    <div class="item-cover">
      <img src="img/banner4.jpg" alt="" class="img-responsive">
    </div>
     <div class="blog-text" style="background-color: #fff!important;">
                
                  <h5 class="text-center"><?php echo $row['event_name'];?></h5>
                <p class="text-center">
                  <span style="font-weight:bold">Host: <?php echo $row['event_host'];?></span>
                  <br>
                  <span style="font-weight:bold">Guest: <?php echo $row['event_guest'];?></span>
                  <br>
                  <span style="font-weight:bold"><i class="fa fa-calendar" aria-hidden="true"></i> <?php echo $row['event_start_date'];?> to <?php echo $row['event_end_date'];?> |</span>
                  <span style="font-weight:bold"><i class="fa fa-clock-o" aria-hidden="true"></i> <?php echo $row['event_start_time'];?> to <?php echo $row['event_end_time'];?></span>
                  <span style="font-weight:bold"> |
                    <i class="fa fa-map-marker" aria-hidden="true"></i>
                    <?php echo $row['event_location'];?>
                  </span>
                </p>
              </div>
  </div>
 <?php endwhile
?>
</div>
</div>
</div>
</div>
</div>
</div>
   <!-- Start About area -->
  <div id="aboutus" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>About Us</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="img/banner-1.jpg" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h4 class="sec-head">CAMCO Group</h4>
              </a>
              <p>
                CAMCO EQUIPMENT LTD. (Malawi) (Hereinafter referred to as the company) which was registered in June, 2001 in Malawi, a subsidiary of CAMCO Group, is dedicated to providing Malawians with quality Chinese made agricultural, animal husbandry, fishery，construction, heavy duty equipment etc.
CAMCO Group headquartered in Shanghai, China. It has nine subsidiaries in Zambia, Malawi, Kenya and Cameroon. There are currently more than 680 employees both at home and abroad. After nearly 20 years of efforts of all the staff, the company has achieved substantial growth in various businesses sectors and established a mature distribution channel, marketing model, professional maintenance and after-sales service network. It has formed a set of management system and corporate culture suitable for African conditions and contributed to the development of local economy.
              </p>
              
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- End About area -->




  



  <!-- Start contact Area -->
  <div id="contact" class="contact-area">
    <div class="contact-inner area-padding">
      <div class="contact-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Contact us</h2>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-mobile"></i>
                <p>
                  Call: +265 99 96 55 265<br>
                  <span>Monday-Friday: 9:00 AM - 4:00 PM</span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-envelope-o"></i>
                <p>
                  Email: malawi@camco.cn<br>
                  <span><a href="https://web.facebook.com/CAMCOMalawiLTD">CAMCO Equipment Malawi Limited</a></span>
                </p>
              </div>
            </div>
          </div>
          <!-- Start contact icon column -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="contact-icon text-center">
              <div class="single-icon">
                <i class="fa fa-map-marker"></i>
                <p>
                  Location:  <br>
                  <span>NY 535022, USA</span>
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">

        
          <!-- Start  contact -->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="form contact-form">
              <div id="sendmessage">Your message has been sent. Thank you!</div>
              <div id="errormessage"></div>
              <form action="index.php" method="POST">
                <div class="form-group"> 
                  <input class="form-control" name="user_email" placeholder="Enter Your Email">
                </div>
                <div class="form-group"> 
                  <textarea class="form-control" name="user_message" cols="6" rows="9" placeholder="Message"></textarea>
                </div>
                <div class="form-group">
                  <button type="submit"  name="contactus" class="btn btn-primary" style="width: 20%">Send</button>
                </div>
              </form>
            </div>
          </div>
          <!-- End Left contact -->
        </div>
      </div>
    </div>
  </div>
  <!-- End Contact Area -->

  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area">
      <div class="container">
        <div class="row">
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <div class="footer-logo">
                  <h2>Camco</h2>
                </div>

                <p>CAMCO EQUIPMENT LTD. (Malawi) which was registered in June, 2001 in Malawi, a subsidiary of CAMCO Group, is dedicated to providing Malawians with quality Chinese made agricultural, animal husbandry, fishery，construction, heavy duty equipment etc.</p>
                <div class="footer-icons">
                  <ul>
                    <li>
                      <a href="#"><i class="fa fa-facebook"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-twitter"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-google"></i></a>
                    </li>
                    <li>
                      <a href="#"><i class="fa fa-pinterest"></i></a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>information</h4>
                <div class="footer-contacts">
                  <p>Tel: +265 88 18 94 228</p>
                  <p>OPENING HOURS: MONDAY - FRIDAY : 9:00 AM - 4:00 PM</p>
                  <p>SATURDAY - SUNDAY: CLOSED</p>
                </div>
              </div>
            </div>
          </div>
          <!-- end single footer -->
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="footer-content">
              <div class="footer-head">
                <h4>Other Products</h4>
                <div class="flicker-img">
                  <a style="cursor: pointer;"><img src="img/products/Solar-Panel-2.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="img/products/Topper-Mower-3.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="img/products/Shovel-loader-2.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="img/products/Small-Wheel-Loader.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="img/products/Milk-Storage-Tank-2.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="img/products/Manual-Fork-Lift.jpg" alt=""></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p><marquee>CAMCO EQUIPMENT LTD. (Malawi) which was registered in June, 2001 in Malawi, a subsidiary of CAMCO Group, is dedicated to providing Malawians with quality Chinese made agricultural, animal husbandry, fishery，construction, heavy duty equipment etc.</marquee></p>
              <p>
                &copy;  <strong>Camco</strong>
                <script>
                  var date=new Date();
                  document.write(date.getFullYear());
                </script>
              </p>
            </div>
           
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script type="text/javascript">
  $('.owl-carousel').owlCarousel({
    loop: true,
    margin:10,
    items:2,
    autoplay: true,
    autoplayHoverPause: true,
  })
</script>
  <script src="lib/venobox/venobox.min.js"></script>
  <script src="lib/knob/jquery.knob.js"></script>
  <script src="lib/wow/wow.min.js"></script>
  <script src="lib/parallax/parallax.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/nivo-slider/js/jquery.nivo.slider.js" type="text/javascript"></script>
  <script src="lib/appear/jquery.appear.js"></script>
  <script src="lib/isotope/isotope.pkgd.min.js"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="js/main.js"></script>
</body>

</html>
