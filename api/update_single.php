<?php
include_once "../base.php";
//文字的更新
//先刪再改
//使用可變變數和table導入正確的class
dd($_POST);
echo"<hr>";
$table = $_POST['table'];
$db = ucfirst($table);
//取得資料表中id為1的資料
$row=$$db->find(1);
dd($row);
//根據資料表名稱來更新資料表,僅對total和bottom兩張資料表有用
$row[$table]=$_POST[$table];
//更新完的資料寫回資料表
$$db->save($row);
  

 to("../backend.php?do=$table");
