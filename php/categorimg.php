<?php
session_start();
require_once 'config.php';
$query_values=$_POST['category'];
$sess=$_SESSION['id'];
if($query_values!='all'){
    $result=mysqli_query($link,"SELECT $query_values FROM images WHERE IdUser=$sess and $query_values!='NULL'");
    $res=mysqli_fetch_all($result);
    var_dump($res);
}elseif($query_values=='all'){
  $img=array();
  $result=mysqli_query($link,"SELECT * FROM images WHERE IdUser=$sess");
  $res=mysqli_fetch_all($result);
  foreach($res as $val){
      foreach($val as $vl){
        if($vl!=NULL){
         array_push($img, $vl);
        }
      }
  }
  $fl=preg_grep('/\w+\S\w+/',  $img);
  var_dump( $fl);
 }
?>