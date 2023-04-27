<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
	<head>
		<meta charset="utf-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<title>Moje hobby</title>
		<link rel="Stylesheet" href="static/Style.css" />
		<link href="https://code.jquery.com/ui/1.10.4/themes/ui-lightness/jquery-ui.css" rel="stylesheet">
		<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
		<script src="https://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>
		<script src="static/main.js"></script>
		<script src="static/jquery-main.js"></script>
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
					<li>
						<a class="hover" href="ksiazki">Czytanie książek</a>
						<ul>
							<li><a class="hover" href="fantastyczne">Książki fantastyczne</a></li>
							<li><a class="hover" href="przygodowe">Książki przygodowe</a></li>
						</ul>
					</li>
					<li><a class="hover" href="galeria">Galeria</a></li>
				</ul>
				<img class="ksiazkimenu1_ankiety" alt="ksiazki" src="static/Obrazy/ksiazkimenu1.jpg" />
				<img class="rowermenu1_ankiety" alt="rower" src="static/Obrazy/rowermenu1.jpg" />
				<img class="ksiazkimenu_ankiety" alt="ksiazki" src="static/Obrazy/ksiazkimenu.jpg" />
				<img class="rowermenu_ankiety" alt="rower" src="static/Obrazy/rowermenu.jpg" />
			</div>
			<div id="tresc">
				<p class="underlined">Wyniki ankiet przeprowadzonych wśród moich znajomych</p>
				<p class="italic">Ankieta dotycząca kolarstwa</p>
				<table style="margin-left:20px; margin-right:20px">
					<tr>
						<th>Pytanie</th>
						<th colspan="3" class="width">Lubisz jeździć na rowerze?</th>
						<th colspan="3" class="width">Wolisz jeździć samemu/samą czy w towarzystwie?</th>
						<th colspan="3" class="width">Ile godzin dziennie jeździsz na rowerze?</th>
					</tr>
					<tr>
						<td rowspan="5">Odpowiedzi</td>
						<td>odpowiedź</td>
						<td>ilość</td>
						<td>procent</td>
						<td>odpowiedź</td>
						<td>ilość</td>
						<td>procent</td>
						<td>odpowiedź</td>
						<td>ilość</td>
						<td>procent</td>
					</tr>
					<tr>
						<td rowspan="2">Tak</td>
						<td rowspan="2">13</td>
						<td rowspan="2">86,7%</td>
						<td rowspan="2">Samemu/Samą</td>
						<td rowspan="2">5</td>
						<td rowspan="2">33,3%</td>
						<td>0</td>
						<td>2</td>
						<td>13,3%</td>
					</tr>
					<tr>
						<td>1-4</td>
						<td>8</td>
						<td>53,3%</td>
					</tr>
					<tr>
						<td rowspan="2">Nie</td>
						<td rowspan="2">2</td>
						<td rowspan="2">13,3%</td>
						<td rowspan="2">W towarzystwie</td>
						<td rowspan="2">10</td>
						<td rowspan="2">66,7%</td>
						<td>5-8</td>
						<td>4</td>
						<td>26,7%</td>
					</tr>
					<tr>
						<td>9+</td>
						<td>1</td>
						<td>6,7%</td>
					</tr>
				</table>
				<p class="italic">Ankieta dotycząca książek</p>
				<table style="margin-left:20px; margin-right:20px">
					<tr>
						<th>Pytanie</th>
						<th colspan="3" class="width1">Lubisz czytać książki?</th>
						<th colspan="3" class="width1">Wolisz książki czy filmy?</th>
						<th colspan="3" class="width2">Jakie gatunki powieści lubisz najbardziej?</th>
					</tr>
					<tr>
						<td rowspan="9">Odpowiedzi</td>
						<td>odpowiedź</td>
						<td>ilość</td>
						<td>procent</td>
						<td>odpowiedź</td>
						<td>ilość</td>
						<td>procent</td>
						<td>odpowiedź</td>
						<td>ilość</td>
						<td>procent</td>
					</tr>
					<tr>
						<td rowspan="4">Tak</td>
						<td rowspan="4">12</td>
						<td rowspan="4">80%</td>
						<td rowspan="4">Książki</td>
						<td rowspan="4">13</td>
						<td rowspan="4">86,7%</td>
						<td>Fantastyczna</td>
						<td>10</td>
						<td>23,8%</td>
					</tr>
					<tr>
						<td>Przygodowa</td>
						<td>12</td>
						<td>28,6%</td>
					</tr>
					<tr>
						<td>Kryminalna</td>
						<td>8</td>
						<td>19%</td>
					</tr>
					<tr>
						<td>Psychologiczna</td>
						<td>4</td>
						<td>9,5%</td>
					</tr>
					<tr>
						<td rowspan="4">Nie</td>
						<td rowspan="4">3</td>
						<td rowspan="4">20%</td>
						<td rowspan="4">Filmy</td>
						<td rowspan="4">2</td>
						<td rowspan="4">13,3%</td>
						<td>Historyczna</td>
						<td>0</td>
						<td>0%</td>
					</tr>
					<tr>
						<td>Społeczno-obyczajowa</td>
						<td>1</td>
						<td>2,4%</td>
					</tr>
					<tr>
						<td>Sensacyjna</td>
						<td>3</td>
						<td>7,1%</td>
					</tr>
					<tr>
						<td>Inna</td>
						<td>4</td>
						<td>9,5%</td>
					</tr>
				</table>

				<p class="underlined"><a id="ankieta">Ankieta</a></p>
				<p class="italic">W celu dokładniejszej analizy stosunku ludzi do jazdy na rowerze i czytania książek, bardzo proszę o wypełnienie poniższej ankiety.</p>
				<form action="mailto:patryk.pardej@gmail.com?subject=Ankieta%20nt.%20jazdy%20na%20rowerze" enctype="text/plain" method="post">
					<label>Imię: <input name="imie" /></label>
					<label>Nazwisko: <input name="nazwisko" /></label>
					<label>E-mail: <input name="e-mail" /></label>
					<label>Data urodzenia: <input name="urodziny" type="text" id="datepicker"></label>
					<p class="static">
						<label for="mark">W skali 0-10, jak podobają Ci się wygląd i treść tej strony internetowej?</label>
						<input name="ocena" type="text" id="mark"
							   style="border:0; color:black; font-weight:bold; font-size:20px;">
					</p>
					<div id="slider"></div>
					<p class="static">Lubisz jeździć na rowerze?</p>
					<input type="radio" name="czy lubisz jezdzic na rowerze" value="tak" />Tak<br />
					<input type="radio" name="czy lubisz jezdzic na rowerze" value="nie" />Nie<br />
					<p class="static">Wolisz jeździć samemu/samą czy w towarzystwie?</p>
					<input type="radio" name="samemu czy w towarzystwie" value="samemu/samą" />Samemu/samą<br />
					<input type="radio" name="samemu czy w towarzystwie" value="w towarzystwie" />W towarzystwie<br />
					<p class="static">Ile godzin dziennie poświęcasz na jazdę na rowerze w ciepłe dni?</p>
					<select name="ilosc godzin dziennie na rowerze">
						<option>0</option>
						<option>1-4</option>
						<option>5-8</option>
						<option>9 i więcej</option>
					</select>
					<p class="static">Lubisz czytać książki?</p>
					<input type="radio" name="czy lubisz czytac ksiazki" value="tak" />Tak<br />
					<input type="radio" name="czy lubisz czytac ksiazki" value="nie" />Nie<br />
					<p class="static">Wolisz książki czy filmy?</p>
					<input type="radio" name="ksiazki czy filmy" value="książki" />Książki<br />
					<input type="radio" name="ksiazki czy filmy" value="filmy" />Filmy<br />
					<p class="static">Jakie gatunki powieści lubisz najbardziej? Możesz zaznaczyć kilka odpowiedzi.</p>
					<input type="checkbox" name="ulubione gatunki" value="fantastyczna" />Fantastyczna<br />
					<input type="checkbox" name="ulubione gatunki" value="przygodowa" />Przygodowa<br />
					<input type="checkbox" name="ulubione gatunki" value="kryminalna" />Kryminalna<br />
					<input type="checkbox" name="ulubione gatunki" value="psychologiczna" />Psychologiczna<br />
					<input type="checkbox" name="ulubione gatunki" value="historyczna" />Historyczna<br />
					<input type="checkbox" name="ulubione gatunki" value="społeczno-obyczajowa" />Społeczno-obyczajowa<br />
					<input type="checkbox" name="ulubione gatunki" value="sensacyjna" />Sensacyjna<br />
					<input type="checkbox" name="ulubione gatunki" value="inna" />inna: <input type="text" name="gatunki" /><br /><br />
					<textarea name="wiadomosc">Masz jakieś ciekawe historie lub uwagi, związane z kolarstwem lub książkami? Możesz się nimi podzielić tutaj!</textarea><br />
					<input id="opener" type="submit" value="Wyślij" /> <input type="reset" value="Czyść" />
				</form>
				<div id="dialog" title="Wielkie dzięki!" style="font-size:20px;">Dziękuję za wypełnienie ankiety!</div>
				<p><a href="ankiety">Powrót na górę strony.</a></p>
				<p><a href="#ankieta">Powrót do początku ankiety.</a></p><br />
				<p>W razie jakichkolwiek pytań lub w celu rozmowy proszę pisać na adres e-mail: patryk.pardej@gmail.com. <a href="mailto:patryk.pardej@gmail.com">Wyślij maila</a></p>
			</div>
			<div id="stopka">
				<br />
				<h2 class="totheright">Strona autorstwa Patryka Pardej</h2>
			</div>
		</div>
	</body>
</html>