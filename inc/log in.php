<?php
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" href="../css/style.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<div class="login">
<img  class="logo-brend-ukit" src="https://ukit.com/img/mainpage/newmainpage/locfree/header/ukit-logo-mobile.svg" alt="Ukit лого бренду"></svg>
</div>
<div class="logon">
<span class="material-icons-outlined" id="material-icons">highlight_off</span>
</div>
<form action="../panel/sinein.php" method="post" class="form-check">
<h1 class="form-check-header">Реєстрація</h1>
<span class="form-check-span">Вже є акаунт? <a class="form-check-span-out" href="./log on.php">Вхід</span></a>
<div class="form-check-1-header">
<input type="email"  name="email"  class="form-check-1">
<label class="form-label-1">Ел.пошта</label>
<div class="text-danger"><?php if($_SESSION['data']){echo $_SESSION['data'];}unset($_SESSION['data'])?></div><br>
</div>
<div class="form-check-2-header">
<input type="email" name="repeated_email" class="form-check-2">
<label class="form-label-2">Введіть пошту ще раз</label>
<div class="text-danger"><?php if($_SESSION['repeated_email']){echo $_SESSION['repeated_email'];}unset($_SESSION['repeated_email'])?></div><br>
</div>
<div class="form-check-3-header">
<input type="password" name="password"  class="form-check-3">
<label class="form-label-3">Придумайте пароль</label>
<div class="text-danger"><?php if($_SESSION['password']){echo $_SESSION['password'];}unset($_SESSION['password'])?></div><br>
</div> 
<div class="form-check-4-header">
<input type="password" name="repeated_password"  class="form-check-4">
<label class="form-label-4">Введіть пароль ще раз</label>
<div class="text-danger"><?php if($_SESSION['repeated_email']){echo $_SESSION['repeated_email'];}unset($_SESSION['repeated_email'])?></div><br>
</div>
<button class="form-btn">Зареєструватися</button>
<button class="SM-GOOGLE">Увійти через Google </button>
<button class="SM-FACEBOOK">Увійти через Facebook</button>
<span class="span-form-check">* Реєструючись, ви приймаєте наші Умови використання і підтверджуєте, що вами прочитана наша Політика конфіденційності</span>
<span class="span-form-check-2">Цей сайт захищено reCAPTCHA Enterprise. До нього застосовано Політику конфіденційності та Умови використання Google.</span>
</form>

<script src="../js/script.js"></script>
