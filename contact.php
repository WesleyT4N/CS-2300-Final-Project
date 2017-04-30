<?php include('./includes/header.php'); ?>
<div class="main-container">
  <div class="container-fluid contact-container">
    <div class="row">
      <div class="col-xs-6 header-container">
        <h1 class="page-header-title ">contact</h1>
      </div>
      <div class="col-xs-6 translate-container">
        <button class="btn translate-button" type="button">eng / jpn</button>
      </div>
    </div>
    <div class="contact-content">
      <p id="phoneNumber">
        phone (take-out)
        <br />
        <i class="fa fa-phone" aria-hidden="true"></i> (607)-277-7700
      </p>
      <hr />
      <form id="contactForm" method="post">
        <h2 id="commentHeader">leave a comment</h2>
        <div class="form-group">
          <label>name</label>
          <input id="name" autocomplete="off" type="text" name="name" placeholder="Commenter Name" />
        </div>
        <div class="form-group">
          <label>comment</label>
          <textarea id="comment" autocomplete="off" type="textarea" name="comment" placeholder="(comments, suggestions, etc.)" rows="4"></textarea>
        </div>
        <div class="form-group submit-container">
          <button class="btn" type="button" id="commentSubmit" name="submit">send</button>
        </div>
      </form>
      <?php
      // Put contact code here
      ?>
    </div>
  </div>
</div>
<?php include('./includes/footer.php'); ?>
