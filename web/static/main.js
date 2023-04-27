function dancing(event, pixel) {
    $(event.target).animate({ left: pixel + 'px' }, function () {
        dancing(event, -pixel);
    });
}

$(document).ready(function () {
    var speed = 120;
    $('#dance a').hover(function (event) {
        $(this).stop().animate({ left: '-5px' }, speed, function () {
            dancing(event, 5);
        });
    }, function () {
        $(this).stop().animate({ left: '0' }, speed);
    });
});

function count_clicks() {
    if (localStorage.click_count) {
        localStorage.click_count = Number(localStorage.click_count) + 1;
    } else {
        localStorage.click_count = 1;
    }
    var div = document.getElementById("result");
    div.innerHTML = "Licznik obejrzeń galerii: " +
        localStorage.click_count;
}

function count_clicks_session() {
    if (sessionStorage.click_count) {
        sessionStorage.click_count = Number(sessionStorage.click_count) + 1;
    } else {
        sessionStorage.click_count = 1;
    }
    var div = document.getElementById("result-session");
    div.innerHTML = "Licznik obejrzeń galerii (w tej sesji): " +
        sessionStorage.click_count;
}

function showClicks() {
    document.getElementById("result").style.visibility = 'visible';
    document.getElementById("result-session").style.visibility = 'visible';
}

function thChange(th) {
    document.getElementById("th1").style.background = th;
    document.getElementById("th2").style.background = th;
    document.getElementById("th3").style.background = th;
}

function tdChange(td) {
    document.getElementById("td1").style.background = td;
    document.getElementById("td2").style.background = td;
    document.getElementById("td3").style.background = td;
}

function addElementFant() {
    var node = document.createElement("P");
    var textnode = document.createTextNode("Zdj. Ulubione książki fantastyczne. Seria Harry Potter/seria Ulysses Moore/Hobbit, czyli tam i z powrotem");
    node.appendChild(textnode);
    document.getElementById("podpis").appendChild(node);
}

function addElementPrzyg() {
    var node = document.createElement("P");
    var textnode = document.createTextNode("Zdj. Ulubione książki przygodowe. Seria Igrzyska śmierci/seria Zwiadowcy/seria Tunele");
    node.appendChild(textnode);
    document.getElementById("podpis").appendChild(node);
}

function addElementRamka() {
    var node = document.createElement("P");
    var textnode = document.createTextNode("Opisy zdjęć (najedź na ramkę, by zobaczyć):");
    node.appendChild(textnode);
    document.getElementById("ramka").appendChild(node);
    document.getElementById("ramka").style.border = '1px solid black';
    document.getElementById("ramka").style.width = '330px';
}

function showElementColors() {
    document.getElementById("colors").style.visibility = 'visible';
}

function addElementOpis() {
    var node1 = document.createElement("LI");
    var textnode1 = document.createTextNode("Rower");
    node1.appendChild(textnode1);
    document.getElementById("opis").appendChild(node1);
    document.getElementById("opis").style.visibility = 'hidden';
    var node2 = document.createElement("LI");
    var textnode2 = document.createTextNode("Ciekawe trasy");
    node2.appendChild(textnode2);
    document.getElementById("opis").appendChild(node2);
    document.getElementById("opis").style.visibility = 'hidden';
    var node3 = document.createElement("LI");
    var textnode3 = document.createTextNode("Możliwość spędzenia czasu ze znajomymi");
    node3.appendChild(textnode3);
    document.getElementById("opis").appendChild(node3);
    document.getElementById("opis").style.visibility = 'hidden';
    var node4 = document.createElement("LI");
    var textnode4 = document.createTextNode("Biblioteka");
    node4.appendChild(textnode4);
    document.getElementById("opis").appendChild(node4);
    document.getElementById("opis").style.visibility = 'hidden';
    var node5 = document.createElement("LI");
    var textnode5 = document.createTextNode("Przeniesienie w inny, magiczny świat");
    node5.appendChild(textnode5);
    document.getElementById("opis").appendChild(node5);
    document.getElementById("opis").style.visibility = 'hidden';
    var node6 = document.createElement("LI");
    var textnode6 = document.createTextNode("Możliwość relaksu i odprężenia");
    node6.appendChild(textnode6);
    document.getElementById("opis").appendChild(node6);
    document.getElementById("opis").style.visibility = 'hidden';
}

function showElementOpis() {
    document.getElementById("opis").style.visibility = 'visible';
    document.getElementById("number1").style.visibility = 'visible';
    document.getElementById("number2").style.visibility = 'visible';
    document.getElementById("number3").style.visibility = 'visible';
    document.getElementById("number4").style.visibility = 'visible';
    document.getElementById("number5").style.visibility = 'visible';
    document.getElementById("number6").style.visibility = 'visible';
}

function hideElementOpis() {
    document.getElementById("opis").style.visibility = 'hidden';
    document.getElementById("number1").style.visibility = 'hidden';
    document.getElementById("number2").style.visibility = 'hidden';
    document.getElementById("number3").style.visibility = 'hidden';
    document.getElementById("number4").style.visibility = 'hidden';
    document.getElementById("number5").style.visibility = 'hidden';
    document.getElementById("number6").style.visibility = 'hidden';
}
