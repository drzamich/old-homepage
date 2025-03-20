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

    '<h4>No document type declaration; implying "&lt;!DOCTYPE HTML SYSTEM&gt;"</h4><p>Taki błąd oznacza, że na początku dokumentu nie zadeklarowano w jakim typie języka HTML napisana jest strona WWW, czyli <span class="i">Doctype</span>. Aby go naprawić należy to zrobić. Jeśli nie wiesz jaki <span class="i">Doctype</span> zadeklarować, przeczytaj <a href="porady-1.php">porady XHTML</a>.</p>',

    '<h4>End tag for element "<var>znacznik</var>" which is not open.</h4><p>Taki błąd oznacza, że został zamknięty <var>znacznik</var>, który nie został otwarty nigdzie wcześniej. Należy go wykasować.</p>',

    '<h4>Element "<var>znacznik</var>" undefined</h4><p>W dokumencie <acronym title="Extensible HyperText Markup Language">XHTML</acronym> został użyty znacznik, który nie istnieje w języku <acronym title="Extensible HyperText Markup Language">XHTML</acronym>. Należy do wykasować.</p>',

    '<h4>There is no attribute "<var>atrybut</var>"</h4><p>Pewnemu znacznikowi w kodzie został nadany atrybut który nie istnieje w języku <acronym title="Extensible HyperText Markup Language">XHTML</acronym>. Należy go wykazsować (atrybut, nie koniecznie cały znacznik).</p>',

    '<h4>ID "<var>identyfikator</var>" already defined.</h4><p>W dokumencie <acronym title="Extensible HyperText Markup Language">XHTML</acronym> został dwukrotnie nadany identyfikator. Jest to działanie błędne, gdyż identyfikator (<code>ID</code>) może wystapić tylko raz w ca-ym dokumencie. MoŞna to naprawić tworz-c w arkuszu CSS nowy <code>ID</code> z takimi samymi cechami, lub lepiej, zamieniając <code>ID</code> na <code>class</code>.</p>',

    '<h4>End tag for "<var>znacznik</var>" omitted, but OMITTAG NO was specified.</h4><p>Nie został wpisany znacznik zamykający wcześniejszy element tego samego rodzaju.</p>',

    '<h4>Document type does not allow element "<var>znacznik</var>" here.</h4><p>Dany znacznik nie może być użyty w tym miejscu. Dzieje się tak na przyk-ad wtedy, gdy umieścimy znacznik <code>&lt;meta&gt;</code> w częsci <code>&lt;body&gt;</code></p>',

    '<h4>Required attribute "<var>atrybut</var>" not specified</h4><p>Wymagany w danym znaczniku atrybut nie został określony. Może dziać się tak na przykład gdy znacznikowi <code>&lt;style&gt;</code> nie nadamy atrybutu <code>type</code></p>',

    '<h4>Missing xmlns attribute for element html. The value should be (...)</h4><p>Przy określaniu <acronym title="Extensible HyperText Markup Language">XHTML</acronym> znacznikowi <code>&lt;html&gt;</code> nie nadano atrybutu <code>xmlns</code>. Przykład użycia tego atrybutu można znaleźć w dziale <a href="fundament.php">Fundament kodu</a>.</p>',

    '<h4>End tag for "<var>znacznik</var>" which is not finished.</h4><p>W tym przypadku są dwie możliwe przyczyny tego błędu:<ul><li>Jeśli w w jakimś znaczniku (na przykład <code>&lt;p&gt;</code>) umieścimy inny znacznik (na przyk-ad <code>&lt;em&gt;</code>), to musimy zamkn-c go przed zamknięciem tego pierwszego. Na przykład: &lt;p&gt;...&lt;em&gt;...&lt;/em&gt;...&lt;/p&gt;</li><li>Niektóre znaczniki <span class="u">muszą</span> zawierac w sobie jakieś inne. Na przykład znacznik <code>&lt;head&gt;</code> musi zawierać w sobie znacznik <code>&lt;title&gt;</code>, znacznik  <code>&lt;&gt;</code> znacznik <code>&lt;li&gt;</code> i tak dalej...</li></ul></p>',

    "<h4>XML Parsing Error: <var>opis</var></h4><p>Ten błąd spowodowany jest najczęściej innym błędem takim jak na przykład nie zamknięty znacznik. Wystarczy poprawić inne błędy, aby zniknął.</p>",

    "<h4>This Page Is Valid <var>rodzaj doctype</var>!</h4><p>To nie jest żaden błąd. Wręcz przeciwnie. Strona jest zgodna z wszystkimi standartami i nie ma w niej Şadnych b-ędów. Brawo!</p>"
  )
    .random()
    .join("", '<a href="validator">Zobacz więcej b-ędów w Validatorze!</a>')
);
// ]]>
