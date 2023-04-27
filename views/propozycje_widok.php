<?php

$q = $_REQUEST["q"];

if (count_img() !== 0)
{
	if ($q !== "") 
	{
		$q = strtolower($q);
		$len=strlen($q);
		foreach($img_distinct as $name) 
		{
			if (stristr($q, substr($name, 0, $len))) 
			{
				if (!isset($_SESSION['user_id']))
				{	
					$search = ['title' => $name, 'userid' => 0,];
					$img_searched = searched_img($search);
					foreach ($img_searched as $searched)
					{
						if ($searched['name'] !== null)
						{
							?><a href="<?php echo $folder_path_wm.$searched['name']; ?>"><img style="margin-top:50px; margin-left:95px;" src="<?php echo $folder_path_th.$searched['name']; ?>"/></a>
							<p style="font-size:11px; display:inline; position:absolute; margin-top:140px; margin-left:-80px;">Tytuł: <?= $searched['title'] ?></p>
							<p style="font-size:11px; display:inline; position:absolute; margin-top:155px; margin-left:-80px;">Autor: <?= $searched['author'] ?></p><?php
							if ($searched['access'] === 'prywatne')
							{
								?><p style="font-size:11px; font-style:italic; font-weight:bold; display:inline; position:absolute; margin-top:170px; margin-left:-80px;">prywatne</p><?php
							}
							$hint = 1;
						}
					}
				}
				else
				{
					$search = ['title' => $name, '$or' => [['userid' => $_SESSION['user_id']], ['userid' => 0],],];
					$img_searched = searched_img($search);
					foreach ($img_searched as $searched)
					{
						if ($searched['name'] !== null)
						{
							?><a href="<?php echo $folder_path_wm.$searched['name']; ?>"><img style="margin-top:50px; margin-left:95px;" src="<?php echo $folder_path_th.$searched['name']; ?>"/></a>
							<p style="font-size:11px; display:inline; position:absolute; margin-top:140px; margin-left:-80px;">Tytuł: <?= $searched['title'] ?></p>
							<p style="font-size:11px; display:inline; position:absolute; margin-top:155px; margin-left:-80px;">Autor: <?= $searched['author'] ?></p><?php
							if ($searched['access'] === 'prywatne')
							{
								?><p style="font-size:11px; font-style:italic; font-weight:bold; display:inline; position:absolute; margin-top:170px; margin-left:-80px;">prywatne</p><?php
							}
							$hint = 1;
						}
					}
				}
			}
		}
	}
}

if ($hint === 0)
{
	?><p style="font-size:15px; display:inline;">Brak pasujących obrazów.</p><?php
}

?>