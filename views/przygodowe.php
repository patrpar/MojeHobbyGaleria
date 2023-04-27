<!DOCTYPE html>

<html lang="pl" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Moje hobby</title>
    <link rel="Stylesheet" href="static/Style.css" />
    <link href="static/jquery-ui.css" rel="stylesheet">
    <script src="static/jquery-3.1.1.js"></script>
    <script src="static/jquery-ui.js"></script>
    <script src="static/main.js"></script>
</head>
<body onload="addElementPrzyg(); showElementColors()" class="background">
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
                <p class="list">Czytanie książek</p>
                <ul>
                    <li><a class="hover" href="fantastyczne">Książki fantastyczne</a></li>
                    <li><p class="list">Książki przygodowe</p></li>
                </ul>
            </li>
            <li><a class="hover" href="ankiety">Ankiety</a></li>
            <li><a class="hover" href="galeria">Galeria</a></li>
        </ul>
        <img class="ksiazkimenu1_ksiazki" alt="ksiazki" src="static/Obrazy/ksiazkimenu1.jpg" />
        <img class="rowermenu1_ksiazki" alt="rower" src="static/Obrazy/rowermenu1.jpg" />
        <img class="ksiazkimenu_ksiazki" alt="ksiazki" src="static/Obrazy/ksiazkimenu.jpg" />
        <img class="rowermenu_ksiazki" alt="rower" src="static/Obrazy/rowermenu.jpg" />
    </div>
    <div id="tresc">
        <p>Powrót do <a href="ksiazki">książek</a>.</p>
        <p class="main">KSIĄŻKI PRZYGODOWE</p>
        <p>Powieści przygodowe to drugie obok fantastycznych, którymi najbardziej się zachwycam. Ciekawe przygody bohaterów mogą być równie porywające i wciągające co elementy fantastyczne z fantastyki. Wśród moich ulubionych książek przygodowych znajdują się m.in. Igrzyska śmierci, Zwiadowcy (również fantastyczna) i Tunele.</p>
        <img class="gif middle" alt="przygodowe" title="Igrzyska śmierci/Zwiadowcy/Tunele" src="static/Obrazy/gifprzygodowe.gif" /><br />
            <div id="podpis" style="font-style:italic; font-size:12px; position:relative; left: 50%; transform: translateX(-50%); display: inline-block;"></div>
        <p class="italic">Moje ulubione książki przygodowe:</p>
        <table id="tabela" style="margin-left:20px; margin-right:20px;">
            <tr>
                <th id="th1" class="width color">Tytuł książki</th>
                <th id="th2" class="width color">Autor</th>
                <th id="th3" class="width color">Data wydania</th>
            </tr>
            <tr>
                <td id="td1" class="color">Igrzyska śmierci (seria)</td>
                <td>Suzanne Collins</td>
                <td>14.09.2008</td>
            </tr>
            <tr>
                <td id="td2" class="color">Zwiadowcy (seria)</td>
                <td>John Flanagan</td>
                <td>01.11.2004</td>
            </tr>
            <tr>
                <td id="td3" class="color">Tunele (seria)</td>
                <td>Roderick Gordon i Brian Williams</td>
                <td>02.07.2007</td>
            </tr>
        </table>
        <br /><br /><br />
		<div id="colors" style="visibility:hidden">
			<h2 style="position:absolute; bottom:25px; left:20px;">Wybierz kolor pierwszego wiersza:</h2>
			<h2 style="position:absolute; bottom:8px; left:20px;">Wybierz kolor pierwszej kolumny:</h2>
			<a href="#tabela" class="change" style="position:absolute; bottom:25px; left:210px; color:orange;" onclick="thChange('orange')">pomarańczowy</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:8px; left:210px; color:orange;" onclick="tdChange('orange')">pomarańczowy</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:25px; left:310px; color:green;" onclick="thChange('green')">zielony</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:8px; left:310px; color:green;" onclick="tdChange('green')">zielony</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:25px; left:370px; color:red;" onclick="thChange('red')">czerwony</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:8px; left:370px; color:red;" onclick="tdChange('red')">czerwony</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:25px; left:440px; color:cornflowerblue;" onclick="thChange('cornflowerblue')">niebieski</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:8px; left:440px; color:cornflowerblue;" onclick="tdChange('cornflowerblue')">niebieski</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:25px; left:510px; color:gold;" onclick="thChange('gold')">żółty</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:8px; left:510px; color:gold;" onclick="tdChange('gold')">żółty</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:25px; left:555px; color:darkgray;" onclick="thChange('darkgrey')">szary</a>
			<a href="#tabela" class="change" style="position:absolute; bottom:8px; left:555px; color:darkgray;" onclick="tdChange('darkgrey')">szary</a>
		</div>
    </div>
    <div id="stopka">
        <br />
        <h2 class="totheright">Strona autorstwa Patryka Pardeja</h2>
    </div>
</div>
</body>
</html>