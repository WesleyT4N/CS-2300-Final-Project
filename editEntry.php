<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['edit-row-id'])) {
        // set $rowToEdit to edit-row-id (make sure to validate before just in case by checking that it is a number)
        // Validate $_POST['itemNameEn'], $_POST['itemNameJp'], $_POST['itemNamePrice']
        // Perform prepared statement database query

        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
        header('Location: ./menu');

    }
}
?>
