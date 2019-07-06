
<?php include(ROOT_PATH . '/admin/users/userLogic.php'); ?>
<?php
  $sql = "SELECT id, username, email, profile_picture FROM users WHERE id=?";
  $user = getSingleRecord($sql, 'i', [$_SESSION['user']['id']]);
  $roles = getMultipleRecords("SELECT * FROM roles");
  $user_id = $user['id'];
  $username = $user['username'];
  $email = $user['email'];
  
  $profile_picture = $user['profile_picture'];

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>UserAccounts - Edit Profile</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <!-- Custom styles -->
    <link rel="stylesheet" href="../../assets/css/style.css">
  </head>
  <body>
   

    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <?php include("time.php") ?>

        <form action="editProfile.php" method="post" enctype="multipart/form-data">
          <input type="hidden" name="user_id" value="<?php echo $user_id ?>">
          <div class="col-md-8 col-md-offset-2">
            <h2 class="text-center"> Your Profile </h2>
            <hr>
              <div class="col-md-6" style="text-align: center;">
                  <?php if (isset($profile_picture)): ?>
                    <img src="<?php echo BASE_URL . '/assets/images/' . $profile_picture; ?>" id="profile_img" style="height: 150px; border-radius: 50%" alt="">
                  <?php else: ?>
                    <img src="http://via.placeholder.com/150x150" id="profile_img" style="height: 150px; border-radius: 50%" alt="">
                  <?php endif; ?>
                  <h3></h3>
                  <!-- hidden file input to trigger with JQuery  -->
                  <input type="file" name="profile_picture" id="profile_input" value="" style="display:none ;">
                  </div></div></form></div></div></div>
              </div>
