<h3>新增最新消息資料</h3>
<hr>
<form action="./api/add.php" method="post" enctype="multipart/form-data">
<table>
    <tr>
        <td>
            最新消息資料:
        </td>
        <td>
            <textarea name="text" style="width:400px;height:200px"></textarea>
        </td>
    </tr>
    
    <tr>
        <td>
        <input type="hidden" name='table' value='news'>

            <input type='submit' value="新增">
        
        <input type='reset' value="重置">

        </td>
    </tr>
</table>
</form>