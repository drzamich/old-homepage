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

'<h4>No document type declaration; implying "&lt;!DOCTYPE HTML SYSTEM&gt;"</h4><p>Taki b��d oznacza, �e na pocz�tku dokumentu nie zadeklarowano w jakim typie j�zyka HTML napisana jest strona WWW, czyli <span class="i">Doctype</span>. Aby go naprawi� nale�y to zrobi�. Je�li nie wiesz jaki <span class="i">Doctype</span> zadeklarowa�, przeczytaj <a href="porady-1.php">porady XHTML</a>.</p>',


'<h4>End tag for element "<var>znacznik</var>" which is not open.</h4><p>Taki b��d oznacza, �e zosta� zamkni�ty <var>znacznik</var>, kt�ry nie zosta� otwarty nigdzie wcze�niej. Nale�y go wykasowa�.</p>',

'<h4>Element "<var>znacznik</var>" undefined</h4><p>W dokumencie <acronym title="Extensible HyperText Markup Language">XHTML</acronym> zosta� u�yty znacznik, kt�ry nie istnieje w j�zyku <acronym title="Extensible HyperText Markup Language">XHTML</acronym>. Nale�y do wykasowa�.</p>',

'<h4>There is no attribute "<var>atrybut</var>"</h4><p>Pewnemu znacznikowi w kodzie zosta� nadany atrybut kt�ry nie istnieje w j�zyku <acronym title="Extensible HyperText Markup Language">XHTML</acronym>. Nale�y go wykazsowa� (atrybut, nie koniecznie ca�y znacznik).</p>',

'<h4>ID "<var>identyfikator</var>" already defined.</h4><p>W dokumencie <acronym title="Extensible HyperText Markup Language">XHTML</acronym> zosta� dwukrotnie nadany identyfikator. Jest to dzia�anie b��dne, gdy� identyfikator (<code>ID</code>) mo�e wystapi� tylko raz w ca-ym dokumencie. Mo�na to naprawi� tworz-c w arkuszu CSS nowy <code>ID</code> z takimi samymi cechami, lub lepiej, zamieniaj�c <code>ID</code> na <code>class</code>.</p>',

'<h4>End tag for "<var>znacznik</var>" omitted, but OMITTAG NO was specified.</h4><p>Nie zosta� wpisany znacznik zamykaj�cy wcze�niejszy element tego samego rodzaju.</p>',

'<h4>Document type does not allow element "<var>znacznik</var>" here.</h4><p>Dany znacznik nie mo�e by� u�yty w tym miejscu. Dzieje si� tak na przyk-ad wtedy, gdy umie�cimy znacznik <code>&lt;meta&gt;</code> w cz�sci <code>&lt;body&gt;</code></p>',

'<h4>Required attribute "<var>atrybut</var>" not specified</h4><p>Wymagany w danym znaczniku atrybut nie zosta� okre�lony. Mo�e dzia� si� tak na przyk�ad gdy znacznikowi <code>&lt;style&gt;</code> nie nadamy atrybutu <code>type</code></p>',

'<h4>Missing xmlns attribute for element html. The value should be (...)</h4><p>Przy okre�laniu <acronym title="Extensible HyperText Markup Language">XHTML</acronym> znacznikowi <code>&lt;html&gt;</code> nie nadano atrybutu <code>xmlns</code>. Przyk�ad u�ycia tego atrybutu mo�na znale�� w dziale <a href="fundament.php">Fundament kodu</a>.</p>',

'<h4>End tag for "<var>znacznik</var>" which is not finished.</h4><p>W tym przypadku s� dwie mo�liwe przyczyny tego b��du:<ul><li>Je�li w w jakim� znaczniku (na przyk�ad <code>&lt;p&gt;</code>) umie�cimy inny znacznik (na przyk-ad <code>&lt;em&gt;</code>), to musimy zamkn-c go przed zamkni�ciem tego pierwszego. Na przyk�ad: &lt;p&gt;...&lt;em&gt;...&lt;/em&gt;...&lt;/p&gt;</li><li>Niekt�re znaczniki <span class="u">musz�</span> zawierac w sobie jakie� inne. Na przyk�ad znacznik <code>&lt;head&gt;</code> musi zawiera� w sobie znacznik <code>&lt;title&gt;</code>, znacznik  <code>&lt;&gt;</code> znacznik <code>&lt;li&gt;</code> i tak dalej...</li></ul></p>',

'<h4>XML Parsing Error: <var>opis</var></h4><p>Ten b��d spowodowany jest najcz�ciej innym b��dem takim jak na przyk�ad nie zamkni�ty znacznik. Wystarczy poprawi� inne b��dy, aby znikn��.</p>',

'<h4>This Page Is Valid <var>rodzaj doctype</var>!</h4><p>To nie jest �aden b��d. Wr�cz przeciwnie. Strona jest zgodna z wszystkimi standartami i nie ma w niej �adnych b-�d�w. Brawo!</p>'
).random().join('', '<a href="validator">Zobacz wi�cej b-�d�w w Validatorze!</a>'));
// ]]>
