<?php
/**
 * Default action
 */
?>

<br><a href="#" onclick="post_form('base_add', null);">
	<img align="absmiddle" src="<?= $icons_dir ?>add.png" alt="+"> Добавить
</a>

<br><br><table cellspacing="1" cellpadding="1" class="grid">

<thead>
	<tr>
		<td width="10%" class="gridHeader">#ID</td>
		<td width="70%" class="gridHeader">Название</td>
		<td width="10%" class="gridHeader">Редактировать</td>
		<td width="10%" class="gridHeader">Удалить</td>
	</tr>
</thead>
<tbody>

<?php
// List
$query = $modx->db->select('*', $mod_table[0]);

$i = 1;
while ($row = mysql_fetch_assoc($query))
{
	$td_class = ($i % 2 == 0) ? 'gridAltItem' : 'gridItem';
	$i++;

?>
	<tr>
	<td class="<?= $td_class ?>"><?= $row['id'] ?></td>
	<td class="<?= $td_class ?>"><?= $row['title'] ?></td>
	<td class="<?= $td_class ?>">
		<a href="#" onclick="post_form('base_edit', '<?= $row['id'] ?>');">
		<img align="middle" src="<?= $icons_dir ?>logging.gif" alt="Редактировать">
		</a>
	</td>
	<td class="<?= $td_class ?>">
		<a href="#" onclick="if(confirm('Удалить?'))post_form('base_delete', '<?= $row['id'] ?>');">
			<img align="middle" src="<?= $icons_dir ?>delete.png" alt="Удалить">
		</a>
	</td>
	</tr>
<?php

}
?>
</tbody>
</table>