
<?php include('./includes/header.php'); ?>

<div class="main-container">
  <div class="container-fluid contact-container">
    <div class="row">
      <div class="col-sm-6 header-container">
        <h1 class="page-header-title ">contact</h1>
      </div>
      <div class="col-sm-6 translate-container">
        <button class="btn translate-button" id="contactTranslateBtn" type="button">
          ENG <i class="fa fa-arrows-h" aria-hidden="true"></i> 日本語
        </button>
      </div>
    </div>
    <div class="contact-content">
        <p id="phoneNumber"><span id="phoneTakeout">phone (take-out)</span><br />
            <i class="fa fa-phone" aria-hidden="true"></i> (607)-277-7700
        </p>
        <hr />

        <form action="contact.php" id="contactForm" method="post" onsubmit="return validateForm(this);">
            <h2 id="commentHeader">leave a comment</h2>
            <hr />
            <div class="form-group">
                <label id="nameLabel">name</label>
                <input id="name" autocomplete="off" type="text" name="name" placeholder="Commenter Name" /><div class="error"></div>
            </div>
            <div class="form-group">
                <label id="commentLabel">comment</label>
                <textarea id="comment" autocomplete="off" type="textarea" name="comment" placeholder="(comments, suggestions, etc.)" rows="4"></textarea><div class="error"></div>
            </div>
            <div class="form-group submit-container">
                <button class="btn" type="submit" id="submit" name="submit" class="submit">send</button><div class="error"></div>
            </div>
        </form>

      <?php

        if (isset($_POST['name'])) {
	       $name = $_POST['name'];
        }
        else {
            $name = "";
        }

        if (isset($_POST['comment'])) {
	       $comment = $_POST['comment'];
        }
        else {
            $comment = "";
        }

        if (isset($_POST['submit'])) {
            $subject = "New comment from $name.";
            // Waiting for owner to provide email address
            mail('jachen1997@yahoo.com', $subject, $comment);
            echo "<p class='success-message'>
              Thank you for your feedback!
            </p>";
        }

      ?>
    </div>
  </div>
</div>
<?php include('./includes/footer.php'); ?>
