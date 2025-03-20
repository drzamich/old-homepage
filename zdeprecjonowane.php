<?php include 'head.php'; ?>
<h2 class="title">Znaczniki i atrybuty zdeprecjonowane</h2>
<div class="wykaz">
<h4>Znaczniki zdeprecjonowane</h4>
<ul>
    <li><code>Applet</code> - aplet. Nale�y zast�pi� go znacznikiem <code>&lt;object&gt;</code></li>
    <li><code>Basefont</code> - czcionka bazowa (domy�lna). Zamiast niego nalezy nadac wybrane elementy znacznikowi <code>&lt;body&gt;</code>
    <p class="opis">Na przyk�ad:</p>
    <pre>body { font-size: 15px; color: #000; font-family: arial; }</pre></li>
    <li><code>Center</code> - wy�rodkowanie. Aby wy�rodkowac tekst w danym znaczniku, nalezy nadac mu w CSS:
    <pre>text-align: cener;</pre>
    <p class="opis">Na przyk�ad:</p>
    <pre>&lt;p style="text-align: cener;"&gt;</pre></li>
    <li><code>Dir</code>- wielokolumnowy spis zawarto�ci. Nalezy zast�pi� go znacznikiem <code>&lt;ul&gt;</code></li>
    <li><code>Font</code> - element czcionki. Zosta� zast�piony znacznikiem <code>&lt;span&gt;</code></li>
    <li><code>Isindex</code> - jednoliniowe pole tekstowe. Nale�y zast�pi� go znacznikiem <code>&lt;input&gt;</code></li>
    <li><code>Menu</code> - spis element�w menu. Nalezy zast�pi� go znacznikiem <code>&lt;ul&gt;</code></li>
    <li><code>S</code>, <code>Strike</code> - przekre�lenie. Aby uzuska� taki sam efekt nale�y danemu elementowi nada� w CSS atrybuty:
    <pre>text-decoration: line-through;</pre>
    <p class="opis">Na przyk�ad:</p>
    <pre>&lt;span style="text-decoration: line-through;"&gt;</pre></li>
    <li><code>U</code> - podkre�lenie. Aby uzuska� taki sam efekt nale�y danemu elementowi nada� w CSS atrybuty:
    <pre>text-decoration: underline;</pre>
    <p class="opis">Na przyk�ad:</p>
    <pre>&lt;span style="text-decoration: underline;"&gt;</pre></li>
</ul>
</div>
<div class="wykaz">
<h4>Atrybuty zdeprecjonowane</h4>
<ul>
    <li><code>align</code> - wyr�wnanie tekstu. Zamiast tego nalezy danemu elementowi nadac w warto�ci CSS:
<pre>text-align: <var>wyr�wnanie</var></pre></li>
    <li><code>alink</code> - kolor aktywnych odsy�aczy. Zamiast tego nale�y elementowi <code>A</code> nada� w pseudoklas� CSS:
<pre>a:hover {color: <var>kolor</var>}</pre></li>
    <li><code>background</code> - t�o obrazkowe. Zamiast tego nale�y danemu elementowi nada� w warto�ci CSS:
<pre>background-image: url('<var>adres obrazka</var>')</pre></li>
    <li><code>bgcolor</code> - kolor t�a. Zamiast tego nalezy danemu elementowi nadac w warto�ci CSS:
<pre>background-color: <var>kolor</var></pre></li>
    <li><code>border</code> - szereoko�c obramowania. Zamiast tego nalezy danemu elementowi nada� w warto�ci CSS:
<pre>border-width: <var>szeroko�c</var></pre></li>
    <li><code>clear</code> - okre�la, gdzie powinna si� pojawi� nowa linia. Brak zast�pienia w CSS</li>
    <li><code>code</code> -	plik klasy apletu. Brak zast�pienia w CSS.</li>
    <li><code>color</code> - kolor tekstu. Zamiast tego nale�y danemu elementowi nada� w warto�ci CSS:
<pre>color: <var>numer/nazwa koloru</var></pre></li>
    <li><code>compact</code> - redukuje odst�py pomi�dzy pozycjami. Brak zast�pienia w CSS.</li>
    <li><code>face</code> - styl czcionki. Zamiast niego nale�y danemu elementowi nada� w warto�ci CSS:
<pre>font-family: <var>nazwa stylu</var></pre></li>
    <li><code>height</code> - wysoko�c. Zamiast niego nale�y danemu elementowi nada� w warto�ci CSS:
<pre>height: <var>wysoko��</var></pre></li>
    <li><code>hspace</code> - poziomy odst�p. Zamiast niego nale�y danemu elementowi nada� w warto�ci CSS:
<pre>margin-left: <var>odst�p od lewej</var>; margin-right: <var>odst�p od prawej</var>;</pre></li>
    <li><code>language</code> - predefiniowana nazwa j�zyka skryptowego. Brak zast�pienia w CSS.</li>
    <li><code>link</code> - kolor odsy�aczy. Zamiast tego nale�y elementowi <code>A</code> nadac w CSS:
<pre>a {color: <var>kolor</var>}</pre></li>
    <li><code>noshade</code> - pozioma linia pozbawiona cienia. Brak zast�pienia w CSS.</li>
    <li><code>nowrap</code> - blokada zawijania tekstu. Brak zast�pienia w CSS.</li>
    <li><code>object</code> - plik zasob�w. Brak zast�pienia w CSS.</li>
    <li><code>prompt</code> - tekst zach�ty. Brak zast�pienia w CSS.</li>
    <li><code>size</code> - wielko�� czcionki. Zamiast niego nale�y danemu elementowi nada� w warto�ci CSS:
<pre>font-size: <var>wielko��</var></pre></li>
    <li><code>start</code> - liczba pocz�tkowa. Brak zast�pienia w CSS.</li>
    <li><code>text</code> (<code>BODY</code>) - kolor teksty dokumentu. Zamiast niego nale�y elementowi BODY nada� w warto�ci CSS:
<pre>body {color: <var>numer/nazwa koloru</var>}</pre></li>
    <li><code>type</code> (<code>OL</code>, <code>UL</code>, <code>DL</code>) - styl wykazu. Zamiast niego nale�y elementowi <code>OL</code>, <code>UL</code> lub <code>DL</code> nada� w warto�ci CSS:
<pre>list-style-type: <var>typ</var></pre></li>
    <li><code>version</code> - wersja <code>HTML</code>. Nalezy uzywac deklaracji <span class="i">Doctype</span> na pocz�tku dokumentu. Wi�cej w dziale <a href="../porady-html">Porady HTML</a>.</li>
    <li><code>vlink</code> - kolor odwiedzonych odsy�aczy. Zamiast tego nale�y elementowi <code>A</code> nada� w pseudoklas� CSS:
<pre>a:visited {color: <var>kolor</var>}</pre></li>
    <li><code>vspace</code> - pionowy odst�p. Zamiast niego nale�y danemu elementowi nada� w warto�ci CSS:
<pre>margin-top: <var>odst�p od g�ry</var>; margin-bottom: <var>odst�p od do�u</var>;</pre></li>
</ul>
</div>
<div class="wykaz">
<h4>Blokada Anty-Zdeprecjonowanym</h4>
<p><b>Blokada Anty-Zdeprecjonowanym</b> to m�j pomysl na to jak odzwyczai� si� od u�ywania znacznik�w zdeprecjonowanych. Polega ona na tym �e w arkuszu sty�w <code>CSS</code> wpisujemy kod podany poni�ej. Po wpisaniu tego kodu, je�li dokument <code>(X)HTML</code> ma odniesienie do arkusza, to nie b�d� dzia�a�y w nim cho� niekt�re znaczniki zdeprecjonowane - te kt�re da si� zablokowac u�ywaj�c <code>CSS</code>. A oto kod, kt�ry trzeba wklei� do swojego arkusza styl�w:</p>
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
<p>Kod ten dzia�a tak, �e gdy wpiszemy w kodzie znacznik <code>&lt;i&gt;</code>, zamiast pochylonego tekstu wy�wietli nam si� zwyk�y, tak jakby�my w og�le nie u�yli. Podobnie w przypadku <code>&lt;u&gt;</code>, <code>&lt;s&gt;</code> i <code>&lt;strike&gt;</code>. Natomiast je�li u�yjemy <code>&lt;applet&gt;</code>, <code>&lt;dir&gt;</code>, <code>&lt;isindex&gt;</code> lub <code>&lt;menu&gt;</code> nie zobaczymy nic.</p>
</div>
<div class="wykaz">
<h4>Zast�pienie zdeprecjonowanych znacznik�w</h4>
<p><q>No dobra</q> - powie kto�. <q>Ale teraz jak chc� na przyk��d pochyli� tekst, to musz� wpisywac styl w ka�dym znaczniku osobno. To ja ju� wole mie� znaczniki zdeprecjonwoane.</q></p>
<p>Nie, wcale nie. Wystarczy �e do swojego arkusza styl�w wkleisz ten kod:</p>
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
<p>Teraz, gdy b�dziesz chcia� na przyk�ad pochyli� tekst wystarczy wpisa�:</p>
<pre>&lt;<var>znacznik</var> class="i"&gt;...&lt;znacznik&gt;</pre>
<p>Tak samo w przy <code>u</code>, <code>s</code> i <code>strike</code>. Po prostu wystarczy zmieni� litekr� w atrubucie <code>class</code>.</p>
</div>
<div class="wykaz">
<h4>Blokada Anty-Zdeprecjonowanym Atrybutom</h4>
<p><b>Blokada Anty-Zdeprecjonowanym Atrybutom</b> dzia�a podobnie do <b>Blokada Anty-Zdeprecjonowanym Znacznikom</b>, ale - jak sama nazwa wskazuje, dotyczy nie zdeprecjonowanych znacznik�w (takich jak <code>&lt;u&gt;</code> czy <code>&lt;strike&gt;</code>) ale atrybut�w (takich jak <code>&lt;bgcolor&gt;</code> czy <code>&lt;face&gt;</code>).</p>
<p>Tak wi�c, aby zablokowac zdeprecjonowane znaczniki, do arkusza styl�w dodajemy nastepuj�cy kod:</p>
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
<p>Tutaj, tak samo jak w przypadku znacznik�w, nie wszystkie atrybuto maj� swoje zastosowanie w <code>CSS</code>. Tak wi�c nie wszystkie atrybuty mog� by� zablokowane przez <code>CSS</code></p>.
<p>Jako kolor domy�lny tekstu przyj��em czarny (<code>#000</code>),a t�a bia�y (<code>#fff</code>). Je�li jednak na swojej stronie uzywasz innego koloru tekstu / t�a, zmie� kolory w kodzie podanym przeze mnie wed�ug swoich potrzeb.</p>
</div>
<?php include 'foot.php'; ?>

