<?php include 'head.php'; ?>
<h2 class="title">Porady HTML</h2>
<div class="wykaz">
<h4 id="wartosci_w_cudzyslowie">Wartości w cudzysłowie</h4>
<p>Pisząc strony WWW bardzo często musimy wpisać w znaczniku jego atrybut taki jak np. <code>style</code>, <code>class</code>, czy <code>border</code>. Aby to zastosować trzeba zapisac to tak:</p>
<p class="opis">wzór:</p>
<pre>
&lt;znacznik atrybut=wartość&gt;
</pre>
<p>Taki zapis jest dobry jesli komuś chodzi tylko o to żeby to działało. Z punktu widzenia standartów XHTML jest to jednak działanie błędne, ponieważ wartośc musimy wziąć w cudzysłów.</p>
<p class="opis">wzór:</p>
<pre>
&lt;znacznik atrybut="wartość"&gt;
</pre>
<p>Jeśli piszemy w zwykłym HTML nie musimy tego robić, jednak polecam takie działanie, gdyż później łatwiej bezie się nam przystosować do nowoczesnych standartów a także kod jest bardziej przejrzysty.</p>
<p class="opis" style="margin-top: 2px;">przykład błędu:</p>
<pre>
<span style="color: #f00;">&lt;table border=1 cellpadding=0 cellspacing=0&gt;</span>
</pre>
<p class="opis">przykład poprawny:</p>
<pre>
<span style="color: #228b22;">&lt;table border="1" cellpadding="0" cellspacing="0"&gt;</span>
</pre>
</div>
<div class="wykaz">
<h4 id="stosowanie_doctype">Stosowanie Doctype</h4>
<p><i>Doctype</i> określa w jakim typie języka <code>HTML</code> napisana jest strona WWW. Rodzaje <i>Doctype</i> ustala organizacja standartów internetowych - <a href="http://w3.org/">W3C</a>. Istnieją dwa typy <i>Doctype</i> - <code>HTML</code> i <code>XHTML</code>. Najnowszą odmianą <code>HTML</code> jest wersja 4.01, a <code>XHTML</code> 1.1, która jest  jednak rzadko stosowana.</p>
<p><i>Doctype</i> wstawiamy na samiutkim początku dokumentu, przed znacznikiem <code>&lt;html&gt;</code></p>
<h4 style="margin-top: 5px;"><code>Doctype HTML</code></h4>
<p class="opis">Wersje HTML 4.01 wyłączająca znaczniki <a href="http://4programmers.net/(X)HTML/Deprecated">zdeprecjonowane</a> czyli takie, których odradza się stosowanie</p>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"&gt;
</pre>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd"&gt;
</pre>
<p class="opis">Wersje HTML 4.01 zawierające znaczniki zdeprecjonowane (<b>Transitional</b>)</p>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"&gt;
</pre>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd"&gt;
</pre>
<p class="opis">Wersje HTML 4.01 dla stron zawierających ramki (<b>Frameset</b>)</p>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"&gt;
</pre>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN"
	"http://www.w3.org/TR/html4/frameset.dtd"&gt;
</pre>
<h4 style="margin-top: 5px;"><code>Doctype XHTML</code></h4>
<p class="opis">XHTML 1.0 <b>Strict</b></p>
<pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"&gt;
</pre>
<p class="opis">XHTML 1.0 <b>Transitional</b></p>
<pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"&gt;
</pre>
<p class="opis">XHTML 1.0 <b>Frameset</b></p>
<pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Frameset//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-frameset.dtd"&gt;
</pre>
<p class="opis">Jedyna wersja XHTML 1.1</p>
<pre>
&lt;!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.1//EN"
        "http://www.w3.org/TR/xhtml11/DTD/xhtml11.dtd"&gt;
</pre>
</div>
<?php include 'foot.php'; ?>

