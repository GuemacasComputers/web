<?php
session_start();
$name = $_POST['name'];
$comment = $_POST['comment'];
$connection = mysqli_connect("localhost", "root", "", "com");
$name = mysqli_real_escape_string($connection, $name);
$comment = mysqli_real_escape_string($connection, $comment);

$token = uniqid();
mysqli_query($connection, "INSERT INTO comments (name, comment, token) VALUES ('$name', '$comment', '$token')");

$_SESSION['last_token'] = $token;
header('Location: index.php#stripe');
exit();
?>
