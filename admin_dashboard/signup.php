<?php require 'links.php';?>
<?php require 'access_CODE.php';?>

<body class="login-img3-body">

  <div class="container">
    <form class="login-form" action="signup.php" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="aname" placeholder="Name" autofocus required>
        </div>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_email"></i></span>
          <input type="email" class="form-control" name="aemail" placeholder="Email" required>
        </div>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_phone"></i></span>
          <input type="text" class="form-control" name="aphone" placeholder="Phone Number" autofocus required>
        </div>

        <div class="input-group">
          <span class="input-group-addon"><i class="icon_location"></i></span>
          <input type="text" class="form-control" name="alocation" placeholder="Location" autofocus required>

          <input type="hidden" class="form-control" name="user_type" value="1" autofocus>
        </div>


        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="apass" placeholder="password" autofocus required>
        </div>
        <label class="checkbox">
                <span class="pull-right"> <a href="index.php"> Already Have Account?</a></span>
            </label>
        <button class="btn btn-info btn-lg btn-block" type="submit" name="signup">Sign Up</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          Designed by <a href="#">CAMCO</a>
        </div>
    </div>
  </div>


</body>

</html>
