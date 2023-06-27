<?php
include_once "../base.php";
$table=$_POST['table'];
$db=ucfirst($table);
$data=[];

if(!empty($_FILES['img']['tmp_name'])){
    $data['img']=$_FILES['img']['name'];
    move_uploaded_file($_FILES['img']['tmp_name'],'../upload/'.$_FILES['img']['name']);
}

switch($table){
    case "title":
    case 'news':
    case 'ad':
        $data['text']=$_POST['text'];
    break;
}
$data['sh']=($table=='title')?0:1;
$$db->save($data);
to("../backend.php?do=$table");
?>