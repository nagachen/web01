<?php
include_once "../base.php";
$table=$_GET['table'];
$db=ucfirst($table);
?>
<h3><?=$$db->add_header;?></h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data"> 
<table>
    <?=$$db->add_form();?>
    <tr>
        <td>
            <input type="hidden" name='table' value='<?=$table;?>'>
            <input type='submit' value="新增">
      
        <input type='reset' value="重置">

        </td>
    </tr>
</table>
</form>