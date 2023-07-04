<?php
include_once "../base.php";
$main_id=$_POST['main_id'];
dd($_POST);
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