
<!DOCTYPE html>
<html>
<head>
<style>
table, th, td {
  border: 1px solid black;
}
</style>
</head>
<body>
<?php
require_once "config.php";
session_start();

function getStatus($status){
    if($status == 0){
        return "In Progress";
    }
    else {
        return "Complete";
    }

}
$sql = "SELECT id, content, status FROM items WHERE userId =" . $_SESSION["id"];
$result = $db->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>To-Do</th><th>Status</th><th>Delete</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $status = getStatus($row["status"]);
        echo "<tr><td>".$row["content"] . "</td><td><a href='changeItem.php?id=".$row['id']."&status=".$row["status"]."'>". $status ."</a></td><td><a href='deleteItem.php?id=".$row['id']."'>Delete</a></td></tr>";
    }
    echo "</table>";
  } else {
    echo "0 results";
  }
  $db->close();

?>

<form action="addItem.php" method="post">
    <input type="text" name="content" placeholder="To-Do">
    <input type="submit"  value="Add"> 
</form>
<a href='logout.php'>logout</a>
</body>
</html>