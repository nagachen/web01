<?php
include_once "../base.php";
//文字的更新
//先刪再改
//使用可變變數和table導入正確的class
dd($_POST);
$table = $_POST['table'];
$db = ucfirst($table);
foreach ($_POST['text'] as $id => $text) {
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $$db->del($id);
       
    } else {
        $row = $$db->find($id);
        $row['text'] = $text;
        if ($table == 'title') {
            $row['sh'] = ($_POST['sh'] == $id) ? 1 : 0;
        } else {
            $row['sh'] = ((!empty($_POST['sh'])) && in_array($id, $_POST['sh'])) ? 1 : 0;
           
        }
        $$db->save($row);
    }
}
  to("../backend.php?do=$table");
