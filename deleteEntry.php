<?php
require_once 'includes/config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if( $mysqli->connect_errno ) {
   die( "Couldn't connect to database");
}
if (isset($_POST['delete-row-id'])) {

        $rowToDelete = filter_input( INPUT_POST, 'delete-row-id', FILTER_SANITIZE_NUMBER_INT);
        $one = "DELETE FROM Items WHERE itemID = ?";
        $two = "DELETE FROM TypeOfItems WHERE itemID = ?";

        $deleteFromItems = $mysqli->stmt_init();
        if ($deleteFromItems->prepare($one)) {
          $deleteFromItems->bind_param("i", $rowToDelete);
          $deleteFromItems->execute();
          $deleteFromItems->close();
        }

        $deleteFromTypeOfItems = $mysqli->stmt_init();
        if ($deleteFromTypeOfItems->prepare($two)) {
          $deleteFromTypeOfItems->bind_param("i", $rowToDelete);
          $deleteFromTypeOfItems->execute();
          $deleteFromTypeOfItems->close();
        }
        header('Location: ./menu');
        exit();
    }
?>
