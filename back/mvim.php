<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
					<p class="t cent botli"><?=$Mvim->header;?></p>
					<form method="post"  action="./api/update.php">
						<table width="100%">
							<tbody>
								<tr class="yel">
									<td width="68%">動畫圖片</td>
									<td width="7%">顯示</td>
									<td width="7%">刪除</td>
									<td></td>
								</tr>
                                <?php
                                    $rows=$Mvim->all();
                                    foreach($rows as $row){  
                                                            
                                ?>
                                <tr>
                                <td><img src="./upload/<?=$row['img'];?>"style="width:150px; height:120px;"></td>
                              
                                <td><input type="checkbox" name="sh[]" value="<?=$row['id'];?>" <?=($row['sh']==1)?'checked':'';?>></td>
                                <td><input type="checkbox" name="del[]" value="<?=$row['id'];?>"></td>
                                <td><input type="button" value="更換動畫"></td>
                                </tr> 
                                <?php
                                    }
                                    ?>
							</tbody>
						</table>
						<table style="margin-top:40px; width:70%;">
							<tbody>
								<tr>
									<input type="hidden" name="table" value="mvim">
									<td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/add_form.php?table=mvim')" value="新增動畫圖片"></td>
									<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
								</tr>
							</tbody>
						</table>

					</form>
				</div>