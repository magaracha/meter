<div class="form-group <?php echo isset($errors['username']) ? 'has-error' : '' ?>">
  <label class="control-label">Username</label>
  <input type="text" name="username" value="<?php echo $username; ?>" class="form-control">
  <?php if (isset($errors['username'])): ?>
    <span class="help-block"><?php echo $errors['username'] ?></span>
  <?php endif; ?>
</div>
<div class="form-group <?php echo isset($errors['email']) ? 'has-error' : '' ?>">
  <label class="control-label">Email Address</label>
  <input type="email" name="email" value="<?php echo $email; ?>" class="form-control">
  <?php if (isset($errors['email'])): ?>
    <span class="help-block"><?php echo $errors['email'] ?></span>
  <?php endif; ?>
</div>
<div class="form-group <?php echo isset($errors['password']) ? 'has-error' : '' ?>">
  <label class="control-label">Password</label>
  <input type="password" name="password" class="form-control">
  <?php if (isset($errors['password'])): ?>
    <span class="help-block"><?php echo $errors['password'] ?></span>
  <?php endif; ?>
</div>
<div class="form-group <?php echo isset($errors['passwordConf']) ? 'has-error' : '' ?>">
  <label class="control-label">Password confirmation</label>
  <input type="password" name="passwordConf" class="form-control">
  <?php if (isset($errors['passwordConf'])): ?>
    <span class="help-block"><?php echo $errors['passwordConf'] ?></span>
  <?php endif; ?>






</div>
