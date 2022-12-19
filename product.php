<?php 
require 'actions/processes.php';  
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Camco</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <!-- Favicons -->
  <link href="products/logo.png" rel="icon">
  <link href="products/logo.png" rel="apple-touch-icon">
  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">
  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/nivo-slider/css/nivo-slider.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.carousel.css" rel="stylesheet">
  <link href="lib/owlcarousel/owl.transitions.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/venobox/venobox.css" rel="stylesheet">
  <!-- Nivo Slider Theme -->
  <link href="css/nivo-slider-theme.css" rel="stylesheet">
  <!-- Main Stylesheet File --->
  <link href="css/style.css" rel="stylesheet">
  <!-- Responsive Stylesheet File -->
  <link href="css/responsive.css" rel="stylesheet">

 
</head>

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
                    <a class="page-scroll" href="index.php">Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="product.php">Products</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php#blog">Upcoming Events</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="index.php#aboutus">About Us</a>
                  </li>

                  
                  <li>
                    <a class="page-scroll" href="index.php#contact">Contact Us</a>
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

     <!-- HOT PRODUCTS -->
  <div id="about" class="blog-area">
    <div class="blog-inner area-padding">
      <div class="blog-overly"></div>
      <div class="container ">
        <div class="row">
        	<!---LOOP THROUGH DATABASE--->
                   <?php  
       while ($row=mysqli_fetch_assoc($getproducts)):?>
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
          <?php endwhile
?> <!---END LOOP THROUGH DATABASE--->
        </div>
      </div>
    </div>
    <div class="row">
          
        </div>

        <br>
  </div>
  <!-- End HOT PRODUCTS -->


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
