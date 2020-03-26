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
<div id='Registration'>
<h2>Регистрация</h2>
<form id='RegistrationForm' method='post' enctype='multipart/form-data'>
<label for='name'><span>Имя</span>
<input type='text' class='RegName' id='name' name='name' required></label>
<label for='surname'><span>Фамилия</span>
<input type='text' class='RegSurname' id='surname' name='surname' required></label>
<label for='email'><span>E-mail</span>
<input type='email' class='RegEmail' id='email' name='RegEmail'></label>
<label for='login'><span>Логин</span>
<input type='text' class='Reglogin' id='login' name='login' required></label>
<label for='password'><span>Пароль</span>
<input type='password' class='RegPassword' id='password' name='RegPassword' required></label>
<label for='RepeatPassword'><span>Повторите пароль</span>
<input type='password' class='RepeatPassword' id='RepeatPassword' name='RepeatPassword' required></label>
<label for='сaptcha'><span>Введите капчу</span>
<input type="text" name="code" id='сaptcha' class='code'></label>
<img src="captcha.php" id='capcha-image' alt="Вывод капчи" />
<label for='privacy' class='privacy'>
<input type='checkbox' id='privacy'/><span> Я даю согласие на обработку персональных данных и соглашаюсь с <a href='#' class='regulations'>правилами обработки персональных данных</a></span></label>
<input type='submit' value='отправить'>
</form>
</div>
<div class='MessageError'>
   <p class='TextError'></p>
</div>

<?php require_once "footer.php"; ?>
<script src='../JavaScript/jquery-3.1.1.min.js'></script>
<script src='../JavaScript/script.js'></script>
</body>
</html>

