<?php
session_start();
require_once './connect.php';

$email = $_POST['email'];
$password = $_POST['password'];
$password = md5($password);
$user= mysqli_query($connect, "SELECT * FROM `users` WHERE `email`='$email' AND `password`='$password'");

if (mysqli_num_rows($user) > 0) {
    $_SESSION['message'] = "Ви увійшли в акаунт";
    header("Location:../index.php");
} else {
    $_SESSION['data'] = "Невірні дані";
    header("Location:../inc/log on.php");
}
?>
