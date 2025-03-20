<?php include 'head.php'; ?>
<h2 class="title">Znaczniki i atrybuty zdeprecjonowane</h2>
<div class="wykaz">
<h4>Znaczniki zdeprecjonowane</h4>
<ul>
    <li><code>Applet</code> - aplet. Należy zastąpić go znacznikiem <code>&lt;object&gt;</code></li>
    <li><code>Basefont</code> - czcionka bazowa (domyślna). Zamiast niego nalezy nadac wybrane elementy znacznikowi <code>&lt;body&gt;</code>
    <p class="opis">Na przykład:</p>
    <pre>body { font-size: 15px; color: #000; font-family: arial; }</pre></li>
    <li><code>Center</code> - wyśrodkowanie. Aby wyśrodkowac tekst w danym znaczniku, nalezy nadac mu w CSS:
    <pre>text-align: cener;</pre>
    <p class="opis">Na przykład:</p>
    <pre>&lt;p style="text-align: cener;"&gt;</pre></li>
    <li><code>Dir</code>- wielokolumnowy spis zawartości. Nalezy zastąpić go znacznikiem <code>&lt;ul&gt;</code></li>
    <li><code>Font</code> - element czcionki. Został zastąpiony znacznikiem <code>&lt;span&gt;</code></li>
    <li><code>Isindex</code> - jednoliniowe pole tekstowe. Należy zastąpić go znacznikiem <code>&lt;input&gt;</code></li>
    <li><code>Menu</code> - spis elementów menu. Nalezy zastąpić go znacznikiem <code>&lt;ul&gt;</code></li>
    <li><code>S</code>, <code>Strike</code> - przekreślenie. Aby uzuskać taki sam efekt należy danemu elementowi nadać w CSS atrybuty:
    <pre>text-decoration: line-through;</pre>
    <p class="opis">Na przykład:</p>
    <pre>&lt;span style="text-decoration: line-through;"&gt;</pre></li>
    <li><code>U</code> - podkreślenie. Aby uzuskać taki sam efekt należy danemu elementowi nadać w CSS atrybuty:
    <pre>text-decoration: underline;</pre>
    <p class="opis">Na przykład:</p>
    <pre>&lt;span style="text-decoration: underline;"&gt;</pre></li>
</ul>
</div>
<div class="wykaz">
<h4>Atrybuty zdeprecjonowane</h4>
<ul>
    <li><code>align</code> - wyrównanie tekstu. Zamiast tego nalezy danemu elementowi nadac w wartości CSS:
<pre>text-align: <var>wyrównanie</var></pre></li>
    <li><code>alink</code> - kolor aktywnych odsyłaczy. Zamiast tego należy elementowi <code>A</code> nadać w pseudoklasę CSS:
<pre>a:hover {color: <var>kolor</var>}</pre></li>
    <li><code>background</code> - tło obrazkowe. Zamiast tego należy danemu elementowi nadać w wartości CSS:
<pre>background-image: url('<var>adres obrazka</var>')</pre></li>
    <li><code>bgcolor</code> - kolor tła. Zamiast tego nalezy danemu elementowi nadac w wartości CSS:
<pre>background-color: <var>kolor</var></pre></li>
    <li><code>border</code> - szereokośc obramowania. Zamiast tego nalezy danemu elementowi nadać w wartości CSS:
<pre>border-width: <var>szerokośc</var></pre></li>
    <li><code>clear</code> - określa, gdzie powinna się pojawić nowa linia. Brak zastąpienia w CSS</li>
    <li><code>code</code> -	plik klasy apletu. Brak zastąpienia w CSS.</li>
    <li><code>color</code> - kolor tekstu. Zamiast tego należy danemu elementowi nadać w wartości CSS:
<pre>color: <var>numer/nazwa koloru</var></pre></li>
    <li><code>compact</code> - redukuje odstępy pomiędzy pozycjami. Brak zastąpienia w CSS.</li>
    <li><code>face</code> - styl czcionki. Zamiast niego należy danemu elementowi nadać w wartości CSS:
<pre>font-family: <var>nazwa stylu</var></pre></li>
    <li><code>height</code> - wysokośc. Zamiast niego należy danemu elementowi nadać w wartości CSS:
<pre>height: <var>wysokość</var></pre></li>
    <li><code>hspace</code> - poziomy odstęp. Zamiast niego należy danemu elementowi nadać w wartości CSS:
<pre>margin-left: <var>odstęp od lewej</var>; margin-right: <var>odstęp od prawej</var>;</pre></li>
    <li><code>language</code> - predefiniowana nazwa języka skryptowego. Brak zastąpienia w CSS.</li>
    <li><code>link</code> - kolor odsyłaczy. Zamiast tego należy elementowi <code>A</code> nadac w CSS:
<pre>a {color: <var>kolor</var>}</pre></li>
    <li><code>noshade</code> - pozioma linia pozbawiona cienia. Brak zastąpienia w CSS.</li>
    <li><code>nowrap</code> - blokada zawijania tekstu. Brak zastąpienia w CSS.</li>
    <li><code>object</code> - plik zasobów. Brak zastąpienia w CSS.</li>
    <li><code>prompt</code> - tekst zachęty. Brak zastąpienia w CSS.</li>
    <li><code>size</code> - wielkość czcionki. Zamiast niego należy danemu elementowi nadać w wartości CSS:
<pre>font-size: <var>wielkość</var></pre></li>
    <li><code>start</code> - liczba początkowa. Brak zastąpienia w CSS.</li>
    <li><code>text</code> (<code>BODY</code>) - kolor teksty dokumentu. Zamiast niego należy elementowi BODY nadać w wartości CSS:
<pre>body {color: <var>numer/nazwa koloru</var>}</pre></li>
    <li><code>type</code> (<code>OL</code>, <code>UL</code>, <code>DL</code>) - styl wykazu. Zamiast niego należy elementowi <code>OL</code>, <code>UL</code> lub <code>DL</code> nadać w wartości CSS:
<pre>list-style-type: <var>typ</var></pre></li>
    <li><code>version</code> - wersja <code>HTML</code>. Nalezy uzywac deklaracji <span class="i">Doctype</span> na początku dokumentu. Więcej w dziale <a href="../porady-html">Porady HTML</a>.</li>
    <li><code>vlink</code> - kolor odwiedzonych odsyłaczy. Zamiast tego należy elementowi <code>A</code> nadać w pseudoklasę CSS:
<pre>a:visited {color: <var>kolor</var>}</pre></li>
    <li><code>vspace</code> - pionowy odstęp. Zamiast niego należy danemu elementowi nadać w wartości CSS:
<pre>margin-top: <var>odstęp od góry</var>; margin-bottom: <var>odstęp od dołu</var>;</pre></li>
</ul>
</div>
<div class="wykaz">
<h4>Blokada Anty-Zdeprecjonowanym</h4>
<p><b>Blokada Anty-Zdeprecjonowanym</b> to mój pomysl na to jak odzwyczaić się od używania znaczników zdeprecjonowanych. Polega ona na tym że w arkuszu styów <code>CSS</code> wpisujemy kod podany poniżej. Po wpisaniu tego kodu, jeśli dokument <code>(X)HTML</code> ma odniesienie do arkusza, to nie będą działały w nim choć niektóre znaczniki zdeprecjonowane - te które da się zablokowac używając <code>CSS</code>. A oto kod, który trzeba wkleić do swojego arkusza stylów:</p>
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
<p>Kod ten działa tak, że gdy wpiszemy w kodzie znacznik <code>&lt;i&gt;</code>, zamiast pochylonego tekstu wyświetli nam się zwykły, tak jakbyśmy w ogóle nie użyli. Podobnie w przypadku <code>&lt;u&gt;</code>, <code>&lt;s&gt;</code> i <code>&lt;strike&gt;</code>. Natomiast jeśli użyjemy <code>&lt;applet&gt;</code>, <code>&lt;dir&gt;</code>, <code>&lt;isindex&gt;</code> lub <code>&lt;menu&gt;</code> nie zobaczymy nic.</p>
</div>
<div class="wykaz">
<h4>Zastąpienie zdeprecjonowanych znaczników</h4>
<p><q>No dobra</q> - powie ktoś. <q>Ale teraz jak chcę na przykłąd pochylić tekst, to muszę wpisywac styl w każdym znaczniku osobno. To ja już wole mieć znaczniki zdeprecjonwoane.</q></p>
<p>Nie, wcale nie. Wystarczy że do swojego arkusza stylów wkleisz ten kod:</p>
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
<p>Teraz, gdy będziesz chciał na przykład pochylić tekst wystarczy wpisać:</p>
<pre>&lt;<var>znacznik</var> class="i"&gt;...&lt;znacznik&gt;</pre>
<p>Tak samo w przy <code>u</code>, <code>s</code> i <code>strike</code>. Po prostu wystarczy zmienić litekrę w atrubucie <code>class</code>.</p>
</div>
<div class="wykaz">
<h4>Blokada Anty-Zdeprecjonowanym Atrybutom</h4>
<p><b>Blokada Anty-Zdeprecjonowanym Atrybutom</b> działa podobnie do <b>Blokada Anty-Zdeprecjonowanym Znacznikom</b>, ale - jak sama nazwa wskazuje, dotyczy nie zdeprecjonowanych znaczników (takich jak <code>&lt;u&gt;</code> czy <code>&lt;strike&gt;</code>) ale atrybutów (takich jak <code>&lt;bgcolor&gt;</code> czy <code>&lt;face&gt;</code>).</p>
<p>Tak więc, aby zablokowac zdeprecjonowane znaczniki, do arkusza stylów dodajemy nastepujący kod:</p>
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
<p>Tutaj, tak samo jak w przypadku znaczników, nie wszystkie atrybuto mają swoje zastosowanie w <code>CSS</code>. Tak więc nie wszystkie atrybuty mogą być zablokowane przez <code>CSS</code></p>.
<p>Jako kolor domyślny tekstu przyjąłem czarny (<code>#000</code>),a tła biały (<code>#fff</code>). Jeśli jednak na swojej stronie uzywasz innego koloru tekstu / tła, zmień kolory w kodzie podanym przeze mnie według swoich potrzeb.</p>
</div>
<?php include 'foot.php'; ?>

