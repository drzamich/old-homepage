// <![CDATA[
Array.prototype.random = function (limit) {
  if (typeof limit == "undefined" || limit < 0) limit = 1;
  else if (!limit) limit = this.length;
  for (
    var i = 0, source = this, target = new Array(), n = source.length;
    i < limit && n > 0;
    i++
  ) {
    do {
      var index = Math.random();
    } while (index == 1);
    index = Math.floor(index * n);
    target.push(source[index]);
    source[index] = source[--n];
  }
  return target;
};

document.write(
  new Array(
    // Tu wpisz kolejne elementy:

    '<h4>Globalne zerowanie marginesów</h4><p>W języku <code>(X)HTML</code> niektóre elementy mają nadpisane marginesy zewnętrzne jak i wewnetrzne - różne w poszczególnych przeglądarkach. Kiedy robimy stronę internetową, po wstawieniu danego elementu posiadającega taki właśnie nadpisany margines, strona może nam się nieoczekiwanie "rozjechać".</p> <a href="porady-css.html">czytaj dalej</a>',

    '<h4>Kolejnośc wpisywania atrybutów mieszanych</h4><p>W CSS przy niektórych znacznikach mamy możliwość wpisywania kilku wartości do jednej cechy. Część z nich (na przykład <code>margin</code>) ma ustaloną kolejność wpisywania. Przy niektórych można jednak wpisywać wartości jak tylko chcemy.</p> <a href="porady-css.html">czytaj dalej</a>',

    '<h4>Wartości w cudzysłowie</h4><p>Pisząc strony WWW bardzo często musimy wpisać w znaczniku jego atrybut taki jak np. style, class, czy border. Aby to zastosować trzeba zapisać to tak: <p class="opis" style="margin-left: 5px; font-size: 11px;">przestarzały przykład:</p><pre style="margin: 5px;">&lt;<var>znacznik</var> <var>atrybut</var>=<var>wartość</var>&gt;</pre></p> <a href="porady-html.html">czytaj dalej</a>',

    '<h4>Stosowanie Doctype</h4><p><span class="i">Doctype</span> określa w jakim typie języka <code>HTML</code> napisana jest strona WWW. Rodzaje <span class="i">Doctype</span> ustala organizacja standartów internetowych - <a href="http://w3.org/">W3C</a>. Istnieją dwa typy <span class="i">Doctype</span> - <code>HTML</code> i <code>XHTML</code>. Najnowszą odmianą <code>HTML</code> jest wersja 4.01, a <code>XHTML</code> 1.1, która jest  jednak rzadko stosowana.</p> <a href="porady-html.html">czytaj dalej</a>',

    '<h4>Zmniejszanie cięzaru obrazka</h4><p>Najbardziej znanymi formatami grafiki komputerowej są formaty <code>bmp</code>, <code>gif</code> <code>jpg</code> i <code>png</code>. Dzielą się one na dwie grupy - ciężkie i lekkie. Do ciężakich należą <code>bmp</code> i <code>png</code>, a do lekkich <code>jpg</code> i <code>gif</code>.</p> <a href="porady-grafika.html">czytaj dalej</a>',

    '<h4>Masowe zmniejszanie ciężaru obrazków</h4><p>Wiesz już jak zmniejszyć wagę pojedynczeo obrazka. Co jednak gdy masz cały folder ciezkich obrazkow? Czy musisz po kolei zmniejszać wagę każdego? Na szczęścnie nie! Wytłumacze tutaj jak w jednej chwili zmniejszyć wagę dowolnej ilości obrazków na raz</p><a href="porady-grafika.html">czytaj dalej</a>',

    '<h4>Zmniejszanie wielkości obrazka</h4><p><p>Obrazki występują w najróżniejszych wymiarach. Czasami gdy jakiś obrazek jest zbyt duży, po wstawieniu na stronę przestawia inne elementy. Można go pomniejszyć "siłowo" w takie sposób:<pre style="margin: 5px;">&lt;img width="<var>szerokość</var>" height="<var>wysokość</var>" /&gt;</pre></p><a href="porady-grafika.html">czytaj dalej</a>',

    '<h4>Masowe zmniejszanie wielkości obrazków</h4><p>Tak jak wcześniej zmienialiśmy rozszeżenie wielku grafik na raz, możemy również zmniejszyć ich rozmiary jednym kliknięciem. Nie musimy dzięki temu marnowac naszego czasu na zmniejszanie obrazków jeden po drugim.</p><a href="porady-grafika.html">czytaj dalej</a>'
  )
    .random()
    .join("")
);
// ]]>
