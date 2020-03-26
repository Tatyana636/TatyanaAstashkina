<?php
session_start();
require_once 'config.php';
$data = array(); 
$category='`'.$_POST['category'].'`';
$error = false;
$files = array();
$file_path = '';
$uploaddir = 'upload/';
$sess=$_SESSION['id'];
$img=$_FILES['img'];
    if( move_uploaded_file( $img['tmp_name'], $uploaddir . basename($img['name']) ) ){
        $files[] = realpath( $uploaddir . $img['name'] );
        $file_path = $uploaddir . basename($img['name']);
    $query_string = "INSERT INTO images($category, `IdUser`) VALUES ($file_path, $sess)";
    $result = mysqli_query($link,$query_string);
    var_dump($result);
}else{
       $error = true;
        }
    $data = $error ? array('error' => 'Ошибка загрузки файлов.') : array('files' => $files );
    mysqli_close($link);
 ?>