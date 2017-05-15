<?php
require_once 'includes/config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if( $mysqli->connect_errno ) {
   die( "Couldn't connect to database");
}
if (isset($_POST['delete-row-id'])) {

        $rowToDelete = filter_input( INPUT_POST, 'delete-row-id', FILTER_SANITIZE_NUMBER_INT);
        $one = $mysqli->query("DELETE FROM Items WHERE itemID = $rowToDelete");
        $two = $mysqli->query("DELETE FROM TypeOfItems WHERE itemID = $rowToDelete");

        header('Location: ./menu');
        exit();
    }
?>
