<?php
session_start();
require_once('./connect.php');

$email = $_POST['email'];
$repeated_email = $_POST['repeated_email'];
$password = $_POST['password'];
$repeated_password = $_POST['repeated_password'];

if ($email == "" || $password == "") {
    $_SESSION['data'] = "Введіть дані в поля";
    header('Location: ../inc/log in.php');
} else {
    if ($email == $repeated_email && $password == $repeated_password) {
        if (strlen($password) > 8) {
            $email = mysqli_real_escape_string($connect, $email);
            $password = md5($password);

            $query = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
            mysqli_query($connect, $query);

            $_SESSION['message'] = "Ви успішно зареєструвались";
            header('Location: ../inc/log on.php');
        } else {
            $_SESSION['password'] = "Введіть довший пароль";
            
            header('Location: ../inc/log in.php');
        }
    } else {
        $_SESSION['repeated_email'] = "Розбіжні дані вводу";
        header('Location: ../inc/log in.php');
    }
}
?>
