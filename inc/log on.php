<?php
session_start();
?>
<head>
<link rel="stylesheet" type="text/css" href="../css/style log on.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
</head>
<body>
<div class="login">
<img  class="logo-brend-ukit" src="https://ukit.com/img/mainpage/newmainpage/locfree/header/ukit-logo-mobile.svg" alt="Ukit лого бренду"></svg>
</div>
<div class="logon">
<span class="material-icons-outlined" id="material-icons">highlight_off</span>
</div>
<form action="../panel/sineup.php" method="post" class="form-check">
<h1 class="form-check-header">Вхід</h1>
<span class="form-check-span">Не маєте акаунта?<a class="form-check-span-out" href="./log in.php" id="log in">Зареєструватися</a></span>
<div class="form-check-1-header">
<input type="email"  name="email"  class="form-check-1">
<label class="form-label-1">Ел.пошта</label>
<div class="text-danger"><?php if($_SESSION['data']){echo $_SESSION['data'];}unset($_SESSION['data'])?></div><br>
</div>
<div class="form-check-3-header">
<input type="password" name="password"  class="form-check-3">
<label class="form-label-3">Введіть пароль</label>
<div class="text-danger"><?php if($_SESSION['data']){echo $_SESSION['data'];}unset($_SESSION['data'])?></div><br>
</div>
<button class="form-btn">Увійти</button>
<button class="SM-GOOGLE-logon">Увійти через Google </button>
<button class="SM-FACEBOOK-logon">Увійти через Facebook</button>
<span class="span-form-check-text">Цей сайт захищено reCAPTCHA Enterprise. До нього застосовано <br> Політику конфіденційності та Умови використання Google.</span>
</form>
<script src="../js/script.js"></script>
</body>


