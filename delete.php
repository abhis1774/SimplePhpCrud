<?php
include 'config.php';
$id = $_GET['id'];
$sql = "DELETE FROM user WHERE id = '{$id}'";
mysqli_query($conn,$sql);
header("Location: index.php");
mysqli_close($conn);
?>
