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

'<h4>Globalne zerowanie marginesów</h4><p>W jêzyku <code>(X)HTML</code> niektóre elementy maj± nadpisane marginesy zewnêtrzne jak i wewnetrzne - ró¿ne w poszczególnych przegl±darkach. Kiedy robimy stronê internetow±, po wstawieniu danego elementu posiadaj±cega taki w³a¶nie nadpisany margines, strona mo¿e nam siê nieoczekiwanie "rozjechaæ".</p> <a href="porady-css.php">czytaj dalej</a>',

'<h4>Kolejno¶c wpisywania atrybutów mieszanych</h4><p>W CSS przy niektórych znacznikach mamy mo¿liwo¶æ wpisywania kilku warto¶ci do jednej cechy. Czê¶æ z nich (na przyk³ad <code>margin</code>) ma ustalon± kolejno¶æ wpisywania. Przy niektórych mo¿na jednak wpisywaæ warto¶ci jak tylko chcemy.</p> <a href="porady-css.php">czytaj dalej</a>',

'<h4>Warto¶ci w cudzys³owie</h4><p>Pisz±c strony WWW bardzo czêsto musimy wpisaæ w znaczniku jego atrybut taki jak np. style, class, czy border. Aby to zastosowaæ trzeba zapisaæ to tak: <p class="opis" style="margin-left: 5px; font-size: 11px;">przestarza³y przyk³ad:</p><pre style="margin: 5px;">&lt;<var>znacznik</var> <var>atrybut</var>=<var>warto¶æ</var>&gt;</pre></p> <a href="porady-html.php">czytaj dalej</a>',

'<h4>Stosowanie Doctype</h4><p><span class="i">Doctype</span> okre¶la w jakim typie jêzyka <code>HTML</code> napisana jest strona WWW. Rodzaje <span class="i">Doctype</span> ustala organizacja standartów internetowych - <a href="http://w3.org/">W3C</a>. Istniej± dwa typy <span class="i">Doctype</span> - <code>HTML</code> i <code>XHTML</code>. Najnowsz± odmian± <code>HTML</code> jest wersja 4.01, a <code>XHTML</code> 1.1, która jest  jednak rzadko stosowana.</p> <a href="porady-html.php">czytaj dalej</a>',

'<h4>Zmniejszanie ciêzaru obrazka</h4><p>Najbardziej znanymi formatami grafiki komputerowej s± formaty <code>bmp</code>, <code>gif</code> <code>jpg</code> i <code>png</code>. Dziel± siê one na dwie grupy - ciê¿kie i lekkie. Do ciê¿akich nale¿± <code>bmp</code> i <code>png</code>, a do lekkich <code>jpg</code> i <code>gif</code>.</p> <a href="porady-grafika.php">czytaj dalej</a>',

'<h4>Masowe zmniejszanie ciê¿aru obrazków</h4><p>Wiesz ju¿ jak zmniejszyæ wagê pojedynczeo obrazka. Co jednak gdy masz ca³y folder ciezkich obrazkow? Czy musisz po kolei zmniejszaæ wagê ka¿dego? Na szczê¶cnie nie! Wyt³umacze tutaj jak w jednej chwili zmniejszyæ wagê dowolnej ilo¶ci obrazków na raz</p><a href="porady-grafika.php">czytaj dalej</a>',

'<h4>Zmniejszanie wielko¶ci obrazka</h4><p><p>Obrazki wystêpuj± w najró¿niejszych wymiarach. Czasami gdy jaki¶ obrazek jest zbyt du¿y, po wstawieniu na stronê przestawia inne elementy. Mo¿na go pomniejszyæ "si³owo" w takie sposób:<pre style="margin: 5px;">&lt;img width="<var>szeroko¶æ</var>" height="<var>wysoko¶æ</var>" /&gt;</pre></p><a href="porady-grafika.php">czytaj dalej</a>',

'<h4>Masowe zmniejszanie wielko¶ci obrazków</h4><p>Tak jak wcze¶niej zmieniali¶my rozsze¿enie wielku grafik na raz, mo¿emy równie¿ zmniejszyæ ich rozmiary jednym klikniêciem. Nie musimy dziêki temu marnowac naszego czasu na zmniejszanie obrazków jeden po drugim.</p><a href="porady-grafika.php">czytaj dalej</a>'
).random().join(''));
// ]]>
