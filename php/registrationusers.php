<?php
session_start();
require_once 'config.php';
if (isset($_POST['RegName']) && isset($_POST['RegSurname']) && isset($_POST['Reglogin']) && isset($_POST['RegPassword']) && isset($_POST["code"])){
    $login = trim($_POST['Reglogin']);
    $password= trim($_POST['RegPassword']);
    $captcha = trim($_POST["code"]);
    $name =  trim($_POST['RegName']);
    $surname= trim($_POST['RegSurname']);
    $email =  trim($_POST['RegEmail']);
    if(($_SESSION["rand"] != $captcha) && ($_SESSION["rand"] != "")){
        echo "Error! You entered the wrong captcha";
    }else{
    $result_email= mysqli_query($link,'SELECT `E-mail` FROM users WHERE `E-mail`='.$email);
    $result_password_login = mysqli_fetch_assoc(mysqli_query($link,'SELECT `Login`,`Password` FROM users WHERE `Login`="'.$login.'"'));
    if($email=='' || $result_email==0){
        if($result_password_login['Login']!=$login){
    $query_string = 'INSERT INTO users(`Login`, `Password`, `Name`, `Surname`, `E-mail`) VALUES ("'.$login.'", "'.$password.'","'.$name.'","'.$surname.'","'.$email.'")';
    $result = mysqli_query($link,$query_string);
    $_SESSION['password']=$password;
    $_SESSION['login']=$login;
    if($result==true){
        echo 'TRUE';
    }
}else{echo 'A user with this username already exists. Please enter a different one';}
}else{echo 'A user with this email address is already registered';}
}
}else{echo 'Fill in all fields';}
?>