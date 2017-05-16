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

    $addToItemQuery = "INSERT INTO Items (en, jp, price) VALUES (?, ?, ?)";
    $addToItems = $mysqli->stmt_init();
    if ($addToItems->prepare($addToItemQuery)) {
      $addToItems->bind_param("ssd", $english, $japanese, $price);
      $addToItems->execute();
    }

    $fetchItemIDQuery = "SELECT itemID FROM Items WHERE en = ? AND jp = ? AND price = ?";
    $fetchItem = $mysqli->stmt_init();
    if ($fetchItem->prepare($fetchItemIDQuery)) {
      $fetchItem->bind_param("ssd", $english, $japanese, $price);
      $fetchItem->execute();
      $result = $fetchItem->get_result();
    }
    $row = $result->fetch_row();
    $id = $row[0];

    $setItemTypeQuery = "INSERT INTO TypeOfItems (itemID, typeID) VALUES (?, ?)";
    $setItemType = $mysqli->stmt_init();
    if ($setItemType->prepare($setItemTypeQuery)) {
      $setItemType->bind_param("ii", $id, $rowToAdd);
      $setItemType->execute();
    }

    $addToItems->close();
    $fetchItem->close();
    $setItemType->close();
    header('Location: ./menu');
    exit();
}
?>
