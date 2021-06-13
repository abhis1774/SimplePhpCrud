<?php
include 'config.php';                      
$id = $_POST['id'];
$name = $_POST['name'];
$address = $_POST['address'];
$email = $_POST['email'];


$res = mysqli_query($conn, "UPDATE user SET name='{$name}',address='{$address}',email='{$email}' WHERE id = '{$id}'") or die("Edit unsucess");

header("Location: index.php") or die("error");
?>
