<?php
$query_values=$_POST['category'];
if($query_values!='all'){
$fil='../img/'.$query_values.'/';
$count=glob($fil.'*');
echo var_dump($count),  array_key_last($count);
}else{
 $fill=array();
 $count=array();
 $img=array();
 $key=0;
array_push($fill,'../img/panorams/','../img/portraints/','../img/journal/','../img/macro/');
for($i=0; $i < count($fill); $i++){
    $key+=count(glob($fill[$i].'*'));
    array_push($count, glob($fill[$i].'*'));
}
foreach($count as $val){
    foreach($val as $vl){
    array_push($img, $vl);
    }
}
 echo var_dump($img), $key;
}
?>