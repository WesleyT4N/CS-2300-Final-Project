<?php
function makeMenuEditForm($id, $en, $jp, $price) {
  if (empty($jp)) {
    $jp = 'none';
  }
  // echo given menu item with correct html classes and tags for styling
  echo '<form action="./editEntry.php" method="post" class="menu-edit-form">';
      echo '<input type="hidden" value="'.$id.'" name="edit-row-id">';
      echo '<input class="edit-input en-item-input" type="text" name="itemNameEn" autocomplete="off" placeholder="en: ('.$en.')"/>';
      echo '<input class="edit-input jp-item-input" type="text" name="itemNameJp" autocomplete="off" placeholder="jpn: ('.$jp.')"/>';
      echo '<input class="edit-input price-input" type="text" name="itemPrice" autocomplete="off" placeholder="$: ('.$price.')" />';
      echo '<button class="edit-input btn edit-form-btn" type="submit"><i class="fa fa-check" aria-hidden="true"></i></button>';
  echo '</form>';
}

function makeMenuDeleteForm($id) {
  echo '<form action="./deleteEntry.php" method="psot" class="menu-delete-form">';
      echo '<input type="hidden" value="'.$id.'" name="delete-row-id">';
      echo '<label class="delete-label">Are you sure you want to delete?</label>';
      echo '<button class="delete-input btn delete-form-btn confirm-delete" type="submit">yes</button>';
      echo '<button class="delete-input btn delete-form-btn" type="button">no</button>';
  echo '</form>';
}

function makeMenuAddForm($typeId) {
  echo '<hr />';
  echo '<form action="./addEntry.php" method="post" class="menu-add-form">';
      echo '<input type="hidden" value="'.$typeId.'" name="item-type-id">';
      echo '<input class="add-input en-item-input" type="text" name="addItemNameEn" autocomplete="off" placeholder="eng. item name"/>';
      echo '<input class="add-input jp-item-input" type="text" name="addItemNameJp" autocomplete="off" placeholder="jpn. item name"/>';
      echo '<input class="add-input price-input" type="text" name="addItemPrice" autocomplete="off" placeholder="$: " />';
      echo '<button class="add-input btn add-form-btn" type="addSubmit"><i class="fa fa-plus" aria-hidden="true"></i></button>';
  echo '</form>';
}
?>
