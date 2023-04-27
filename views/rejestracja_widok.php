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
				<p class="main">REJESTRACJA</p>
				<a href="galeria" style="margin-left:20px;">Powrót do galerii.</a>
				<p style="font-style:italic;">Wszystkie pola są obowiązkowe.</p>
				<form method="post" enctype="multipart/form-data" style="margin-top:20px;">
					<p style="display:inline; margin:unset;">Adres e-mail: </p><input type="text" name="email" style="margin-bottom:5px; margin-left:8px;"/><br />
					<p style="display:inline; margin:unset;">Login: </p><input type="text" name="login" style="margin-bottom:5px; margin-left:53px;"/><br />
					<p style="display:inline; margin:unset;">Hasło: </p><input type="password" name="password" style="margin-bottom:5px; margin-left:54px;"/><br />
					<p style="display:inline; margin:unset;">Powtórz hasło: </p><input type="password" name="password_repeat" style="margin-bottom:5px;"/><br />
					<input type="submit" value="Zarejestruj się"/>
				</form>
				<?php

				if ($_SERVER['REQUEST_METHOD'] === 'POST')
				{
					if(!empty($_POST['email']) && !empty($_POST['login']) && !empty($_POST['password']) && !empty($_POST['password_repeat']))
					{
						if ($user_email === null)
						{
							if (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL))
							{
								if ($user_login === null)
								{
									if ($password === $password_repeat)
									{
										?><p style="margin:unset; font-size:17px; position:absolute; left:50px; top:300px;">Pomyślnie zarejestrowano!</p><a href="galeria" style="font-size:17px; position:absolute; left:240px; top:300px;">Zaloguj się.</a><?php
									}
									else
									{
										?><p style="margin:unset; font-size:12px; color:red; position:absolute; left:150px; top:270px;">Hasła nie zgadzają się.</p><a href="rejestracja" style="font-size:11px; position:absolute; left:265px; top:271px;">OK</a><?php
									}
								}
								else
								{
									?><p style="margin:unset; font-size:12px; color:red; position:absolute; left:150px; top:270px;">Użytkownik o podanym loginie już istnieje.</p><a href="rejestracja" style="font-size:11px; position:absolute; left:365px; top:271px;">OK</a><?php
								}
							}
							else
							{
								?><p style="margin:unset; font-size:12px; color:red; position:absolute; left:150px; top:270px;">Niepoprawny adres e-mail.</p><a href="rejestracja" style="font-size:11px; position:absolute; left:285px; top:271px;">OK</a><?php
							}
						}
						else
						{
							?><p style="margin:unset; font-size:12px; color:red; position:absolute; left:150px; top:270px;">Użytkownik o podanym adresie e-mail już istnieje.</p><a href="rejestracja" style="font-size:11px; position:absolute; left:400px; top:271px;">OK</a><?php
							if ($user_login !== null)
							{
								?><p style="margin:unset; font-size:12px; color:red; position:absolute; left:150px; top:290px;">Użytkownik o podanym loginie już istnieje.</p><?php
							}
						}
					}
					else
					{
						?><p style="margin:unset; font-size:12px; color:red; position:absolute; left:150px; top:270px;">Żadne z pól nie może być puste!</p><a href="rejestracja" style="font-size:11px; position:absolute; left:315px; top:271px;">OK</a><?php
					}
				}
				?>
			</div>
			<div id="stopka">
				<br />
				<h2 class="totheright">Strona autorstwa Patryka Pardeja</h2>
			</div>
		</div>
	</body>
</html>