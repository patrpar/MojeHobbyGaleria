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
<body class="background">
<div id="podzial">
    <div id="naglowek">
        <img class="rower" alt="rower.php" title="Jazda na rowerze" src="static/Obrazy/rower.jpg" />
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
                    <li><a class="hover" href="przygodowe">Książki przygodowe</a></li>
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
        <p class="main">CZYTANIE KSIĄŻEK</p>
        <p>Moja przygoda z czytaniem grubszych książek (czyli takich poza bajkami) zaczęła się, gdy mama zaproponowała mi przeczytanie pierwszej części Harry'ego Pottera. Byłem zafascynowany ekranizacją tej książki, więc zgodziłem się. Emocje, które czułem podczas lektury były nie do porównania z tymi, które towarzyszyły mi podczas oglądania filmu. Książki są od ekranizacji o tyle lepsze, że działa nasza wyobraźnia, w filmie ukazana jest jedynie wizja reżysera.</p>
        <img class="wysokie_potter" alt="harrypottercz1" title="Harry Potter i Kamień Filozoficzny" src="static/Obrazy/harrypotter1.jpg" />
        <img class="wysokie_ksiaze" alt="malyksiaze" title="Mały Książę" src="static/Obrazy/malyksiaze.jpg" />
        <br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
        <p>Ze zniecierpliwieniem czekałem na kolejne części, w międzyczasie sięgając po inne tytuły czy czytając lektury szkolne. Najbardziej interesowały mnie książki <a href="fantastyczne">fantastyczne</a> i <a href="przygodowe">przygodowe</a>.</p>
        <p>Czytanie książek pomaga mi się zrelaksować po ciężkim dniu i odprężyć. Dzięki zagłębieniu się w świat powieści fantastycznych czy przygodowych zapominam o stresie i szarej codzienności.</p>
        <p>Moją ulubioną książką, którą przeczytałem jest "Mały Książę", ze względu na wiele mądrych rad i wypowiedzeń bohaterów.</p>
        <p class="italic">Dla zainteresowanych: książki, które warto przeczytać: <a href="http://lubimyczytac.pl/ksiazki/polka/6461/100-ksiazek-ktore-musisz-przeczytac-zanim-umrzesz">klik!</a></p>
        <svg width="100%" height="180">
            <image x="100" y="10" width="100px" height="150px" xlink:href="static/Obrazy/ksiazka.jpg">
                <animateTransform id="anim1"
                                  attributeName="transform"
                                  type="rotate"
                                  from="90 150 85"
                                  to="0 150 85" begin="0s"
                                  dur="1s" additive="sum"/>
                <animateTransform id="anim2"
                                  attributeName="transform"
                                  type="skewX"
                                  from="0"
                                  to="30" begin="1s; anim5.end"
                                  dur="0.5s"
                                  additive="sum" restart="always" />
                <animateTransform id="anim3"
                                  attributeName="transform"
                                  type="skewX"
                                  from="30"
                                  to="0" begin="anim2.end"
                                  dur="0.5s" additive="sum" />
                <animateTransform id="anim4"
                                  attributeName="transform"
                                  type="skewX"
                                  from="0"
                                  to="-30" begin="anim3.end"
                                  dur="0.5s" additive="sum"/>
                <animateTransform id="anim5"
                                  attributeName="transform"
                                  type="skewX"
                                  from="-30"
                                  to="0" begin="anim4.end"
                                  dur="0.5s" additive="sum" />
            </image>
        </svg>
    </div>
    <div id="stopka">
        <br />
        <h2 class="totheright">Strona autorstwa Patryka Pardeja</h2>
    </div>
</div>
</body>
</html>