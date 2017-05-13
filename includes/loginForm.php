<form id="loginForm" method="post">
  <div class="form-group">
    <label>username</label>
    <input class="login-input" type="text" name="username" placeholder="username" autocomplete="off"/>
  </div>
  <div class="form-group">
    <label>password</label>
    <input class="login-input" type="password" name="password" placeholder="password" />
  </div>
  <div class="form-group submit-container">
    <button class="btn" type="submit" id="loginSubmit">login</button>
  </div>
</form>
<?php
  $post_username = filter_input( INPUT_POST, 'username', FILTER_SANITIZE_STRING );
  $post_password = filter_input( INPUT_POST, 'password', FILTER_SANITIZE_STRING );
  if (isset($post_username)) {
    require_once 'includes/config.php';
    $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
    if( $mysqli->connect_errno ) {
        echo "<p>$mysqli->connect_error<p>";
        die( "Couldn't connect to database");
    }
    

      $result = $mysqli->query("SELECT * FROM Users");
      $row = $result->fetch_assoc();
      $db_hash_password = $row['hashPassword'];
      $db_hash_username = $row['hashUsername'];
      if( password_verify( $post_password, $db_hash_password ) and password_verify( $post_username, $db_hash_username )) {
          $_SESSION['logged_user'] = $post_username;
          echo '<p class="success-message">You have successfully logged in as '.$post_username.'.</p>';
          echo '<script>window.location = "./login";</script>';
          $stmt = $mysqli->prepare($query);
          $stmt->bind_param("s", $post_username);
          $stmt->execute();
          $stmt->close();
          $mysqli->close();
      }
      else {
          echo '<p class="error-message">Your username and/or password were not correct.
                  Please try again.
                </p>';
      }
    }
?>
