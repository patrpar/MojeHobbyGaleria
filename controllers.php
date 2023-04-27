<?php
require_once 'business.php';


function galeria(&$model)
{
	if (isset($_FILES['image']))
	{
		if (!empty($_POST['watermark']) && !empty($_POST['title']) && !empty($_POST['author']))
		{
			$allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
			if (is_uploaded_file($_FILES['image']['tmp_name']))
			{
				if ($_FILES['image']['size'] <= 1024*1024)
				{
					if (in_array($_FILES['image']['type'], $allowed_types))
					{
						move_uploaded_file($_FILES['image']['tmp_name'], $_SERVER['DOCUMENT_ROOT'].'/images/'.$_FILES['image']['name']);
						if (in_array($_FILES['image']['type'], ['image/png']))
						{
							$main_img = $_FILES['image']['name'];
							$img = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							$textcolor = imagecolorallocate($img, 188, 187, 179);
							$watermark_text = $_POST['watermark'];
							$font_file = 'static/arial.ttf';
							list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							if ($height >= $width)
							{
								$font_size = $height/35;
							}
							else
							{
								$font_size = $width/35;
							}
							imagettftext($img, $font_size, 0, 60, 80, $textcolor, $font_file, $watermark_text);
							imagepng($img, './images/watermarked/'.$main_img);
						}
						if (in_array($_FILES['image']['type'], ['image/jpeg', 'image/jpg']))
						{
							$main_img = $_FILES['image']['name'];
							$img = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							$textcolor = imagecolorallocate($img, 188, 187, 179);
							$watermark_text = $_POST['watermark'];
							$font_file = 'static/arial.ttf';
							list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							if ($height >= $width)
							{
								$font_size = $height/35;
							}
							else
							{
								$font_size = $width/35;
							}
							imagettftext($img, $font_size, 0, 60, 80, $textcolor, $font_file, $watermark_text);
							imagejpeg($img, './images/watermarked/'.$main_img);
						}
						if (in_array($_FILES['image']['type'], ['image/png']))
						{
							$main_img = $_FILES['image']['name'];
							$img = imagecreatefrompng($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							if ($height >= $width)
							{
								$new_height = 80;
								$new_width = $width/($height/$new_height);
							}
							else
							{
								$new_width = 80;
								$new_height = $height/($width/$new_width);
							}
							$thumbnail_image = imagecreatetruecolor($new_width, $new_height);
							imagecopyresampled($thumbnail_image, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
							imagepng($thumbnail_image, './images/thumbnails/'.$main_img);
						}
						if (in_array($_FILES['image']['type'], ['image/jpeg', 'image/jpg']))
						{
							$main_img = $_FILES['image']['name'];
							$img = imagecreatefromjpeg($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							list($width, $height) = getimagesize($_SERVER['DOCUMENT_ROOT'].'/images/'.$main_img);
							if ($height >= $width)
							{
								$new_height = 80;
								$new_width = $width/($height/$new_height);
							}
							else
							{
								$new_width = 80;
								$new_height = $height/($width/$new_width);
							}
							$thumbnail_image = imagecreatetruecolor($new_width, $new_height);
							imagecopyresampled($thumbnail_image, $img, 0, 0, 0, 0, $new_width, $new_height, $width, $height);
							imagejpeg($thumbnail_image, './images/thumbnails/'.$main_img);
						}
						header('Location: galeria');
					}
				}
			} 
		}
	}
	
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if(!empty($_POST['login']) && !empty($_POST['password']))
		{
			$login = $_POST['login'];
			$password = $_POST['password'];
			$user = find_user_by_login($login);
			$model['user'] = $user;
			if($user !== null)
			{
				if (password_verify($password, $user['password']))
				{
					session_regenerate_id();
					$_SESSION['user_id'] = $user['_id'];
					$_SESSION['user_login'] = $user['login'];
					return 'redirect:galeria';
					exit;
				}
			}
		}
	}
	
	return 'galeria_widok';
}

function start()
{
	return 'start';
}

function rowery()
{
	return 'rowery';
}

function ksiazki()
{
	return 'ksiazki';
}

function fantastyczne()
{
	return 'fantastyczne';
}

function przygodowe()
{
	return 'przygodowe';
}

function ankiety()
{
	return 'ankiety';
}

function rejestracja(&$model)
{
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if(!empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password_repeat']))
		{
			$email = $_POST['email'];
			$model['email'] = $email;
			$login = $_POST['login'];
			$model['login'] = $login;
			$password = $_POST['password'];
			$model['password'] = $password;
			$password_repeat = $_POST['password_repeat'];
			$model['password_repeat'] = $password_repeat;

			$user_email = find_user_by_email($email);
			$model['user_email'] = $user_email;
			$user_login = find_user_by_login($login);
			$model['user_login'] = $user_login;
			if ($user_email === null)
			{
				if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
				{
					if ($user_login === null)
					{
						if ($password === $password_repeat)
						{
							$hash = password_hash($password, PASSWORD_DEFAULT);
							insert_user([
								'email' => $email,
								'login' => $login,
								'password' => $hash]);
						}
					}
				}
			}
		}
	}
	return 'rejestracja_widok';
}

function wylogowanie()
{
	session_destroy();
	return 'redirect:galeria';
}

function usuwanie_zdj()
{
	$id = $_GET['id'];
	remove_image($id);
	return 'redirect:galeria';
}

function galeria_uzytkownika(&$model)
{
	$folder_path_th = './images/thumbnails/';
	$model['folder_path_th'] = $folder_path_th;
	$folder_path_wm = './images/watermarked/';
	$model['folder_path_wm'] = $folder_path_wm;
	$user_gal = ['checked' => $_SESSION['user_id'], '$or' => [['userid' => $_SESSION['user_id']], ['userid' => 0],],];
	$user_gal_img = find_user_img($user_gal);
	$model['user_gal_img'] = $user_gal_img;
	$checked_img = ['checked' => $_SESSION['user_id']];
	$images = find_checked_img($checked_img);
	$model['images'] = $images;
	checkbox_del();
	return 'galeria_uzytkownika_widok';
}

function wyszukiwarka()
{
	return 'wyszukiwarka_widok';
}

function propozycje(&$model)
{
	$images = get_image();
	$img_distinct = distinct_images();
	$model['images'] = $images;
	$model['img_distinct'] = $img_distinct;
	$folder_path_th = './images/thumbnails/';
	$model['folder_path_th'] = $folder_path_th;
	$folder_path_wm = './images/watermarked/';
	$model['folder_path_wm'] = $folder_path_wm;
	$hint = 0;
	$model['hint'] = $hint;
	return 'propozycje_widok';
}

?>
