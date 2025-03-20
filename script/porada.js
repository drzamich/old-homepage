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

'<h4>Globalne zerowanie margines�w</h4><p>W j�zyku <code>(X)HTML</code> niekt�re elementy maj� nadpisane marginesy zewn�trzne jak i wewnetrzne - r�ne w poszczeg�lnych przegl�darkach. Kiedy robimy stron� internetow�, po wstawieniu danego elementu posiadaj�cega taki w�a�nie nadpisany margines, strona mo�e nam si� nieoczekiwanie "rozjecha�".</p> <a href="porady-css.php">czytaj dalej</a>',

'<h4>Kolejno�c wpisywania atrybut�w mieszanych</h4><p>W CSS przy niekt�rych znacznikach mamy mo�liwo�� wpisywania kilku warto�ci do jednej cechy. Cz�� z nich (na przyk�ad <code>margin</code>) ma ustalon� kolejno�� wpisywania. Przy niekt�rych mo�na jednak wpisywa� warto�ci jak tylko chcemy.</p> <a href="porady-css.php">czytaj dalej</a>',

'<h4>Warto�ci w cudzys�owie</h4><p>Pisz�c strony WWW bardzo cz�sto musimy wpisa� w znaczniku jego atrybut taki jak np. style, class, czy border. Aby to zastosowa� trzeba zapisa� to tak: <p class="opis" style="margin-left: 5px; font-size: 11px;">przestarza�y przyk�ad:</p><pre style="margin: 5px;">&lt;<var>znacznik</var> <var>atrybut</var>=<var>warto��</var>&gt;</pre></p> <a href="porady-html.php">czytaj dalej</a>',

'<h4>Stosowanie Doctype</h4><p><span class="i">Doctype</span> okre�la w jakim typie j�zyka <code>HTML</code> napisana jest strona WWW. Rodzaje <span class="i">Doctype</span> ustala organizacja standart�w internetowych - <a href="http://w3.org/">W3C</a>. Istniej� dwa typy <span class="i">Doctype</span> - <code>HTML</code> i <code>XHTML</code>. Najnowsz� odmian� <code>HTML</code> jest wersja 4.01, a <code>XHTML</code> 1.1, kt�ra jest  jednak rzadko stosowana.</p> <a href="porady-html.php">czytaj dalej</a>',

'<h4>Zmniejszanie ci�zaru obrazka</h4><p>Najbardziej znanymi formatami grafiki komputerowej s� formaty <code>bmp</code>, <code>gif</code> <code>jpg</code> i <code>png</code>. Dziel� si� one na dwie grupy - ci�kie i lekkie. Do ci�akich nale�� <code>bmp</code> i <code>png</code>, a do lekkich <code>jpg</code> i <code>gif</code>.</p> <a href="porady-grafika.php">czytaj dalej</a>',

'<h4>Masowe zmniejszanie ci�aru obrazk�w</h4><p>Wiesz ju� jak zmniejszy� wag� pojedynczeo obrazka. Co jednak gdy masz ca�y folder ciezkich obrazkow? Czy musisz po kolei zmniejsza� wag� ka�dego? Na szcz�cnie nie! Wyt�umacze tutaj jak w jednej chwili zmniejszy� wag� dowolnej ilo�ci obrazk�w na raz</p><a href="porady-grafika.php">czytaj dalej</a>',

'<h4>Zmniejszanie wielko�ci obrazka</h4><p><p>Obrazki wyst�puj� w najr�niejszych wymiarach. Czasami gdy jaki� obrazek jest zbyt du�y, po wstawieniu na stron� przestawia inne elementy. Mo�na go pomniejszy� "si�owo" w takie spos�b:<pre style="margin: 5px;">&lt;img width="<var>szeroko��</var>" height="<var>wysoko��</var>" /&gt;</pre></p><a href="porady-grafika.php">czytaj dalej</a>',

'<h4>Masowe zmniejszanie wielko�ci obrazk�w</h4><p>Tak jak wcze�niej zmieniali�my rozsze�enie wielku grafik na raz, mo�emy r�wnie� zmniejszy� ich rozmiary jednym klikni�ciem. Nie musimy dzi�ki temu marnowac naszego czasu na zmniejszanie obrazk�w jeden po drugim.</p><a href="porady-grafika.php">czytaj dalej</a>'
).random().join(''));
// ]]>
