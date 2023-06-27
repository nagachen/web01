<?php
include_once "../base.php";
//文字的更新
//先刪再改
dd($_POST);
foreach($_POST['text'] as $id => $text){
    if(!empty($_POST['del']) && in_array($id,$POST['del'])){
        $Title->del($id);
    }else{
        $row=$Title->find($id);
        $row['text']=$text;
        $row['sh']=($_POST['sh']==$id)?1:0;
        $Title->save($row);
    }
}