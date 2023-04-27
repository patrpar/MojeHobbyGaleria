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
				<p class="main">WYSZUKIWARKA ZDJĘĆ Z GALERII</p>
				<a href="galeria" style="margin-left:20px;">Powrót do galerii</a><br />
				<?php
				require_once 'dodawanie_zdj.php';
				if (isset($_SESSION['user_id']))
				{
					?>
					<p style="margin:unset; position:absolute; right:70px; top:35px;">Zalogowano jako: <?= $_SESSION['user_login'] ?></p>
					<?php
				}
				?>
				<p style="display:inline; margin-right:unset;">Podaj tytuł zdjęcia, które chcesz wyszukać: </p><input id="search" name="search" type="text" onkeyup="showHint(this.value);" style="margin-top:20px;"/><br /><br />
				<p>Propozycje:</p>
				<span id="imgHint"></span>
				<script>
				function showHint(str) {
					if (str.length == 0) { 
						document.getElementById("imgHint").innerHTML = "";
						return;
					} else {
						var xmlhttp = new XMLHttpRequest();
						xmlhttp.onreadystatechange = function() {
							if (this.readyState == 4 && this.status == 200) {
								document.getElementById("imgHint").innerHTML = this.responseText;
							}
						}	
					xmlhttp.open("GET", "propozycje?q=" + str, true);
					xmlhttp.send();
					}
				}
				</script>
			</div>
			<div id="stopka">
				<br />
				<h2 class="totheright">Strona autorstwa Patryka Pardeja</h2>
			</div>
		</div>
	</body>
</html>