<?php
include_once "../base.php";
//文字的更新
//先刪再改
//使用可變變數和table導入正確的class
dd($_POST);
echo"<hr>";
$table = $_POST['table'];
$db = ucfirst($table);
$row=$$db->find(1);
dd($row);
$row[$table]=$_POST[$table];
$$db->save($row);
  

 to("../backend.php?do=$table");
