<!DOCTYPE html>

<html lang="pl">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Moje hobby</title>
		<link rel="Stylesheet" href="static/Style.css" />
		<link href="static/jquery-ui.css" rel="stylesheet">
		<script src="static/jquery-3.1.1.js"></script>
		<script src="static/jquery-ui.js"></script>
		<script src="static/main.js"></script>
	</head>
	<body class="background">
		<div id="podzial">
			<div id="naglowek">
				<img class="rower" alt="rower" title="Jazda na rowerze" src="static/Obrazy/rower.jpg" />
				<img class="ksiazki" alt="ksiazki" title="Czytanie książek" src="static/Obrazy/ksiazki.jpg" />
				<h1 class="underlined">MOJE HOBBY</h1>
				<h1 class="decorated">Kolarstwo/książki</h1>
			</div>
			<div id="menu">
				<h1 class="small">Menu</h1>
				<ul id="dance">
					<li><a class="hover" href="start">Strona główna</a></li>
					<li><a class="hover" href="rowery">Jazda na rowerze</a></li>
					<li><a class="hover" href="ksiazki">Czytanie książek</a>
						<ul>
							<li><a class="hover" href="fantastyczne">Książki fantastyczne</a></li>
							<li><a class="hover" href="przygodowe">Książki przygodowe</a></li>
						</ul>
					</li>
					<li><a class="hover" href="ankiety">Ankiety</a></li>
				</ul>
				<img class="ksiazkimenu1_rowery" alt="ksiazki" src="static/Obrazy/ksiazkimenu1.jpg" />
				<img class="rowermenu1_rowery" alt="rower" src="static/Obrazy/rowermenu1.jpg" />
				<img class="ksiazkimenu_rowery" alt="ksiazki" src="static/Obrazy/ksiazkimenu.jpg" />
				<img class="rowermenu_rowery" alt="rower" src="static/Obrazy/rowermenu.jpg" />
			</div>
			<div id="tresc">

				<p class="main">GALERIA ZDJĘĆ</p>
				<?php
				if (!isset($_SESSION['user_id']))
				{
					?>
					<p style="position:absolute; right:100px; top:15px;">LOGOWANIE</p>
					<form method="post" enctype="multipart/form-data" style="margin-top:10px; position:absolute; right:0px;">
						<p style="display:inline; margin:unset;">Login: </p><input type="text" name="login" style="margin-bottom:5px; margin-left:53px;"/><br />
						<p style="display:inline; margin:unset;">Hasło: </p><input type="password" name="password" style="margin-bottom:5px; margin-left:54px;"/><br />
						<input type="submit" value="Zaloguj się"/>
					</form>
					<?php
					if (isset($_POST['login']) || isset($_POST['password']))
					{
						if(!empty($_POST['login']) && !empty($_POST['password']))
						{
							$login = $_POST['login'];
							$password = $_POST['password'];
							$user = find_user_by_login($login);
							if($user !== null)
							{
								if (!password_verify($password, $user['password']))
								{
									?><p style="margin:unset; font-size:12px; color:red; position:absolute; right:130px; top:130px;">Błędne hasło!</p><a href="galeria" style="font-size:12px; position:absolute; right:107px; top:130px;">OK</a><?php
								}
							}
							else
							{
								?><p style="margin:unset; font-size:12px; color:red; position:absolute; right:56px; top:130px;">Taki użytkownik nie istnieje!</p><a href="galeria" style="font-size:12px; position:absolute; right:33px; top:130px;">OK</a><?php
							}
						}
						else
						{
							?><p style="margin:unset; font-size:12px; color:red; position:absolute; right:23px; top:130px;">Pole login/hasło nie może być puste!</p><a href="galeria" style="font-size:12px; position:absolute; right:3px; top:130px;">OK</a><?php
						}
					}
					?>
					<p style="position:absolute; right:60px; top:150px;">Nie masz konta? <a href="rejestracja">Zarejestruj się!</a></p>
					<?php
				}
				else
				{
					?>
					<p style="margin:unset; position:absolute; right:160px; top:35px;">Zalogowano jako: <?= $_SESSION['user_login'] ?></p>
					<a href="wylogowanie" style="position:absolute; right:50px; top:35px;">[ Wyloguj się ]</a>
					<a href="galeria_uzytkownika" style="position:absolute; right:150px; top:65px;">Moja galeria</a><?php
				}
				?>
				<a href="wyszukiwarka" style="margin-left:20px;">Wyszukiwarka zdjęć</a>
				<?php
				if (isset($_FILES['image']))
				{
					if (!empty($_POST['watermark']) && !empty($_POST['title']) && !empty($_POST['author']))
					{
						$allowed_types = ['image/jpeg', 'image/jpg', 'image/png'];
						$max_rozmiar = 1024*1024;
						if (is_uploaded_file($_FILES['image']['tmp_name']))
						{
							if ($_FILES['image']['size'] > $max_rozmiar)
							{
								?><p style="position:absolute; top:300px; left:25%;"><span style="color:red; font-weight:bold; position:middle;">Błąd! </span>Plik jest za duży. Maksymalny rozmiar pliku to 1 MB.<a href="galeria" style="margin-left:5px;">OK</a></p><?php
								if (!in_array($_FILES['image']['type'], $allowed_types))
								{ 
									?><p style="position:absolute; top:320px; left:25%;"><span style="color:red; font-weight:bold; position:middle;">Błąd! </span>Niepoprawny typ pliku. Dozwolone są wyłącznie pliki typu jpg/png.</p><?php
								}
							}
							else
							{
								if (!in_array($_FILES['image']['type'], $allowed_types))
								{ 
									?><p style="position:absolute; top:300px; left:25%;"><span style="color:red; font-weight:bold; position:middle;">Błąd! </span>Niepoprawny typ pliku. Dozwolone są wyłącznie pliki typu jpg/png. <a href="galeria" style="margin-left:5px;">OK</a></p><?php
								}
							}
						} 
						else
						{
							?><p style="position:absolute; top:300px; left:30%;"><span style="color:red; font-weight:bold; position:middle;">Błąd! </span>Błąd przy przesyłaniu danych. <a href="galeria" style="margin-left:5px;">OK</a></p><?php
						}
					}
					else
					{
						?><p style="position:absolute; top:300px; left:30%;"><span style="color:red; font-weight:bold;">Błąd! </span>Żadne z pól nie może być puste. <a href="galeria" style="margin-left:5px;">OK</a></p><?php
					}
					$_SESSION['file_ex'] = $_FILES['image']['name'];
				}
				else
				{
					$_SESSION['file_ex'] = 0;
				}
				require_once 'dodawanie_zdj.php';
				?>
				<p>Prześlij swoje zdjęcie na serwer.</p>
				<p style="font-style:italic; font-size:13px; margin-top:-5px;">Wymagany typ pliku: <span style="font-weight:bold; font-style:normal;">jpg/png</span>.<br /> Maksymalny rozmiar pliku: <span style="font-weight:bold; font-style:normal;">1MB</span>.<br />Wszystkie pola w formularzu są obowiązkowe.</p><br>
				<form method="post" enctype="multipart/form-data" style="margin-left:20px;">
					<input type="file" name="image"/><br/><p style="margin-top:3px; margin-left:0px;" />
					<label>Znak wodny: <input name="watermark" size="17"/> </label><br/><p style="margin-top:-12px; margin-left:0px;" />
					<label>Tytuł: <input name="title" size="17"/> </label><p style="margin-top:-12px; margin-left:0px;" />
					<?php if (!isset($_SESSION['user_id']))
					{
						?><label>Autor: <input name="author" size="17"/> </label><p style="margin-top:-12px; margin-left:0px;" /><?php
					}
					else
					{
						?><label>Autor: <input name="author" value="<?=$_SESSION['user_login']?>" size="17"/> </label>
						<label><input type="radio" name="access" value="publiczne" style="margin-left:15px;" checked/>Publiczne</label>
						<label><input type="radio" name="access" value="prywatne"/>Prywatne</label><p style="margin-top:-12px; margin-left:0px;" /><?php
					}
					?><input type="hidden" name="id" value="<?= $image['_id'] ?>">
					<input type="submit" value="Wyślij"/>
				</form>
				<?php
				include 'galeria_glowna.php';
				?>
			</div>
			<div id="stopka">
				<br />
				<h2 class="totheright">Strona autorstwa Patryka Pardeja</h2>
			</div>
		</div>
	</body>
</html>
