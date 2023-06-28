<table width="100%">
    <tbody>
        <tr class="yel">
            <td width="45%"><?=$this->header;?></td>

            <td width="7%">顯示</td>
            <td width="7%">刪除</td>
            <td></td>
        </tr>
        <?php
        $rows = $Ad->all();
        foreach ($rows as $row) {
        ?>
            <tr>
                <td><input type="input" name="text[<?= $row['id']; ?>]" value="<?= $row['text']; ?>" style=width:95%></td>
                <td> <input type="checkbox" name="sh[]" value="<?= $row['id']; ?>"></td>
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
            <input type="hidden" name="table" value="ad">
            <td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/add_form.php?table=ad')" value="新增動態文字廣告"></td>
            <td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
        </tr>
    </tbody>
</table>

</form>
</div>