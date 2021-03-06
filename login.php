<?php include('./includes/header.php'); ?>
<div class="main-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 header-container">
        <h1 class="page-header-title ">admin login</h1>
      </div>
      <div class="col-sm-6 translate-container">
        <button class="btn translate-button" id="loginTranslateBtn" type="button">
          ENG <i class="fa fa-arrows-h" aria-hidden="true"></i> 日本語
         </button>
      </div>
    </div>
    <div class="login-container">
      <?php
      if (isset($_SESSION['logged_user'])) {
        echo '<h3 class="success-message">You are logged in as '.$_SESSION['logged_user'].'</h3>';
        echo '<hr />';
        include('./includes/logout.php');
      } else {
        include('./includes/loginForm.php');
      }
    ?>
    </div>
  </div>
</div>
<?php include('./includes/footer.php'); ?>
