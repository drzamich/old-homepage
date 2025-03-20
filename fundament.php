<?php include 'head.php'; ?>
<h2 class="title">Fundament kodu</h2>
<div class="wykaz" style="margin-top: 5px;">
<p><b>Fundament kodu</b> to podstawa ka¿dej strony internetowej robionej od pocz±tku, poniewa¿ wszystkie strony posiadaj± (a przynajmniej powinny posiadaæ) pewnie cechy wspólne takie jak na przyk³ad <i>Doctype</i> lub deklaracja strony kodowej. Nie ma sensu przy tworzeniu nowej strony pisaæ za k±zdym razem wszystko od pocz±tku, wiêc warto mieæ wcze¶niej juz przydotowany "fundament". Poni¿ej przedstawi³em moj± propozycjê "fundamentu kodu"</p>
<pre>
&lt;!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
&lt;html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl"&gt;
&lt;head&gt;
	&lt;meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" /&gt;
	&lt;meta http-equiv="Content-Language" content="pl" /&gt;
	&lt;meta name="Description" content="" /&gt;
	&lt;meta name="Keywords" content="" /&gt;
	&lt;meta name="Author" content="" /&gt;
	&lt;meta name="Robots" content="" /&gt;
	&lt;link rel="Stylesheet" type="text/css" href="style.css" /&gt;	
	&lt;title&gt;Tu wpisz tytu³ strony&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

Tu wpisuje siê tre¶æ strony

&lt;/body&gt;
&lt;/html&gt;
</pre>
<p>Do tego dochodzi oczywi¶cie arkusz stylów CSS o nazwie <code>style.css</code></p>
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
<p>We w³asym zakresie nalezy przygotowac sobie folder o nazwie "images" lub "img" (mo¿e byc te¿ oczywi¶cie w³asna nazwa) zawieraj±cy grafikê.</p>
<ul style="text-align:left;">
<li><a href="pliki/fundament.zip">Pobierz</a></li>
</ul>
</div>
<?php include 'foot.php'; ?>

