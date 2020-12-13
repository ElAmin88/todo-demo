<?php
$id = $_GET['id'];
//Connect DB
//Create query based on the ID passed from you table
//query : delete where Staff_id = $id
// on success delete : redirect the page to original page using header() method
require_once "config.php";

// sql to delete a record
$sql = "DELETE FROM items WHERE id = $id"; 

if (mysqli_query($db, $sql)) {
    mysqli_close($db);
    header('Location: home.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}


?>