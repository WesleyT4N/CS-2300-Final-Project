<?php
require_once 'includes/config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if( $mysqli->connect_errno ) {
    //echo "<p>$mysqli->connect_error<p>";
   // die( "Couldn't connect to database");
}
if (isset($_POST['edit-row-id'])) {
        // set $rowToEdit to edit-row-id (make sure to validate before just in case by checking that it is a number)
        // Validate $_POST['itemNameEn'], $_POST['itemNameJp'], $_POST['itemNamePrice']
    $rowToEdit = filter_input( INPUT_POST, 'edit-row-id', FILTER_SANITIZE_NUMBER_INT);
    $english = filter_input( INPUT_POST, 'itemNameEn', FILTER_SANITIZE_STRING);
    $japanese = filter_input( INPUT_POST, 'itemNameJp', FILTER_SANITIZE_STRING);
    $price = filter_input( INPUT_POST, 'itemPrice', FILTER_SANITIZE_NUMBER_INT);
    $one = $mysqli->query("UPDATE Items SET en = '$english', jp = '$japanese', price = '$price' WHERE itemID = $rowToEdit");
        // Perform prepared statement database query

        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
    header('Location: ./menu');
    exit();
}
?>
