<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
    <p class="t cent botli"><?=$Image->header;?></p>
    <form method="post" target="back" action="./api/update.php">
        <table width="100%">
            <tbody>
                <tr class="yel">
                    <td width="68%">校園映像資料圖片</td>

                    <td width="7%">顯示</td>
                    <td width="7%">刪除</td>
                    <td></td>
                </tr>
                <?php
                $rows = $Image->all();
                foreach ($rows as $row) {
                ?>
                    <tr>
                        <td><img src="./upload/<?=$row['img'];?>" style="width:300px;height:80px"></td>
                       
                        <td> <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>" <?=($row['sh']==1)?'checked':'';?>></td>
                        <td> <input type="checkbox" name="del[]" value="<?= $row['id']; ?>"></td>
                        <td></td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
        <table style="margin-top:40px; width:70%;">
            <tbody>
                <tr>
                    <input type="hidden" name="table" value="image">
                    <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/add_form.php?table=image')" value="新增校園映像圖片"></td>
                    <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
                </tr>
            </tbody>
        </table>

    </form>
</div>