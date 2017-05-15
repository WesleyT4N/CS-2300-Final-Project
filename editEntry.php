<?php
require_once 'includes/config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if( $mysqli->connect_errno ) {
   die( "Couldn't connect to database");
}
if (isset($_POST['edit-row-id'])) {
    $rowToEdit = filter_input( INPUT_POST, 'edit-row-id', FILTER_SANITIZE_NUMBER_INT);
    $english = filter_input( INPUT_POST, 'itemNameEn', FILTER_SANITIZE_STRING);
    $japanese = filter_input( INPUT_POST, 'itemNameJp', FILTER_SANITIZE_STRING);
    $price = filter_input( INPUT_POST, 'itemPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $blank = $mysqli->query("SELECT * FROM Items WHERE itemID = $rowToEdit");
    $row = $blank->fetch_assoc();
    $en = $row['en'];
    $jp = $row['jp'];
    $pr = $row['price'];
    if ($english == "") {
        $english = $en;
    }
    if ($japanese == "") {
        $japanese = $jp;
    }
    if ($price == "") {
        $price = $pr;
    }
    $one = $mysqli->query("UPDATE Items SET en = '$english', jp = '$japanese', price = '$price' WHERE itemID = $rowToEdit");

    header('Location: ./menu');
    exit();
}
?>
