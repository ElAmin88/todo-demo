<?php
$dbhost = getenv("MYSQL_SERVICE_HOST");
$dbport = getenv("MYSQL_SERVICE_PORT");
$dbuser = getenv("databaseuser");
$dbpwd = getenv("databasepassword");
$dbname = getenv("databasename");
$db = mysqli_connect($dbhost, $dbuser, $dbpwd, $dbname);

   if($db === false){
      die("ERROR: Could not connect. " . mysqli_connect_error());
  }
?>