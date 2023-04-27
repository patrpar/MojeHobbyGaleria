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
<body onload="addElementOpis(); addElementRamka(); showClicks()" class="background">
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
                <li><a class="hover" href="rowery">Jazda na rowerze</a></li>
                <li><a class="hover" href="ksiazki">Czytanie książek</a>
                  <ul>
                    <li><a class="hover" href="fantastyczne">Książki fantastyczne</a></li>
                    <li><a class="hover" href="przygodowe">Książki przygodowe</a></li>
                  </ul>
                </li>
                <li><a class="hover" href="ankiety">Ankiety</a></li>
				<li><a class="hover" href="galeria">Galeria</a></li>
            </ul>
            <img class="ksiazkimenu1_rowery" alt="ksiazki" src="static/Obrazy/ksiazkimenu1.jpg" />
            <img class="rowermenu1_rowery" alt="rower" src="static/Obrazy/rowermenu1.jpg" />
            <img class="ksiazkimenu_rowery" alt="ksiazki" src="static/Obrazy/ksiazkimenu.jpg" />
            <img class="rowermenu_rowery" alt="rower" src="static/Obrazy/rowermenu.jpg" />
        </div>
        <div id="tresc">
            <p class="main">Moje dwie największe pasje to jazda na rowerze oraz czytanie książek.</p>
            <p>Jeździć na rowerze zacząłem kiedy byłem małym dzieckiem. Polubiłem to niemal od razu. Do dziś, jeśli pogoda na to pozwala, lubię wyruszać w długie trasy rowerowe.</p>
            <p>Jazda na rowerze to wielka przyjemność, służy zdrowiu oraz kondycji, a przy tym korzystnie wpływa na środowisko. W naszym klimacie można jeździć nawet osiem miesięcy w roku.</p>
            <p>Jazda na rowerze jest wysiłkiem, który korzystnie wpływa na układ krążenia, poprawia wydolność organizmu, a także wspomaga pracę układu oddechowego. Osoby które jeżdżą na rowerze rzadziej chorują na schorzenia kręgosłupa i żylaków.</p>
            <p>Wielką zaletą roweru jako pojazdu jest to, że nie wydziela on spalin, a więc jest przyjazny dla środowiska. Jest również pojazdem bardzo cichym, a ciszy nigdy nie jest za wiele.</p>
            <p>Czytanie książek to pasja, która w moim przypadku ma swoje korzenie we wczesnym dzieciństwie. Książki od zawsze wprowadzały mnie w inny świat i pozwalały oderwać się od rzeczywistości.</p>
            <p>Mówi się, że czytanie to przeżytek, że książki są niemodne. Jest to nieprawda, ja uwielbiam zanurzyć się w literaturze, tak samo jak wielu moich znajomych.</p>
            <p>Książki rozwijają umiejętność czytania ze zrozumieniem i umiejętność logicznego myślenia. Rozbudowują także inteligencję. Dzięki nim można nauczyć się wypowiadać się w sposób atrakcyjny a także pisać ciekawe wypracowania poprawne stylistycznie i bogate językowo.</p>
            <p>Galeria przedstawiająca  te hobby:</p><br />
			<div class="gallery">
				<a target="_blank" href="static/Obrazy/rower1.jpg">
					<img onclick="count_clicks_session(); count_clicks();" class="miniatura" alt="rower" title="Rower" src="static/Obrazy/rower1.jpg" style="left:10%">
				</a>
				<div class="opisywidocznosc" id="number1" style="visibility:hidden;">(1)</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="static/Obrazy/rower2.jpg">
					<img onclick="count_clicks_session(); count_clicks();" class="miniatura" alt="rower" title="Rower" src="static/Obrazy/rower2.jpg" style="left:10%">
				</a>
				<div class="opisywidocznosc" id="number2" style="visibility:hidden;">(2)</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="static/Obrazy/rower3.jpg">
					<img onclick="count_clicks_session(); count_clicks();" class="miniatura" alt="rower" title="Rower" src="static/Obrazy/rower3.jpg" style="left:10%">
				</a>
				<div class="opisywidocznosc" id="number3" style="visibility:hidden;">(3)</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="static/Obrazy/ksiazki1.jpg">
					<img onclick="count_clicks_session(); count_clicks();" class="miniatura" alt="ksiazki" title="Książki" src="static/Obrazy/ksiazki1.jpg" style="left:10%">
				</a>
				<div class="opisywidocznosc" id="number4" style="visibility:hidden;">(4)</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="static/Obrazy/ksiazki2.jpg">
					<img onclick="count_clicks_session(); count_clicks();" class="miniatura" alt="ksiazki" title="Książki" src="static/Obrazy/ksiazki2.jpg" style="left:10%">
				</a>
				<div class="opisywidocznosc" id="number5" style="visibility:hidden;">(5)</div>
			</div>
			<div class="gallery">
				<a target="_blank" href="static/Obrazy/ksiazki3.jpg">
					<img onclick="count_clicks_session(); count_clicks();" class="miniatura" alt="ksiazki" title="Książki" src="static/Obrazy/ksiazki3.jpg" style="left:10%">
				</a>
				<div class="opisywidocznosc" id="number6" style="visibility:hidden;">(6)</div>
			</div>
			<br />
            <div class="opisy" id="ramka" onmouseover="showElementOpis()" onmouseout="hideElementOpis()"></div>
            <ol class="opisywidocznosc2" id="opis" style="position:relative; display: inline-block; width: 400px; left:0px; top:0px; font-size:14px; font-family:Arial; line-height:22px;"></ol>
            <div id="result" style="position:absolute; right:0; bottom:0; margin-bottom:50px; margin-right:20px; font-size:15px; font-weight:bold; visibility:hidden;">
                Licznik obejrzeń galerii
            </div>
            <div id="result-session" style="position:absolute; right:0; bottom:0; margin-bottom:20px; margin-right:20px; font-size:15px; font-weight:bold; visibility:hidden;">
                Licznik obejrzeń galerii (w tej sesji)
            </div>
        </div>
        <div id="stopka">
            <br />
            <h2 class="totheright">Strona autorstwa Patryka Pardeja</h2>
        </div>
    </div>
</body>
</html>
