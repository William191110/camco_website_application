<!-- ================================= Header ================================================= -->
   <?php require 'header.php'; ?>
   <?php require 'links.php'; ?>
  <!-- =====================End Header  ====================================================== -->

 <!-- ================================= FOR UPDATING CUSTOMER INFORMATION ===================== --> 
<?php require 'update_user_information.php'; ?>
<!-- ================================= FOR UPDATING CUSTOMER INFORMATION ===================== -->


  <main id="main">

    <!-- ======= settings Section ======= -->
    <section id="settings" class="contact">
      <br>
      <div class="container">
        <div class="section-title">
          <h2><i class="bx bxs-cog"></i> Settings</h2>
        </div>
        <div class="row" data-aos="fade-in">
          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info" style="cursor: pointer;">
               <div class="address">
                <h4>My Profile</h4>
            </div>
              <br>
              <div class="address">
                <i class="icofont-user"></i>
                <h4>Name:</h4>
                <p><?php echo $username;?></p>
              </div>
              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p><?php echo $user_email;?></p>
              </div>
                <div class="email">
                <i class="icofont-phone"></i>
                <h4>Phone:</h4>
                <p><?php echo $user_phone;?></p>
              </div>
              <div class="phone">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p><?php echo $user_location;?></p>
              </div>
            </div>
          </div>

<!-- ================================= FORM ============================================== -->
<div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch" style=" background: #fff; box-shadow: 0 0 24px 0 rgba(0, 0, 0, 0.12); padding-top: 4%;">

           <form method="POST" action="settings.php">
         
             <div class="address">
            
               <h4 class="text-center">Update Your Personal Info.</h4>
              
            </div>
             
              <hr>
            
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Username">Username</label>
      <input type="text" class="form-control" name="user_name" id="Username" required>
    </div>
    <div class="form-group col-md-6">
      <label for="Email">Email</label>
      <input type="email" name="user_email" class="form-control" value="<?php echo $user_email;?>" id="Email" readonly>
    </div>
  </div>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="Phone">Phone</label>
      <input type="tel" name="user_phone" class="form-control" id="Phone" required>
    </div>
    <div class="form-group col-md-6">
      <label for="Location">Location</label>
      <input type="text" name="user_location" class="form-control" id="Location" required>
    </div>
  </div>
  <button type="submit" name="update" class="btn btn-primary" style="margin-left: 40%;">Update</button>
</form>
</div>
<!-- ================================= FORM ============================================== -->
        </div>
      </div>
    </section><!-- End settings Section -->
  </main><!-- End #main -->
  <!-- ======= Footer ======= -->
  <?php require 'footer.php';?>