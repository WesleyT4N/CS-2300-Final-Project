<?php
require_once 'includes/config.php';
$mysqli = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
if( $mysqli->connect_errno ) {
    echo "<p>$mysqli->connect_error<p>";
    die( "Couldn't connect to database");
}
if (isset($_GET['delete-row-id'])) {
        // set $rowToDelete to delete-row-id (make sure to validate just in case by checking that it is a number)
        echo "hi";
        $rowToDelete = filter_input( INPUT_GET, 'delete-row-id', FILTER_SANITIZE_NUMBER_INT);
        echo $rowToDelete;
        echo $_GET['delete-row-id'];
        $one = $mysqli->query("DELETE FROM Items WHERE itemID = $rowToDelete");
        $two = $mysqli->query("DELETE FROM TypeOfItems WHERE itemID = $rowToDelete");
        //Perform prepared statement database query
        // Send the user back to the first page so they don't have that annoying pop-up if they hit the refresh button after deleting something.
        header('Location: https://info2300.coecis.cornell.edu/users/fp_supercool/www/Final%20Project/menu');
    }
else {
    echo "bye";
}
?>
