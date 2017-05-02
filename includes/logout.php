<form id="logoutForm" method="post">
  <button type="submit" name="logout" class="btn" id="logoutBtn">log out</button>
</form>
<?php
  if (isset($_POST['logout'])) {
    $olduser = $_SESSION['logged_user'];
    unset($_SESSION['logged_user']);
    echo '<script>window.location = "./login";</script>';
  }
?>
