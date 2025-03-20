<?php include 'head.php'; ?>
<h2 class="title">B��dy w Validatorze</h2>
<p>Znajdziesz tutaj wyt�umaczenie b��d�w w kodzie wskazywanych przez <a href="http://validator.w3.org/">Validator</a> organizacji <a href="http://www.w3.org/">W3C</a>.</p>
<p>Pami�taj jednak �e nawet, je�li poprawi�e� b��d, tak jak zosta�o to wyt�umaczone poni�ej, nie znaczy to w 100% �e on zniknie, poniewa� mo�e on tak naprawde le�e� gdzie indziej.</p>
<dl id="menu0" class="wykaz">
<dt><a href="javascript:void(0)">No document type declaration; implying "&lt;!DOCTYPE HTML SYSTEM&gt;"</a></dt>
<dd>Taki b��d oznacza, �e na pocz�tku dokumentu nie zadeklarowano w jakim typie j�zyka HTML napisana jest strona WWW, czyli <span class="i">Doctype</span>. Aby go naprawi� nale�y to zrobi�. Je�li nie wiesz jaki <span class="i">Doctype</span> zadeklarowa�, przeczytaj <a href="../porady-html/index.html#doctype">to</a>.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu0');
// ]]>
</script>
<dl id="menu1" class="wykaz">
<dt><a href="javascript:void(0)">End tag for element "<var>znacznik</var>" which is not open.</a></dt>
<dd>Taki b��d oznacza �e zosta� zamkni�ty <var>znacznik</var>, kt�ry nie zosta� otwarty nigdzie wcze�niej. Nale�y go wykasowa�.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu1');
// ]]>
</script>
<dl id="menu2" class="wykaz">
<dt><a href="javascript:void(0)">Element "<var>znacznik</var>" undefined</a></dt>
<dd>W dokumencie HTML zosta� u�yty znacznik, kt�ry nie istnieje. Nale�y do wykasowa�.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu2');
// ]]>
</script>
<dl id="menu3" class="wykaz">
<dt><a href="javascript:void(0)">There is no attribute "<var>atrubut</var>"</a></dt>
<dd>Pewnemu znacznikowi w kodzie zosta� nadany atrubut kt�ry nie istnieje. Nale�y go wykazsowa� (atrubut, nie ca�y znacznik).</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu3');
// ]]>
</script>
<dl id="menu4" class="wykaz">
<dt><a href="javascript:void(0)">ID "<var>identyfikator</var>" already defined.</a></dt>
<dd>W dokumencie HTML zosta� dwukrotnie nadany identyfikator. Jest to dzia�anie b��dne, gdy� identyfikator (<code>ID</code>) mo�e wystapi� tylko raz w ca�ym dokumencie. Mo�na to naprawi� tworz�c w arkuszu CSS nowy <code>ID</code> z takimi samymi cechami, lub pro�ciej, zamieniaj�c <code>ID</code> na <code>class</code>.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu4');
// ]]>
</script>
<dl id="menu5" class="wykaz">
<dt><a href="javascript:void(0)">End tag for "<var>znacznik</var>" omitted, but OMITTAG NO was specified.</a></dt>
<dd>Nie zosta� wpisany znacznik zamykaj�cy wcze�niejszy element tego samego rodzaju.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu5');
// ]]>
</script>
<dl id="menu6" class="wykaz">
<dt><a href="javascript:void(0)">Document type does not allow element "<var>znacznik</var>" here.</a></dt>
<dd>Dany znacznik nie mo�e by� u�yty w tym miejscu. Dzieije si� tak naprzyklad wtedy, gdy umie�cimy znacznik <code>&lt;meta&gt;</code> w cz�sci <code>&lt;body&gt;</code></dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu6');
// ]]>
</script>
<dl id="menu7" class="wykaz">
<dt><a href="javascript:void(0)">Character data is not allowed here.</a></dt>
<dd>Moz� by� kilka przyczyn pojawienia si� tego b��du:
<ul style="padding-left: 20px;">
<li>W <code>HTML 4.01</code> pisanie tekstu bezpo�rednio w znaczniku <code>&lt;body&gt;</code> bez formatowania na przyk�ad akapitem (<code>&lt;p&gt;</code>)</li>
<li>W przypadku warto�ci procentowych, musz� by� one zamkniete w cudzys�owie. Wi�cej w dziale <a href="porady-html.php">Porady HTML</a>.</li>
<li>W <code>HTML</code> u�ywanie znacznik�w zamykaj�cych pojedynczy tag (na przyk�ad <code>&lt;meta /&gt;</code> czy <code>&lt;hr /&gt;</code>). Wi�cej informacji mo�na znae�� pod <a href="http://www.cs.tut.fi/~jkorpela/html/empty.html">tym</a> adresem.</li>
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
<dd>Wymagany w danym znaczniku atrybut nie zosta� okre�lony. Mo�e dzia� si� tak naprzyk�ad gdy znacznikowi <code>&lt;style&gt;</code> nie dnadamy atrybutu <code>type</code></dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu8');
// ]]>
</script>
<dl id="menu9" class="wykaz">
<dt><a href="javascript:void(0)">Missing xmlns attribute for element html. The value should be (...)</a></dt>
<dd>Przy okre�laniu <code>XHTML</code> znacznikowi <code>&lt;html&gt;</code> nie nadano atrybutu <code>xmlns</code>. Przyk�ak u�ycia tego atrybutu mo�na znale�c w dziale <a href="../fundament">Fundament kodu</a>.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu9');
// ]]>
</script>
<dl id="menu10" class="wykaz">
<dt><a href="javascript:void(0)">End tag for "<var>znacznik</var>" which is not finished.</a></dt>
<dd>W tym przypadku s� dwie mo�liwe przyczyny tego b��du:
<ul style="padding-left: 20px;">
<li>Je�li w w jakim� znaczniku (na przyk�ad <code>&lt;p&gt;</code>) umie�cimy inny znacznik (na przyk�ad <code>&lt;em&gt;</code>), to musimy zamkn�c go przed zamkni�ciem tego pierwszego. Na przyk�ad:
<pre>&lt;p&gt;...&lt;em&gt;...&lt;/em&gt;...&lt;/p&gt;</pre></li>
<li>Niekt�re znaczniki <span class="u">musz�</span> zawierac w sobie jakie� inne. Na przyk�ad znacznik <code>&lt;head&gt;</code> musi zawierac w sobie znacznik <code>&lt;title&gt;</code>, znacznik  <code>&lt;ul&gt;</code> znacznik <code>&lt;li&gt;</code> i tak dalej...</li>
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
<dd>Ten b��d spowodowany jest innym b��dem takim jak na przyk�ad nie zamkniety znacznik. Wystarczy poprawi� inne b��dy, aby znikn��.</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu11');
// ]]>
</script>
<dl id="menu12" class="wykaz">
<dt><a href="javascript:void(0)">This Page Is Valid <var>rodzaj doctype</var>!</a></dt>
<dd>To �aden b��d. Wr�cz przeciwnie. Strona jest zgodna z wszystkimi standartami i nie ma w niej �adnych b��d�w. Brawo!</dd>
</dl>
<script type="text/javascript">
// <![CDATA[
new Menu('menu12');
// ]]>
</script>
<?php include 'foot.php'; ?>

