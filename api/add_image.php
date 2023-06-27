<?php
include_once "../base.php";
dd($_FILES);
$data=[];
if(!empty($_FILES['img']['tmp_name'])){
    $data['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../upload/'.$_FILES['img']['name']);
}
$data['sh']=1;
$Image->save($data);

to("../backend.php?do=image");