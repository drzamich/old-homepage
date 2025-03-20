<?php include 'head.php'; ?>
<h2 class="title">Znaczniki i atrybuty zdeprecjonowane</h2>
<div class="wykaz">
<h4>Znaczniki zdeprecjonowane</h4>
<ul>
    <li><code>Applet</code> - aplet. Nale¿y zast±piæ go znacznikiem <code>&lt;object&gt;</code></li>
    <li><code>Basefont</code> - czcionka bazowa (domy¶lna). Zamiast niego nalezy nadac wybrane elementy znacznikowi <code>&lt;body&gt;</code>
    <p class="opis">Na przyk³ad:</p>
    <pre>body { font-size: 15px; color: #000; font-family: arial; }</pre></li>
    <li><code>Center</code> - wy¶rodkowanie. Aby wy¶rodkowac tekst w danym znaczniku, nalezy nadac mu w CSS:
    <pre>text-align: cener;</pre>
    <p class="opis">Na przyk³ad:</p>
    <pre>&lt;p style="text-align: cener;"&gt;</pre></li>
    <li><code>Dir</code>- wielokolumnowy spis zawarto¶ci. Nalezy zast±piæ go znacznikiem <code>&lt;ul&gt;</code></li>
    <li><code>Font</code> - element czcionki. Zosta³ zast±piony znacznikiem <code>&lt;span&gt;</code></li>
    <li><code>Isindex</code> - jednoliniowe pole tekstowe. Nale¿y zast±piæ go znacznikiem <code>&lt;input&gt;</code></li>
    <li><code>Menu</code> - spis elementów menu. Nalezy zast±piæ go znacznikiem <code>&lt;ul&gt;</code></li>
    <li><code>S</code>, <code>Strike</code> - przekre¶lenie. Aby uzuskaæ taki sam efekt nale¿y danemu elementowi nadaæ w CSS atrybuty:
    <pre>text-decoration: line-through;</pre>
    <p class="opis">Na przyk³ad:</p>
    <pre>&lt;span style="text-decoration: line-through;"&gt;</pre></li>
    <li><code>U</code> - podkre¶lenie. Aby uzuskaæ taki sam efekt nale¿y danemu elementowi nadaæ w CSS atrybuty:
    <pre>text-decoration: underline;</pre>
    <p class="opis">Na przyk³ad:</p>
    <pre>&lt;span style="text-decoration: underline;"&gt;</pre></li>
</ul>
</div>
<div class="wykaz">
<h4>Atrybuty zdeprecjonowane</h4>
<ul>
    <li><code>align</code> - wyrównanie tekstu. Zamiast tego nalezy danemu elementowi nadac w warto¶ci CSS:
<pre>text-align: <var>wyrównanie</var></pre></li>
    <li><code>alink</code> - kolor aktywnych odsy³aczy. Zamiast tego nale¿y elementowi <code>A</code> nadaæ w pseudoklasê CSS:
<pre>a:hover {color: <var>kolor</var>}</pre></li>
    <li><code>background</code> - t³o obrazkowe. Zamiast tego nale¿y danemu elementowi nadaæ w warto¶ci CSS:
<pre>background-image: url('<var>adres obrazka</var>')</pre></li>
    <li><code>bgcolor</code> - kolor t³a. Zamiast tego nalezy danemu elementowi nadac w warto¶ci CSS:
<pre>background-color: <var>kolor</var></pre></li>
    <li><code>border</code> - szereoko¶c obramowania. Zamiast tego nalezy danemu elementowi nadaæ w warto¶ci CSS:
<pre>border-width: <var>szeroko¶c</var></pre></li>
    <li><code>clear</code> - okre¶la, gdzie powinna siê pojawiæ nowa linia. Brak zast±pienia w CSS</li>
    <li><code>code</code> -	plik klasy apletu. Brak zast±pienia w CSS.</li>
    <li><code>color</code> - kolor tekstu. Zamiast tego nale¿y danemu elementowi nadaæ w warto¶ci CSS:
<pre>color: <var>numer/nazwa koloru</var></pre></li>
    <li><code>compact</code> - redukuje odstêpy pomiêdzy pozycjami. Brak zast±pienia w CSS.</li>
    <li><code>face</code> - styl czcionki. Zamiast niego nale¿y danemu elementowi nadaæ w warto¶ci CSS:
<pre>font-family: <var>nazwa stylu</var></pre></li>
    <li><code>height</code> - wysoko¶c. Zamiast niego nale¿y danemu elementowi nadaæ w warto¶ci CSS:
<pre>height: <var>wysoko¶æ</var></pre></li>
    <li><code>hspace</code> - poziomy odstêp. Zamiast niego nale¿y danemu elementowi nadaæ w warto¶ci CSS:
<pre>margin-left: <var>odstêp od lewej</var>; margin-right: <var>odstêp od prawej</var>;</pre></li>
    <li><code>language</code> - predefiniowana nazwa jêzyka skryptowego. Brak zast±pienia w CSS.</li>
    <li><code>link</code> - kolor odsy³aczy. Zamiast tego nale¿y elementowi <code>A</code> nadac w CSS:
<pre>a {color: <var>kolor</var>}</pre></li>
    <li><code>noshade</code> - pozioma linia pozbawiona cienia. Brak zast±pienia w CSS.</li>
    <li><code>nowrap</code> - blokada zawijania tekstu. Brak zast±pienia w CSS.</li>
    <li><code>object</code> - plik zasobów. Brak zast±pienia w CSS.</li>
    <li><code>prompt</code> - tekst zachêty. Brak zast±pienia w CSS.</li>
    <li><code>size</code> - wielko¶æ czcionki. Zamiast niego nale¿y danemu elementowi nadaæ w warto¶ci CSS:
<pre>font-size: <var>wielko¶æ</var></pre></li>
    <li><code>start</code> - liczba pocz±tkowa. Brak zast±pienia w CSS.</li>
    <li><code>text</code> (<code>BODY</code>) - kolor teksty dokumentu. Zamiast niego nale¿y elementowi BODY nadaæ w warto¶ci CSS:
<pre>body {color: <var>numer/nazwa koloru</var>}</pre></li>
    <li><code>type</code> (<code>OL</code>, <code>UL</code>, <code>DL</code>) - styl wykazu. Zamiast niego nale¿y elementowi <code>OL</code>, <code>UL</code> lub <code>DL</code> nadaæ w warto¶ci CSS:
<pre>list-style-type: <var>typ</var></pre></li>
    <li><code>version</code> - wersja <code>HTML</code>. Nalezy uzywac deklaracji <span class="i">Doctype</span> na pocz±tku dokumentu. Wiêcej w dziale <a href="../porady-html">Porady HTML</a>.</li>
    <li><code>vlink</code> - kolor odwiedzonych odsy³aczy. Zamiast tego nale¿y elementowi <code>A</code> nadaæ w pseudoklasê CSS:
<pre>a:visited {color: <var>kolor</var>}</pre></li>
    <li><code>vspace</code> - pionowy odstêp. Zamiast niego nale¿y danemu elementowi nadaæ w warto¶ci CSS:
<pre>margin-top: <var>odstêp od góry</var>; margin-bottom: <var>odstêp od do³u</var>;</pre></li>
</ul>
</div>
<div class="wykaz">
<h4>Blokada Anty-Zdeprecjonowanym</h4>
<p><b>Blokada Anty-Zdeprecjonowanym</b> to mój pomysl na to jak odzwyczaiæ siê od u¿ywania znaczników zdeprecjonowanych. Polega ona na tym ¿e w arkuszu styów <code>CSS</code> wpisujemy kod podany poni¿ej. Po wpisaniu tego kodu, je¶li dokument <code>(X)HTML</code> ma odniesienie do arkusza, to nie bêd± dzia³a³y w nim choæ niektóre znaczniki zdeprecjonowane - te które da siê zablokowac u¿ywaj±c <code>CSS</code>. A oto kod, który trzeba wkleiæ do swojego arkusza stylów:</p>
<pre>i {
	font-style: normal;
}
u, s, strike {
	text-decoration: none;
}
center {
	text-align: left;
}
applet, dir, isindex, menu {
	display: none
}
</pre>
<p>Kod ten dzia³a tak, ¿e gdy wpiszemy w kodzie znacznik <code>&lt;i&gt;</code>, zamiast pochylonego tekstu wy¶wietli nam siê zwyk³y, tak jakby¶my w ogóle nie u¿yli. Podobnie w przypadku <code>&lt;u&gt;</code>, <code>&lt;s&gt;</code> i <code>&lt;strike&gt;</code>. Natomiast je¶li u¿yjemy <code>&lt;applet&gt;</code>, <code>&lt;dir&gt;</code>, <code>&lt;isindex&gt;</code> lub <code>&lt;menu&gt;</code> nie zobaczymy nic.</p>
</div>
<div class="wykaz">
<h4>Zast±pienie zdeprecjonowanych znaczników</h4>
<p><q>No dobra</q> - powie kto¶. <q>Ale teraz jak chcê na przyk³±d pochyliæ tekst, to muszê wpisywac styl w ka¿dym znaczniku osobno. To ja ju¿ wole mieæ znaczniki zdeprecjonwoane.</q></p>
<p>Nie, wcale nie. Wystarczy ¿e do swojego arkusza stylów wkleisz ten kod:</p>
<pre>.i {
	font-style: italic;
}
.u {
	text-decoration: underline;
}
.s, .strike {
	text-decoration: line-trought;
}
</pre>
<p>Teraz, gdy bêdziesz chcia³ na przyk³ad pochyliæ tekst wystarczy wpisaæ:</p>
<pre>&lt;<var>znacznik</var> class="i"&gt;...&lt;znacznik&gt;</pre>
<p>Tak samo w przy <code>u</code>, <code>s</code> i <code>strike</code>. Po prostu wystarczy zmieniæ litekrê w atrubucie <code>class</code>.</p>
</div>
<div class="wykaz">
<h4>Blokada Anty-Zdeprecjonowanym Atrybutom</h4>
<p><b>Blokada Anty-Zdeprecjonowanym Atrybutom</b> dzia³a podobnie do <b>Blokada Anty-Zdeprecjonowanym Znacznikom</b>, ale - jak sama nazwa wskazuje, dotyczy nie zdeprecjonowanych znaczników (takich jak <code>&lt;u&gt;</code> czy <code>&lt;strike&gt;</code>) ale atrybutów (takich jak <code>&lt;bgcolor&gt;</code> czy <code>&lt;face&gt;</code>).</p>
<p>Tak wiêc, aby zablokowac zdeprecjonowane znaczniki, do arkusza stylów dodajemy nastepuj±cy kod:</p>
<pre>*[align] {
	text-align: left;
}
*[alink]:active {
	color: #000;
}
*[background] {
	background-image: none
}
*[bgcolor] {
	background-color: none;
}
*[border] {
	border-width: 0;
}
*[color] {
	color: #000;
}
*[face] {
	font-family: Times New Roman;
}
*[height] {
	height: 0px;
}
*[hspace] {
	margin-left: 0;
	margin-right: 0;
}
*[link]:link {
	color: #000;
}
*[size] {
	font-size: normal;
}
*[text] {
	color: #000;
}
ul[type], li[type] {
	list-style-type: disc
}
ol[type] {
	list-style-type: decimal;
}
*[vlink]:visited {
	color: #000;
}
*[vspace] {
	margin-top: 0;
	margin-bottom: 0;
}
*[width] {
	width: 0px;
}
</pre>
<p>Tutaj, tak samo jak w przypadku znaczników, nie wszystkie atrybuto maj± swoje zastosowanie w <code>CSS</code>. Tak wiêc nie wszystkie atrybuty mog± byæ zablokowane przez <code>CSS</code></p>.
<p>Jako kolor domy¶lny tekstu przyj±³em czarny (<code>#000</code>),a t³a bia³y (<code>#fff</code>). Je¶li jednak na swojej stronie uzywasz innego koloru tekstu / t³a, zmieñ kolory w kodzie podanym przeze mnie wed³ug swoich potrzeb.</p>
</div>
<?php include 'foot.php'; ?>

