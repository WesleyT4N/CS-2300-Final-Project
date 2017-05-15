<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Café Pacific | Ithaca NY</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=yes">
  <link rel="stylesheet" type="text/css" href="./css/style.css"/>

  <script
    src="https://code.jquery.com/jquery-3.1.1.min.js"
    integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
    crossorigin="anonymous">
  </script>
  <link href="./css/jquery.bxslider.css" rel="stylesheet" />
  <script src="./js/jquery.bxslider.js"></script>
  <script src="./js/main.js"></script>
  <link href="./css/bootstrap.min.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/104d9a8f78.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
  <?php require_once "./includes/functions.php"; ?>
</head>

<body>
      <nav class="navbar">
          <a href="./index" class="nav-item">
            home
          </a>
          <a href="./menu" class="nav-item">
            menu
          </a>
          <a href="./index" class="nav-item">
            <div id="logo">
              café <i class="fa fa-circle" aria-hidden="true"></i> pacific
            </div>
          </a>
          <a href="./about" class="nav-item">
            info
          </a>
          <a href="./contact" class="nav-item">
            contact
          </a>
        </nav>
    <div class="wrapper">
