<?php
checkbox();
$priv_img = find_private_img();
?><br><?php
foreach ($priv_img as $image)
{
	$file_path_th = $folder_path_th.$image['name'];
	$file_path_wm = $folder_path_wm.$image['name'];
	?>
	<div class="gallery" style="width:60px;height:140px;margin-left:70px;margin-top:20px;margin-bottom:10px;">
		<div><a href="<?php echo $file_path_wm; ?>"><img src="<?php echo $file_path_th; ?>"/></a></div>
		<div style="width:90px;margin-left:-10px;font-size:11px;">Tytuł: <?= $image['title'] ?></div>
		<div style="width:90px;margin-left:-10px;font-size:11px;">Autor: <?= $image['author'] ?></div>
		<div style="width:90px;margin-left:-10px;font-size:11px;font-style:italic; font-weight:bold; "><?php
			if ($image['access'] === 'prywatne')
			{
				?>prywatne
				<?php
			}?></div>
		<div><form method="post" style="display:inline; margin:unset;"><input type="checkbox" name="wybor[]" value="<?= $image['_id'] ?>"
		<?php
		if(isset($image['checked']))
		{
			$i = 0;
			while(true)
			{
				if (empty($image['checked'][$i]))
				{
					break;
				}
				if ($image['checked'][$i] == $_SESSION['user_id'])
				{
					echo 'checked';
					break;
				} else {
					$i++;
				}
			}
		}?>/><a href="usuwanie_zdj?id=<?= $image['_id'] ?>" style="font-size:10px;margin-left:10px">Usuń</a></div>
	</div>
	
	<?php
}
if ($image['name'] !== null)
{?>
	<input type="submit" name="submit" value="Zapisz wybrane w mojej galerii" style="margin-left:50px; margin-top:70px;"/></form>
<?php
}
?>