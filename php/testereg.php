<?php
session_start();
require_once 'config.php';
 if (isset($_POST['login']) && isset($_POST['password'])){
 $login= ''.$_POST['login'].'';
 $pass=''.$_POST['password'].'';
 $res = mysqli_fetch_assoc(mysqli_query($link, "SELECT * FROM users WHERE Login = '".$login."'"));
 if($login==$res['Login'] && $pass==$res['Password']){
   echo 'TRUE';
   $_SESSION['id']=$res['id'];
   $_SESSION['password']= $pass;
   $_SESSION['id']=$login;
 }else{
  echo "Check that the data you entered is correct";
}
 }
?>