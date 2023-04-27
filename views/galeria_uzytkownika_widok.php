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
				<p class="main">MOJA GALERIA</p>
				<a href="galeria" style="position:absolute; right:145px; top:65px;">Galeria główna</a><br />
				<?php
				if (isset($_SESSION['user_id']))
				{
					?>
					<p style="margin:unset; position:absolute; right:160px; top:35px;">Zalogowano jako: <?= $_SESSION['user_login'] ?></p>
					<a href="wylogowanie" style="position:absolute; right:50px; top:35px;">[ Wyloguj się ]</a><?php
				}
				
				foreach ($user_gal_img as $image)
				{
					if($image['checked'] !== null)
					{
						$file_path_th = $folder_path_th.$image['name'];
						$file_path_wm = $folder_path_wm.$image['name'];
						?><a href="<?php echo $file_path_wm; ?>"><img style="margin-top:60px; margin-left:95px;" src="<?php echo $file_path_th; ?>"/></a>
						<p style="font-size:11px; display:inline; position:absolute; margin-top:150px; margin-left:-80px;">Tytuł: <?= $image['title'] ?></p>
						<p style="font-size:11px; display:inline; position:absolute; margin-top:165px; margin-left:-80px;">Autor: <?= $image['author'] ?></p>
						<?php
						if ($image['access'] === 'prywatne')
						{
							?><p style="font-size:11px; font-style:italic; font-weight:bold; display:inline; position:absolute; margin-top:180px; margin-left:-80px;">prywatne</p><?php
						}?>
						<form method="post" style="display:inline; margin:unset;"><input type="checkbox" name="usun[]" value="<?= $image['_id'] ?>"/>
						<?php
					}
				}
				if ($images->count() !== 0)
				{?>
					<br><input type="submit" name="submit" value="Usuń zaznaczone z mojej galerii" style="margin-left:50px; margin-top:70px;"/></form>
				<?php
				}
				else
				{
					?><p>Brak wybranych zdjęć.</p><?php
				}?>
			</div>
			<div id="stopka">
				<br />
				<h2 class="totheright">Strona autorstwa Patryka Pardeja</h2>
			</div>
		</div>
	</body>
</html>
