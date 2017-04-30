<?php include('./includes/header.php'); ?>
<div class="main-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xs-6 header-container">
        <h1 class="page-header-title ">admin login</h1>
      </div>
      <div class="col-xs-6 translate-container">
        <button class="btn translate-button" type="button">eng / jpn</button>
      </div>
    </div>
    <div class="login-container">
      <form id="loginForm" method="post">
        <div class="form-group">
          <label>username</label>
          <input class="login-input" type="text" name="username" placeholder="usernames"/>
        </div>
        <div class="form-group">
          <label>password</label>
          <input class="login-input" type="text" name="password" placeholder="password" />
        </div>
        <div class="form-group submit-container">
          <button class="btn" type="submit" id="loginSubmit">login</button>
        </div>
      </form>
      <?php
      // Put login code here
      ?>
    </div>
  </div>
</div>
<?php include('./includes/footer.php'); ?>
