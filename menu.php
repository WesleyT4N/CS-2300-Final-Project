<?php include('./includes/header.php'); ?>
<?php
require_once "includes/config.php";
$mysqli = new mysqli( DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

if ($mysqli->connect_errno) {
  echo "Failed";
  echo "Errno: " . $mysqli->connect_errno . "\n";
  echo "Error: " . $mysqli->connect_error . "\n";
}
$ids = array();
?>
<div class="main-container">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-6 header-container">
        <h1 class="page-header-title ">menu</h1>
      </div>
      <div class="col-sm-6 translate-container">
        <form method="post">
          <button class="btn translate-button" id="menuTranslateBtn" name="lang" type="submit">
            ENG <i class="fa fa-arrows-h" aria-hidden="true"></i> 日本語
          </button>
        </form>
      </div>
    </div>
  </div>
    <?php
    
    if (isset($_GET['lang'])) {
	   $lang = $_GET['lang'];
    }
        else {
        $lang = "";
    }
    
    if (empty($lang) || $lang == "en") {
        if (isset($_POST['lang'])) {
            header("Location: https://info2300.coecis.cornell.edu/users/fp_supercool/www/Final%20Project/menu?lang=jp");
        }
    }
    else if ($lang == "jp") {
        if (isset($_POST['lang'])) {
            echo "button pressed";
            header("Location: https://info2300.coecis.cornell.edu/users/fp_supercool/www/Final%20Project/menu?lang=en");
        }
    }
    ?>
  <div class="menu-container">
    <div class="row">
      <div class="col-md-6">
        <div class="item-type-container">
          <h1 class="menu-header">entrees</h1>
          <div class="item-container" id="entrees">
            <?php
            $entrees = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 8");
            while($row = $entrees->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
              makeMenuAddForm(8);
            }
            ?>
          </div>
        </div>
        <div class="item-type-container">
          <h1 class="menu-header">noodles</h1>
          <div class="item-container" id="noodles">
            <?php
            $noodles = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 3");
            while($row = $noodles->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
              makeMenuAddForm(3);
            }
            ?>
          </div>
        </div>
        <div class="item-type-container">
          <h1 class="menu-header">sides</h1>
          <div class="item-container" id="sides">
            <?php
            $sides = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 4");
            while($row = $sides->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
              makeMenuAddForm(4);
            }
            ?>
          </div>
        </div>
        <div class="item-type-container">
          <h1 class="menu-header">salads</h1>
          <div class="item-container" id="salads">
            <?php
            $salads = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 2");
            while($row = $salads->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
              makeMenuAddForm(2);
            }
            ?>
          </div>
        </div>

        <div class="item-type-container">
          <h1 class="menu-header">snacks</h1>
          <div class="item-container" id="snacks">
            <?php
            $snacks = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 6");
            while($row = $snacks->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
              makeMenuAddForm(6);
            }
            ?>
          </div>
        </div>
      </div>

      <div class="col-md-6">
        <div class="item-type-container">
          <h1 class="menu-header">rice dishes</h1>
          <div class="item-container" id="riceDishes">
            <?php
            $rice = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 7");
            while($row = $rice->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
              makeMenuAddForm(7);
            }
            ?>
          </div>
        </div>

        <div class="item-type-container">
          <h1 class="menu-header">drinks</h1>
          <div class="item-container" id="drinks">
            <?php
            $drinks = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 1");
            while($row = $drinks->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
              makeMenuAddForm(1);
            }
            ?>
          </div>
        </div>

        <div class="item-type-container">
          <h1 class="menu-header">desserts</h1>
          <div class="item-container" id="desserts">
            <?php
            $desserts = $mysqli->query("SELECT * FROM Items LEFT JOIN TypeOfItems ON Items.itemID = TypeOfItems.itemID WHERE TypeOfItems.typeID = 5");
            while($row = $desserts->fetch_assoc()) {
              $pic = $row[ 'filePath' ];
              $credit = $row[ 'credit' ];
              $id = $row['itemID'];
              $en = $row[ 'en' ];
              $jp = $row[ 'jp' ];
              $price = $row[ 'price' ];

              if (isset($_SESSION['logged_user'])) {
                echo "<p><button class='edit-button'><i class='fa fa-pencil' aria-hidden='true'></i></button>
                <span jpn='$jp' val='$id'>$en</span>
                 <span style='float: right;'>$price<button class='delete-button'><i class='fa fa-trash' aria-hidden='true'></i></button></span>
                 </p>";
                 makeMenuEditForm($id, $en, $jp, $price);
                 makeMenuDeleteForm($id);
              } else {
                  if ($lang == "jp") {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$jp</span><span style='float: right;'>$price</span></p>";
                  }
                  else {
                      echo "<p><span jpn='$jp' id='item$id' val='$id'>$en</span><span style='float: right;'>$price</span></p>";
                  }
              }


              // if you want to use these later on
              //echo "<p>$pic</p>";
              //echo "<p>$credit</p>";
              //echo "<p>$jp</p>";
            }
            if (isset($_SESSION['logged_user'])) {
               makeMenuAddForm(5);
            }
            ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php include('./includes/footer.php'); ?>
