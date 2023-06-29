<?php
include_once "../base.php";
//文字的更新
//先刪再改
//使用可變變數和table導入正確的class
dd($_POST);
echo"<hr>";
$table = $_POST['table'];
$db = ucfirst($table);
$row=$$db->find($_POST['id']);
dd($rows);
echo "<hr>";

   
    if (!empty($_FILES['img']['tmp_name'])) {
        move_uploaded_file($_FILES['img']['tmp_name'],'../upload/'.$_FILES['img']['name']);
        $row['img']=$_FILES['img']['name'];
    
    
    }  
        $$db->save($row);
    

    to("../backend.php?do=$table");
