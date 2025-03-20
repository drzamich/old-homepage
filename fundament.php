<?php include 'head.php'; ?>
<h2 class="title">Fundament kodu</h2>
<div class="wykaz" style="margin-top: 5px;">
<p><b>Fundament kodu</b> to podstawa każdej strony internetowej robionej od początku, ponieważ wszystkie strony posiadają (a przynajmniej powinny posiadać) pewnie cechy wspólne takie jak na przykład <i>Doctype</i> lub deklaracja strony kodowej. Nie ma sensu przy tworzeniu nowej strony pisać za kązdym razem wszystko od początku, więc warto mieć wcześniej juz przydotowany "fundament". Poniżej przedstawiłem moją propozycję "fundamentu kodu"</p>
<pre>
&lt;!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl"&gt;
&lt;head&gt;
	&lt;meta http-equiv="Content-Type" content="text/html; charset=utf-8" /&gt;
	&lt;meta http-equiv="Content-Language" content="pl" /&gt;
	&lt;meta name="Description" content="" /&gt;
	&lt;meta name="Keywords" content="" /&gt;
	&lt;meta name="Author" content="" /&gt;
	&lt;meta name="Robots" content="" /&gt;
	&lt;link rel="Stylesheet" type="text/css" href="style.css" /&gt;	
	&lt;title&gt;Tu wpisz tytuł strony&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

Tu wpisuje się treść strony

&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Do tego dochodzi oczywiście arkusz stylów CSS o nazwie <code>style.css</code></p>
<pre>
* {
	padding: 0;
	margin: 0;
}

html, body {
	background: #fff;
}

body {
	font-family: arial, helvetica, sans-serif;
	font-size: 13px;
	color: #000;
	text-align: center;
}

a {
	text-decoration: none;
}

a:hover {
	text-decoration: underline;
}
</pre>
<p>We własym zakresie nalezy przygotowac sobie folder o nazwie "images" lub "img" (może byc też oczywiście własna nazwa) zawierający grafikę.</p>
<ul style="text-align:left;">
<li><a href="pliki/fundament.zip">Pobierz</a></li>
</ul>
</div>
<?php include 'foot.php'; ?>

