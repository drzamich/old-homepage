function gaderypoluki() {
okno = window.open("automaty/gaderypoluki.html","nazwa_okna","toolbar=no, height=200px, width=400px");
}

function kaceminutowy() {
okno = window.open("automaty/kaceminutowy.html","nazwa_okna","toolbar=no, height=200px, width=400px");
}

function koniecmatury() {
okno = window.open("automaty/koniecmatury.html","nazwa_okna","toolbar=no, height=200px, width=400px");
}

function madefilokuzy() {
okno = window.open("automaty/madefilokuzy.html","nazwa_okna","toolbar=no, height=200px, width=400px");
}

function politykarenu() {
okno = window.open("automaty/politykarenu.html","nazwa_okna","toolbar=no, height=200px, width=400px");
}

function morse() {
okno = window.open("automaty/morse.html","nazwa_okna","toolbar=no, height=262px, width=618px");
}

// <![CDATA[
Array.prototype.random = function(limit)
{
	if (typeof limit == 'undefined' || limit < 0) limit = 1;
	else if (!limit) limit = this.length;
	for (var i = 0, source = this, target = new Array(), n = source.length; i < limit && n > 0; i++)
	{
		do { var index = Math.random(); } while (index == 1);
		index = Math.floor(index * n);
		target.push(source[index]);
		source[index] = source[--n];
	}
	return target;
}

document.write(new Array(
// Tu wpisz kolejne elementy:

'<h4><a href="#" onclick="morse();">Alfabet Morsea</a></h4>',
'<h4><a href="#" onclick="gaderypoluki();">GA-DE-RY-PO-LU-KI</a></h4>',
'<h4><a href="#" onclick="madefilokuzy();">MA-DE-FI-LO-KU-ZY</a></h4>',
'<h4><a href="#" onclick="koniecmatury();">KO-NI-EC-MA-TU-RY</a></h4>',
'<h4><a href="#" onclick="kaceminutowy();">KA-CE-MI-NU-TO-WY</a></h4>',
'<h4><a href="#" onclick="politykarenu();">PO-LI-TY-KA-RE-NU</a></h4>'

).random().join(''));
// ]]>
