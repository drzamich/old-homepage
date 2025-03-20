<?php include 'head.php'; ?>
<h2 class="title">Błędy w Validatorze</h2>
<p>Znajdziesz tutaj wytłumaczenie błędów w kodzie wskazywanych przez <a href="http://validator.w3.org/">Validator</a> organizacji <a href="http://www.w3.org/">W3C</a>.</p>
<p>Pamiętaj jednak że nawet, jeśli poprawiłeś błąd, tak jak zostało to wytłumaczone poniżej, nie znaczy to w 100% że on zniknie, ponieważ może on tak naprawde leżeć gdzie indziej.</p>
<dl id="menu0" class="wykaz">
<dt><a href="javascript:void(0)">No document type declaration; implying "&lt;!DOCTYPE HTML SYSTEM&gt;"</a></dt>
<dd>Taki błąd oznacza, że na początku dokumentu nie zadeklarowano w jakim typie języka HTML napisana jest strona WWW, czyli <span class="i">Doctype</span>. Aby go naprawić należy to zrobić. Jeśli nie wiesz jaki <span class="i">Doctype</span> zadeklarować, przeczytaj <a href="../porady-html/index.html#doctype">to</a>.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu0');
// ]]>
</script>
<dl id="menu1" class="wykaz">
<dt><a href="javascript:void(0)">End tag for element "<var>znacznik</var>" which is not open.</a></dt>
<dd>Taki błąd oznacza że został zamknięty <var>znacznik</var>, który nie został otwarty nigdzie wcześniej. Należy go wykasować.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu1');
// ]]>
</script>
<dl id="menu2" class="wykaz">
<dt><a href="javascript:void(0)">Element "<var>znacznik</var>" undefined</a></dt>
<dd>W dokumencie HTML został użyty znacznik, który nie istnieje. Należy do wykasować.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu2');
// ]]>
</script>
<dl id="menu3" class="wykaz">
<dt><a href="javascript:void(0)">There is no attribute "<var>atrubut</var>"</a></dt>
<dd>Pewnemu znacznikowi w kodzie został nadany atrubut który nie istnieje. Należy go wykazsować (atrubut, nie cały znacznik).</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu3');
// ]]>
</script>
<dl id="menu4" class="wykaz">
<dt><a href="javascript:void(0)">ID "<var>identyfikator</var>" already defined.</a></dt>
<dd>W dokumencie HTML został dwukrotnie nadany identyfikator. Jest to działanie błędne, gdyż identyfikator (<code>ID</code>) może wystapić tylko raz w całym dokumencie. Można to naprawić tworząc w arkuszu CSS nowy <code>ID</code> z takimi samymi cechami, lub prościej, zamieniając <code>ID</code> na <code>class</code>.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu4');
// ]]>
</script>
<dl id="menu5" class="wykaz">
<dt><a href="javascript:void(0)">End tag for "<var>znacznik</var>" omitted, but OMITTAG NO was specified.</a></dt>
<dd>Nie został wpisany znacznik zamykający wcześniejszy element tego samego rodzaju.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu5');
// ]]>
</script>
<dl id="menu6" class="wykaz">
<dt><a href="javascript:void(0)">Document type does not allow element "<var>znacznik</var>" here.</a></dt>
<dd>Dany znacznik nie może być użyty w tym miejscu. Dzieije się tak naprzyklad wtedy, gdy umieścimy znacznik <code>&lt;meta&gt;</code> w częsci <code>&lt;body&gt;</code></dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu6');
// ]]>
</script>
<dl id="menu7" class="wykaz">
<dt><a href="javascript:void(0)">Character data is not allowed here.</a></dt>
<dd>Mozę być kilka przyczyn pojawienia się tego błędu:
<ul style="padding-left: 20px;">
<li>W <code>HTML 4.01</code> pisanie tekstu bezpośrednio w znaczniku <code>&lt;body&gt;</code> bez formatowania na przykład akapitem (<code>&lt;p&gt;</code>)</li>
<li>W przypadku wartości procentowych, muszą być one zamkniete w cudzysłowie. Więcej w dziale <a href="porady-html.php">Porady HTML</a>.</li>
<li>W <code>HTML</code> używanie znaczników zamykających pojedynczy tag (na przykład <code>&lt;meta /&gt;</code> czy <code>&lt;hr /&gt;</code>). Więcej informacji można znaeźć pod <a href="http://www.cs.tut.fi/~jkorpela/html/empty.html">tym</a> adresem.</li>
</dd>
</ul>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu7');
// ]]>
</script>
<dl id="menu8" class="wykaz">
<dt><a href="javascript:void(0)">Required attribute "<var>atrybut</var>" not specified</a></dt>
<dd>Wymagany w danym znaczniku atrybut nie został określony. Może dziać się tak naprzykład gdy znacznikowi <code>&lt;style&gt;</code> nie dnadamy atrybutu <code>type</code></dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu8');
// ]]>
</script>
<dl id="menu9" class="wykaz">
<dt><a href="javascript:void(0)">Missing xmlns attribute for element html. The value should be (...)</a></dt>
<dd>Przy określaniu <code>XHTML</code> znacznikowi <code>&lt;html&gt;</code> nie nadano atrybutu <code>xmlns</code>. Przykłak użycia tego atrybutu można znaleźc w dziale <a href="../fundament">Fundament kodu</a>.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu9');
// ]]>
</script>
<dl id="menu10" class="wykaz">
<dt><a href="javascript:void(0)">End tag for "<var>znacznik</var>" which is not finished.</a></dt>
<dd>W tym przypadku są dwie możliwe przyczyny tego błędu:
<ul style="padding-left: 20px;">
<li>Jeśli w w jakimś znaczniku (na przykład <code>&lt;p&gt;</code>) umieścimy inny znacznik (na przykład <code>&lt;em&gt;</code>), to musimy zamknąc go przed zamknięciem tego pierwszego. Na przykład:
<pre>&lt;p&gt;...&lt;em&gt;...&lt;/em&gt;...&lt;/p&gt;</pre></li>
<li>Niektóre znaczniki <span class="u">muszą</span> zawierac w sobie jakieś inne. Na przykład znacznik <code>&lt;head&gt;</code> musi zawierac w sobie znacznik <code>&lt;title&gt;</code>, znacznik  <code>&lt;ul&gt;</code> znacznik <code>&lt;li&gt;</code> i tak dalej...</li>
</ul>
</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu10');
// ]]>
</script>
<dl id="menu11" class="wykaz">
<dt><a href="javascript:void(0)">XML Parsing Error: <var>opis</var></a></dt>
<dd>Ten błąd spowodowany jest innym błędem takim jak na przykład nie zamkniety znacznik. Wystarczy poprawić inne błędy, aby zniknął.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu11');
// ]]>
</script>
<dl id="menu12" class="wykaz">
<dt><a href="javascript:void(0)">This Page Is Valid <var>rodzaj doctype</var>!</a></dt>
<dd>To żaden błąd. Wręcz przeciwnie. Strona jest zgodna z wszystkimi standartami i nie ma w niej żadnych błędów. Brawo!</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu12');
// ]]>
</script>
<?php include 'foot.php'; ?>

