<?php include 'head.php'; ?>
<h2 class="title">Porady HTML</h2>
<div class="wykaz">
<h4 id="wartosci_w_cudzyslowie">Warto¶ci w cudzys³owie</h4>
<p>Pisz±c strony WWW bardzo czêsto musimy wpisaæ w znaczniku jego atrybut taki jak np. <code>style</code>, <code>class</code>, czy <code>border</code>. Aby to zastosowaæ trzeba zapisac to tak:</p>
<p class="opis">wzór:</p>
<pre>
&lt;znacznik atrybut=warto¶æ&gt;
</pre>
<p>Taki zapis jest dobry jesli komu¶ chodzi tylko o to ¿eby to dzia³a³o. Z punktu widzenia standartów XHTML jest to jednak dzia³anie b³êdne, poniewa¿ warto¶c musimy wzi±æ w cudzys³ów.</p>
<p class="opis">wzór:</p>
<pre>
&lt;znacznik atrybut="warto¶æ"&gt;
</pre>
<p>Je¶li piszemy w zwyk³ym HTML nie musimy tego robiæ, jednak polecam takie dzia³anie, gdy¿ pó¼niej ³atwiej bezie siê nam przystosowaæ do nowoczesnych standartów a tak¿e kod jest bardziej przejrzysty.</p>
<p class="opis" style="margin-top: 2px;">przyk³ad b³êdu:</p>
<pre>
<span style="color: #f00;">&lt;table border=1 cellpadding=0 cellspacing=0&gt;</span>
</pre>
<p class="opis">przyk³ad poprawny:</p>
<pre>
<span style="color: #228b22;">&lt;table border="1" cellpadding="0" cellspacing="0"&gt;</span>
</pre>
</div>
<div class="wykaz">
<h4 id="stosowanie_doctype">Stosowanie Doctype</h4>
<p><i>Doctype</i> okre¶la w jakim typie jêzyka <code>HTML</code> napisana jest strona WWW. Rodzaje <i>Doctype</i> ustala organizacja standartów internetowych - <a href="http://w3.org/">W3C</a>. Istniej± dwa typy <i>Doctype</i> - <code>HTML</code> i <code>XHTML</code>. Najnowsz± odmian± <code>HTML</code> jest wersja 4.01, a <code>XHTML</code> 1.1, która jest  jednak rzadko stosowana.</p>
<p><i>Doctype</i> wstawiamy na samiutkim pocz±tku dokumentu, przed znacznikiem <code>&lt;html&gt;</code></p>
<h4 style="margin-top: 5px;"><code>Doctype HTML</code></h4>
<p class="opis">Wersje HTML 4.01 wy³±czaj±ca znaczniki <a href="http://4programmers.net/(X)HTML/Deprecated">zdeprecjonowane</a> czyli takie, których odradza siê stosowanie</p>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"&gt;
</pre>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
	"http://www.w3.org/TR/html4/strict.dtd"&gt;
</pre>
<p class="opis">Wersje HTML 4.01 zawieraj±ce znaczniki zdeprecjonowane (<b>Transitional</b>)</p>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"&gt;
</pre>
<pre>
&lt;!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
	"http://www.w3.org/TR/html4/loose.dtd"&gt;
</pre>
<p class="opis">Wersje HTML 4.01 dla stron zawieraj±cych ramki (<b>Frameset</b>)</p>
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

