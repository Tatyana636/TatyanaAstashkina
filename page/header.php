<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv='refresh' content='1000'>
<title>BLUEASY</title>
<meta name='viewport' content='width=device-width, initial-scale=1'>
<link rel="stylesheet" href="style/style.css">
<link media="screen" rel="stylesheet" href="style/media.css">
<link rel="icon" type="image/x-icon" href="img/favic.png">
</head>
<body>
<header id='header'>
    <div class='nav_bar'>
        <img src='../img/logo.png' title='logo' class='logo'>
        <nav class='nav'>
			<span class="icon-bar1"></span>
			<span class="icon-bar2"></span>
			<span class="icon-bar3"></span>
		<div class='nav_container'>  
        <a class='nav_head_home' href='#'>home</a>
        <a class='nav_head_services' href='#'>services</a>
        <a class='nav_head_features' href='#'>features</a>
        <a class='nav_head_portfolio' href='#'>portfolio</a>
        <a class='nav_head_contact' href='#'>contact</a>
        </nav>
        <div id="auth_block">
<?php
    if(!isset($_SESSION['login']) && !isset($_SESSION['password'])){
?>
    <a href='page/autoriz.php' target='_blank' class='Login'>Authentication</a>
    <a href='page/registr.php' target='_blank' class='Registration'>Registration</a>
<?php
    }else{
?> 
    <a href="php/exit.php" class='exit'>Exit</a>
<?php
    }
?>
</div>
</div>
<h2>"i`m looking for the unexpected.</h2>
<h2>i`m looking for things i`ve never seen before."</h2>
</header>