<?php require 'links.php';?> 
<?php require 'access_CODE.php';?>

<body>
  <div class="container" >
    <form class="login-form" action="index.php" method="POST">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" name="aemail" placeholder="Email" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="apassword" placeholder="Password">
          <input type="hidden" class="form-control" name="utype" value="1">
        </div>
        <label class="checkbox">
                <span class="pull-right"> <a href="signup.php"> Don't Have An Account?</a></span>
            </label>
             <label class="checkbox">
                <span class="pull-right"> <a href="../index.php"> <b>Visit Camco Website</b></a></span>
            </label>
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="logina">Login</button>
      </div>
    </form>
    <div class="text-right">
      <div class="credits">
          Designed by <a style="cursor: pointer;">CAMCO</a>
        </div>
    </div>
  </div>

</body>

</html>
