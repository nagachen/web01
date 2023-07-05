<?php
include_once "../base.php";
//文字的更新
//先刪再改
//使用可變變數和table導入正確的class
dd($_POST);
echo"<hr>";
$table = $_POST['table'];
$db = ucfirst($table);
if(isset($_POST['text'])){
    $rows=$_POST['text'];
}else if(isset($_POST['acc'])){
    $rows=$_POST['acc'];
}else{
    //取得img filename
    $rows=$_POST['id'];
  //換了一換分頁失效
}
dd($rows);
echo "<hr>";
foreach ($rows as $id => $text) {
    dd($id);
    if (!empty($_POST['del']) && in_array($id, $_POST['del'])) {
        $$db->del($id);
       echo"del";
    } else {
        $row = $$db->find($id);
        switch($table){
            case 'title':
                $row['text']=$text;
                $row['sh']=($_POST['sh']==$id)?1:0;
            break;
            case 'admin':
            break;
            case 'menu':
                $data['text']=$text;
                $data['href']=$_POST['href'][$id];
            break;
            default:
            if(isset($_POST['text'])){
                $row['text']=$text;
            }
            $row['sh']=(isset($_POST['sh'] )&& in_array($id,$_POST['sh']))?1:0;
        }
        $$db->save($row);
    }
}
    // to("../backend.php?do=$table");
