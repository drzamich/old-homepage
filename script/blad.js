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

'<h4>No document type declaration; implying "&lt;!DOCTYPE HTML SYSTEM&gt;"</h4><p>Taki b³±d oznacza, ¿e na pocz±tku dokumentu nie zadeklarowano w jakim typie jêzyka HTML napisana jest strona WWW, czyli <span class="i">Doctype</span>. Aby go naprawiæ nale¿y to zrobiæ. Je¶li nie wiesz jaki <span class="i">Doctype</span> zadeklarowaæ, przeczytaj <a href="porady-1.php">porady XHTML</a>.</p>',


'<h4>End tag for element "<var>znacznik</var>" which is not open.</h4><p>Taki b³±d oznacza, ¿e zosta³ zamkniêty <var>znacznik</var>, który nie zosta³ otwarty nigdzie wcze¶niej. Nale¿y go wykasowaæ.</p>',

'<h4>Element "<var>znacznik</var>" undefined</h4><p>W dokumencie <acronym title="Extensible HyperText Markup Language">XHTML</acronym> zosta³ u¿yty znacznik, który nie istnieje w jêzyku <acronym title="Extensible HyperText Markup Language">XHTML</acronym>. Nale¿y do wykasowaæ.</p>',

'<h4>There is no attribute "<var>atrybut</var>"</h4><p>Pewnemu znacznikowi w kodzie zosta³ nadany atrybut który nie istnieje w jêzyku <acronym title="Extensible HyperText Markup Language">XHTML</acronym>. Nale¿y go wykazsowaæ (atrybut, nie koniecznie ca³y znacznik).</p>',

'<h4>ID "<var>identyfikator</var>" already defined.</h4><p>W dokumencie <acronym title="Extensible HyperText Markup Language">XHTML</acronym> zosta³ dwukrotnie nadany identyfikator. Jest to dzia³anie b³êdne, gdy¿ identyfikator (<code>ID</code>) mo¿e wystapiæ tylko raz w ca-ym dokumencie. Moªna to naprawiæ tworz-c w arkuszu CSS nowy <code>ID</code> z takimi samymi cechami, lub lepiej, zamieniaj±c <code>ID</code> na <code>class</code>.</p>',

'<h4>End tag for "<var>znacznik</var>" omitted, but OMITTAG NO was specified.</h4><p>Nie zosta³ wpisany znacznik zamykaj±cy wcze¶niejszy element tego samego rodzaju.</p>',

'<h4>Document type does not allow element "<var>znacznik</var>" here.</h4><p>Dany znacznik nie mo¿e byæ u¿yty w tym miejscu. Dzieje siê tak na przyk-ad wtedy, gdy umie¶cimy znacznik <code>&lt;meta&gt;</code> w czêsci <code>&lt;body&gt;</code></p>',

'<h4>Required attribute "<var>atrybut</var>" not specified</h4><p>Wymagany w danym znaczniku atrybut nie zosta³ okre¶lony. Mo¿e dziaæ siê tak na przyk³ad gdy znacznikowi <code>&lt;style&gt;</code> nie nadamy atrybutu <code>type</code></p>',

'<h4>Missing xmlns attribute for element html. The value should be (...)</h4><p>Przy okre¶laniu <acronym title="Extensible HyperText Markup Language">XHTML</acronym> znacznikowi <code>&lt;html&gt;</code> nie nadano atrybutu <code>xmlns</code>. Przyk³ad u¿ycia tego atrybutu mo¿na znale¼æ w dziale <a href="fundament.php">Fundament kodu</a>.</p>',

'<h4>End tag for "<var>znacznik</var>" which is not finished.</h4><p>W tym przypadku s± dwie mo¿liwe przyczyny tego b³êdu:<ul><li>Je¶li w w jakim¶ znaczniku (na przyk³ad <code>&lt;p&gt;</code>) umie¶cimy inny znacznik (na przyk-ad <code>&lt;em&gt;</code>), to musimy zamkn-c go przed zamkniêciem tego pierwszego. Na przyk³ad: &lt;p&gt;...&lt;em&gt;...&lt;/em&gt;...&lt;/p&gt;</li><li>Niektóre znaczniki <span class="u">musz±</span> zawierac w sobie jakie¶ inne. Na przyk³ad znacznik <code>&lt;head&gt;</code> musi zawieraæ w sobie znacznik <code>&lt;title&gt;</code>, znacznik  <code>&lt;&gt;</code> znacznik <code>&lt;li&gt;</code> i tak dalej...</li></ul></p>',

'<h4>XML Parsing Error: <var>opis</var></h4><p>Ten b³±d spowodowany jest najczê¶ciej innym b³êdem takim jak na przyk³ad nie zamkniêty znacznik. Wystarczy poprawiæ inne b³êdy, aby znikn±³.</p>',

'<h4>This Page Is Valid <var>rodzaj doctype</var>!</h4><p>To nie jest ¿aden b³±d. Wrêcz przeciwnie. Strona jest zgodna z wszystkimi standartami i nie ma w niej ªadnych b-êdów. Brawo!</p>'
).random().join('', '<a href="validator">Zobacz wiêcej b-êdów w Validatorze!</a>'));
// ]]>
