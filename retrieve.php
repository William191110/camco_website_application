<?php 
require 'actions/processes.php'; 
?>
<?php require 'header.php' ?> 
<body data-spy="scroll" data-target="#navbar-example">
  <div id="preloader"></div>
  <div id="about" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h2>Recover Your Password</h2>
            </div>
          </div>
        </div>
        <div class="row">
        <div class="container" style="background-color:  #3EC1D5; padding-top: 20px; border-radius: 8px;">
        <form action="retrieve.php" method="POST">
  <div class="form-row">
    <div class="form-group col-md-6" style="color: #fff;">
      <label for="inputEmail4">Username</label>
      <input type="text" name="user_name" class="form-control" id="inputEmail4" placeholder="Username" required>
    </div>
    <div class="form-group col-md-6" style="color: #fff;">
      <label for="inputEmail4">Email</label>
      <input type="email" name="user_email" class="form-control" id="inputEmail4" placeholder="Email" required>
    </div>
    
  </div>
  <div class="form-row">
    <div class="form-group col-md-6" style="color: #fff;">
      <label for="inputPassword4">New Password</label>
      <input type="password" name="user_password" class="form-control" id="inputPassword4" placeholder="Enter New Password" required>
    </div>
    
    <div class="form-group col-md-6" style="color: #fff;">
      <label for="inputPassword4">Re-enter Password</label>
      <input type="password" name="user_password" class="form-control" id="inputPassword4" placeholder="Enter New Password" required>
    </div>
    
  </div>

  <button type="submit" name="retrieve" class="btn btn-success" style="margin-left: 47%; margin-bottom: 10px;">Confirm</button>
</form>
</div>
        </div>
      </div>
    </div>
  </div>

  <!-- Start Footer bottom Area -->
  <footer style="margin-top: 20px;">
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
                  <a style="cursor: pointer;"><img src="products/Solar-Panel-2.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="products/Topper-Mower-3.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="products/Shovel-loader-2.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="products/Small-Wheel-Loader.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="products/Milk-Storage-Tank-2.jpg" alt=""></a>
                  <a style="cursor: pointer;"><img src="products/Manual-Fork-Lift.jpg" alt=""></a>
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
                &copy;  <strong>Camco</strong> 2020
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
