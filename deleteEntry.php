<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    if (isset($_POST['delete-row-id'])) {
        // set $rowToDelete to delete-row-id (make sure to validate just in case by checking that it is a number)

        // Perform prepared statement database query

        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
        header('Location: ../menu');
    }
}
?>
