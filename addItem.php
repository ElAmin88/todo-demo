<?php
session_start();
require_once "config.php";


if($_SERVER["REQUEST_METHOD"] == "POST"){

    $content = trim($_POST["content"]);
    $user = $_SESSION["id"];
    $sql = "INSERT INTO items (content, status, userId)
            VALUES ('$content',0, $user)";
    if (mysqli_query($db, $sql)) {
        mysqli_close($db);
        header('Location: home.php'); //If book.php is your main page where you list your all records
        exit;
    } else {
        echo "Error Inserting record";
    }
    
}


?>