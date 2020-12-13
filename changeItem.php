<?php
$id = $_GET['id'];
$status = $_GET['status'];
require_once "config.php";
$new =0;
if($status == 0){
    $new = 1;
}else{
    $new = 0;
}

$sql = "UPDATE items SET status = $new  WHERE id = $id"; 

if (mysqli_query($db, $sql)) {
    mysqli_close($db);
    header('Location: home.php'); //If book.php is your main page where you list your all records
    exit;
} else {
    echo "Error deleting record";
}


?>