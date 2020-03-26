<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv='refresh' content='1000'>
<title>BLUEASY</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="../style/style.css">
<link media="screen" rel="stylesheet" href="../style/media.css">
<link rel="icon" type="image/x-icon" href="../img/favic.png">
</head>
<body>

<?php require_once "header.php"; ?>

<div class='ContainerError'>
<p class='mesage_error'>Check that the data you entered is correct</p>
</div>

<div id='Login'>
<h2>Авторизация</h2>
<form id='div_form' method='post' enctype='multipart/form-data'>
<label for='login'>Логин
<input type='text' class='Loglogin' id='login' name='Loglogin'></label>
<label for='password'>Пароль
<input type='password' class='LogPass' id='password' name='LogPass'></label>
<input type='button' value='отправить' onclick='clicker()'>
<a href='registr.php' class='registr'>Зарегистрироваться</a>
</form>
</div>

<?php require_once "footer.php"; ?>

<script src='../JavaScript/jquery-3.1.1.min.js'></script>
<script src='../JavaScript/script.js'></script>
</body>
</html>

