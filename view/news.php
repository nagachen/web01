<style>
	a {
		text-decoration: none;
	}

	a:hover {
		text-decoration: underline;
	}
</style>
<div style="width:99%; height:87%; margin:auto; overflow:auto; border:#666 1px solid;">
	<p class="t cent botli"><?= $this->header; ?>管理</p>
	<form method="post" target="back" action="./api/update.php">

		<table width="100%">
			<tbody>
				<tr class="yel">

					<td width="68%"><?= $this->header; ?></td>
					<td width="7%">顯示</td>
					<td width="7%">刪除</td>
					<td></td>
				</tr>
				<?php
				$rows = $this->paginate(3);
				foreach ($rows as $row) {

				?>
					<tr>

						<td><input type="text" name="text[<?= $row['id']; ?>]" value="<?= $row['text'] ?>"></td>
						<td><input type="checkbox" name="sh[<?= $row['id']; ?>]" value="<?= $row['id']; ?>" <?= ($row['sh'] == 1) ? 'checked' : ''; ?>></td>
						<td><input type="checkbox" name="del[<?= $row['id']; ?>]" value="<?= $row['id']; ?>"></td>

					</tr>
				<?php
				}
				?>
			</tbody>
		</table>
		<div style="text-align:center">
			<?= $this->links(); ?>
		</div>
		<table style="margin-top:40px; width:70%;">
			<tbody>
				<tr>
					<input type="hidden" name="table" value="<?= $this->table; ?>">
					<td width="200px"><input type="button" onclick="op('#cover','#cvr','./modal/add_form.php?table=<?= $this->table; ?>')" value="新增<?= $this->header; ?>"></td>
					<td class="cent"><input type="submit" value="修改確定"><input type="reset" value="重置"></td>
				</tr>
			</tbody>
		</table>

	</form>
</div>