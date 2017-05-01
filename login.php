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
          <input class="login-input" type="text" name="username" placeholder="username"/>
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
        require_once 'includes/config.php';
        $mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
        if( $mysqli->connect_errno ) {
            echo "<p>$mysqli->connect_error<p>";
            die( "Couldn't connect to database");
        }
        //$hashed_password = password_hash("cafe_pacific", PASSWORD_DEFAULT) . '<br>';
        //echo "<p>Hashed password: $hashed_password</p>";
        $result = $mysqli->query("SELECT * FROM Login WHERE Username = '$post_username'");
        $row = $result->fetch_assoc();
        $db_hash_password = $row['hashPassword'];
        if( password_verify( $post_password, $db_hash_password ) ) {
            $db_username = $row['Username'];
            $_SESSION['logged_user'] = $db_username;
            echo '<p class="success-message">You have successfully logged in as '.$db_username.'.</p>';
        }
        else if ($post_username != NULL && $post_password != NULL) {
            echo '<p class="error-message">Your username and/or password were not correct.</p>';
            echo '<p>Please <a href="login.php">try again</a>.</p>';
        }

        $mysqli->close();
      ?>
    </div>
  </div>
</div>
<?php include('./includes/footer.php'); ?>
