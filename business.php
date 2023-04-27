<?php

function get_db()
{
    $mongo = new MongoClient(
        "mongodb://localhost:27017/",
        [
            'username' => 'wai_web',
            'password' => 'w@i_w3b',
            'db' => 'wai',
        ]);

    $db = $mongo->wai;

    return $db;
}

function find_user_by_login($login)
{
	$db = get_db();
	$user = $db->users->findOne(['login' => $login]);
	return $user;
}

function find_user_by_email($email)
{
	$db = get_db();
	$user = $db->users->findOne(['email' => $email]);
	return $user;
}

function find_users()
{
	$db = get_db();
	$users = $db->users->find();
	return $users;
}

function remove_users()
{
	$db = get_db();
	$users = $db->users->find();
	return $db->users->remove();
}

function get_image()
{
	$db = get_db();
	$images = $db->images->find();
	return $images;
}

function insert_image($image)
{
	$db = get_db();
	return $db->images->insert($image);
}

function insert_user($user)
{
	$db = get_db();
	return $db->users->insert($user);
}

function find_image($id)
{
	$db = get_db();
	$image = $db->images->findOne(['_id' => new MongoId($id)]);
	return $image;
}

function update_image($id, $image)
{
	$db = get_db();
	return $db->images->update(['_id' => new MongoId($id)], $image);
}

function remove_image($id)
{
	$db = get_db();
	return $db->images->remove(['_id' => new MongoId($id)]);
}

function find_public_img()
{
	$db = get_db();
	$public_img = $db->images->find(['userid' => 0]);
	return $public_img;
}

function find_private_img()
{
	$db = get_db();
	$priv_img = $db->images->find(['$or' => [['userid' => $_SESSION['user_id']], ['userid' => 0],]]);
	return $priv_img;
}

function find_user_img($user_gal)
{
	$db = get_db();
	$user_gal_img = $db->images->find($user_gal);
	return $user_gal_img;
}

function find_checked_img($checked_img)
{
	$db = get_db();
	$images = $db->images->find($checked_img);
	return $images;
}
function checkbox()
{
	$db = get_db();
	$images = get_image();
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{

		if (isset($_POST['wybor']))
		{
			foreach ($images as $image)
			{	
				$db->images->update(['checked' => $_SESSION['user_id']], ['$pull' => ['checked' => $_SESSION['user_id']]]);
			}
			foreach($_POST['wybor'] as $value)
			{
				$query = ['_id' => new MongoId($value)];
				$new_value = ['checked' => $_SESSION['user_id']];
				$db->images->update($query, ['$addToSet' => $new_value]);
			}
		}
	}
}

function checkbox_del()
{
	$db = get_db();
	get_image();
	if ($_SERVER['REQUEST_METHOD'] === 'POST')
	{
		if (isset($_POST['usun']))
		{
			foreach($_POST['usun'] as $value)
			{
				$query = ['_id' => new MongoId($value)];
				$new_value = ['checked' => $_SESSION['user_id']];
				$db->images->update($query, ['$pull' => $new_value]);
			}
		}
	}
}

function distinct_images()
{
	$db = get_db();
	$img_distinct = $db->images->distinct('title');
	return $img_distinct;
}

function searched_img($search)
{
	$db = get_db();
	$img_searched = $db->images->find($search);
	return $img_searched;
}

function count_img()
{
	$images = get_image();
	return $images->count();
}

?>