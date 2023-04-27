<?php

$folder_path_th = './images/thumbnails/';
$folder_path_wm = './images/watermarked/';

if (!isset($_SESSION['user_id']))
{
	require 'galeria_glowna_niezalog.php';
}
else
{
	require 'galeria_glowna_zalogow.php';
}
?>