<?php
 $server = "localhost";
 $username = "root"; 
 $password = ""; 
 $database = "messageusers"; 
  
 $link = mysqli_connect($server, $username, $password, $database);

 if (mysqli_connect_errno()) { 
     echo "<p><strong>Ошибка подключения к БД</strong>. Описание ошибки: ".mysqli_connect_error()."</p>";
     exit(); 
 }

 mysqli_set_charset($link, 'utf8');
?>