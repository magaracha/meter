<?php include('config.php'); ?>
<?php include(INCLUDE_PATH . '/logic/userSignup.php'); ?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>UserAccounts - Login</title>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
  <!-- Custome styles -->
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body background="img/back.jpg">
  <p align="center"><img src="img/flag.jpg"></p>
  <p align="center"><b style="color: black">ZIMBABWE</b></p>
  <center><h1 style="color: green">MINISTRY OF ICTPCS ATTENDANCE APP</h1></center>
  <br>
  <?php include(INCLUDE_PATH . "/layouts/navbar.php") ?>
  <div class="container">
    <div class="row">
      <div class="col-md-4 col-md-offset-4">
        <form class="form" action="login.php" method="post">
          <h2 class="text-center"><b style="color: green">Login</b></h2>
          <hr>
          <!-- display form error messages  -->
          <?php include(INCLUDE_PATH . "/layouts/messages.php") ?>
          <div class="form-group <?php echo isset($errors['username']) ? 'has-error' : '' ?>">
            <label class="control-label"><b style="color: blue">Username or Email</b></label>
            <input type="text" name="username" id="password" value="<?php echo $username; ?>" class="form-control">
            <?php if (isset($errors['username'])): ?>
              <span class="help-block"><?php echo $errors['username'] ?></span>
            <?php endif; ?>
          </div>
          <div class="form-group <?php echo isset($errors['password']) ? 'has-error' : '' ?>">
            <label class="control-label"><b style="color: blue">Password</b></label>
            <input type="password" name="password" id="password" class="form-control">
            <?php if (isset($errors['password'])): ?>
              <span class="help-block"><?php echo $errors['password'] ?></span>
            <?php endif; ?>
          </div>
          <div class="form-group">
            <button type="submit" name="login_btn" class="btn btn-success">Login</button>
          </div>
          <p>Don't have an account? <a href="signup.php">Sign up</a></p>
        </form>
      </div>
    </div>
  </div>
<?php include(INCLUDE_PATH . "/layouts/footer.php") ?>