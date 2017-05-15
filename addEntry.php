<?php
require_once 'includes/config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if( $mysqli->connect_errno ) {
   die( "Couldn't connect to database");
}

if (isset($_POST['item-type-id'])) {

    $rowToAdd = filter_input( INPUT_POST, 'item-type-id', FILTER_SANITIZE_NUMBER_INT);
    $english = filter_input( INPUT_POST, 'addItemNameEn', FILTER_SANITIZE_STRING);
    $japanese = filter_input( INPUT_POST, 'addItemNameJp', FILTER_SANITIZE_STRING);
    $price = filter_input( INPUT_POST, 'addItemPrice', FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
    $one = $mysqli->query("INSERT INTO Items (en, jp, price) VALUES ('$english', '$japanese', '$price')");
    $two = $mysqli->query("SELECT itemID FROM Items WHERE en = '$english' AND jp = '$japanese' AND price = '$price'");
    $row = $two->fetch_row();
    $max = $row[0];


    $three = $mysqli->query("INSERT INTO TypeOfItems (itemID, typeID) VALUES ('$max', '$rowToAdd')");
        // Perform prepared statement database query

        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
    header('Location: ./menu');
    exit();
}
?>
