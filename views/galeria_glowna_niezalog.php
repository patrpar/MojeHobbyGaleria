<?php
$public_img = find_public_img();
?><br><?php
foreach ($public_img as $image)
{
	if ($image['userid'] === 0)
	{
		$file_path_th = $folder_path_th.$image['name'];
		$file_path_wm = $folder_path_wm.$image['name'];
		?>
		<div class="gallery" style="width:60px;height:140px;margin-left:70px;margin-bottom:10px;margin-top:20px;">
			<div><a href="<?php echo $file_path_wm; ?>"><img src="<?php echo $file_path_th; ?>"/></a></div>
			<div style="width:90px;margin-left:-10px;font-size:11px;">Tytuł: <?= $image['title'] ?></div>
			<div style="width:90px;margin-left:-10px;font-size:11px;">Autor: <?= $image['author'] ?></div>
			<div><a href="usuwanie_zdj?id=<?= $image['_id'] ?>" style="font-size:10px;margin-left:11px">Usuń</a></div>
		</div>
		
		<?php
	}
}
?>