<?php
include_once "../base.php";
$main_id=$_POST['main_id'];
dd($_POST);
//編輯/刪除次選單
if(isset($_POST['text'])){
    foreach($_POST['text'] as $id=>$text){
        if(isset($_POST['del'])&& in_array($id,$_POST['del'])){
            $Menu->del($id);
        }else{
            $row=$Menu->find($id);
            $row['text']=$text;
            $row['href']=$P_OST['href'][$id];
            $Menu->save($row);
        }
    }
}
//新增次選單
if(isset($_POST['text2'])){
    foreach($_POST['text2'] as $idx => $text){
        if($text!=""){
            $Menu->save([
                'text'=>$text,
                'href'=>$_POST['href2'][$idx],
                'sh'=>1,
                'main_id'=>$main_id
            ]);
        }
    }
}
 to("../backend.php?do=menu");
?>