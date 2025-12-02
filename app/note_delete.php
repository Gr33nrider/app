<?php 

require_once("connectDB.php");

$pid = $_GET['pid'];

$result = mysqli_query($link, "DELETE FROM pages WHERE id = {$pid} ");
header("Location: ./index.php");

?>