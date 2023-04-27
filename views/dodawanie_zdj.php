<?php

require_once '../business.php';

$image = [
	'name' => null,
    'title' => null,
    'author' => null,
	'access' => null,
	'checked' => null,
	'userid' => null,
    '_id' => null
];

if (file_exists($_SERVER['DOCUMENT_ROOT'].'/images/'.$_SESSION['file_ex']))
{
	if ($_SERVER['REQUEST_METHOD'] === 'POST') 
	{
		if (!empty($_POST['title']) &&
			!empty($_POST['author']))
		{
			if (isset($_SESSION['user_id']))
			{
				if ($_POST['access'] === 'prywatne')
				{
					$image = [
						'name' => $_FILES['image']['name'],
						'title' => $_POST['title'],
						'author' => $_POST['author'],
						'access' => $_POST['access'],
						'userid' => $_SESSION['user_id']
					];
				}
				else
				{
					$image = [
						'name' => $_FILES['image']['name'],
						'title' => $_POST['title'],
						'author' => $_POST['author'],
						'access' => $_POST['access'],
						'userid' => 0
					];
				}
			}
			else
			{
				$image = [
					'name' => $_FILES['image']['name'],
					'title' => $_POST['title'],
					'author' => $_POST['author'],
					'access' => 'publiczne',
					'userid' => 0
				];
			}

			if (empty($_POST['id'])) 
			{
				insert_image($image);
			}
			else 
			{
				$id = $_POST['id'];
				update_image($id, $image);
			}

			exit;
		}

	} 
	else 
	{
		if (!empty($_GET['id'])) 
		{
			$id = $_GET['id'];
			$image = find_image($id);
		}
	}
}

?>
