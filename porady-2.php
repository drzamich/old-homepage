<?php include 'head.php'; ?>
<h2 class="title">Porady CSS</h2>
<div class="wykaz" style="margin-top: 5px;">
<h4 id="zerowanie_marginesow">Globalne zerowanie margines�w</h4>
<p>W j�zyku HTML niekt�re elementy maj� nadpisane marginesy zewn�trzne jak i wewnetrzne - r�ne w poszczeg�lnych przegl�darkach. Kiedy robimy stron� internetow�, po wstawieniu danego elementu posiadaj�cega taki w�a�nie nadpisany margines, strona mo�e nam si� nieoczekiwanie "rozjecha�". Aby tego unikn��, nale�y na pocz�tku arkusza styl�w umie�ci� nast�puj�cy kod:</p>
<pre>* {
	margin: 0;
	padding: 0;
}
</pre>
<p>Selektor <code>*</code> odpowiada a wszystkie mo�liwe elementy. Po wstawieniu wy�ej wymienionego kodu do akusza styl�w, nale�u ustawi� ��dane marginesy wed�ug w�asnego upodobania.</p>
</div>


<div class="wykaz">
<h4 id="kolejnosc_wpisywania_atrybutow_mieszanych">Kolejno�c wpisywania atrybut�w mieszanych</h4>
<p>W <code>CSS</code> przy niekt�rych znacznikach mamy mo�liwo�c wpisywania kilku warto�c do jednej cechy. Cz�� z nich ma ustalon� kolejno�� wpisywania. Na przyk�ad w <code>margin</code> przy wpisywaniu 4 warto�ci musimy najieprw wpisac warto�� g�rnego marginesu, potem prawego, dolnego i lewego.</p>
<p style="margin-top: 10px;">Tak wi�c dany element z wpisanym marginesem zewn�trznym:</p>
<pre>margin: 4px 5pt 1cm 2px</pre>
<p>B�dzie wygl�da� zupe�nie inaczej ni�:</p>
<pre>margin: 1cm 4px 5pt 2px</pre>
<p>Za to w takich cechach jak <code>background</code>, <code>border</code>, <code>outline</code> i <code>font</code> nie ma znaczenia w jaiej kolejno�ci wpiszemy poszczeg�lne warto�ci.</p>
<p>Tak wi�c dany element z wpisanym obramowaniem:</p>
<pre>border: 3px dotted #000</pre>
<p>B�dzie wygl�da� tak samo jak:</p>
<pre>border: dotted #000 3px</pre>
<p style="margin-top: 10px;">Dobrze jest za to ustali� sobie w jakiej kolejno�ci b�dziemy wpisywali atrybuty mieszane do r�nych cech. I tutaj trafiamy w sedno tego tematu. Cel tego jest taki, �e �atwo mo�na si� pogubi�, gdy bedziemy miec to samo napisane w kilku r�nych sposobach, a w dodatku po prostu lepiej jest miej� to wszystko ujednolicone.</p>
<p>Przedstawiam wi�� moj� propozycj� kolejno�ci warto�ci:</p>
<p style="margin-top: 10px;">Dla t�a (<code>background</code>):</p>
<pre>background: <var>kolor</var> <var>t�o obrazkowe</var> <var>powtarzanie</var> <var>pozycja</var> <var>zaczepienie</var></pre>
<p class="opis">Na przyk�ad:</p>
<pre>background: #ccc url('images/tlo.jpg') no-repeat center fixed</pre>
<p>Dla obramowania (<code>border</code>):</p>
<pre>border: <var>kolor</var> <var>szeroko��</var> <var>styl</var></pre>
<p class="opis">Na przyk�ad:</p>
<pre>border: #000 1px dashed</pre>
<p>Dla obrysu (<code>outline</code>)</p>
<pre>outline: <var>kolor</var> <var>szeroko��</var> <var>styl</var></pre>
<p class="opis">Na przyk�ad:</p>
<pre>outline: #fff 2px solid</pre>
<p>Dla czcionki (<code>font</code>)</p>
<pre>font: <var>wielko��</var> <var>rodzaj</var> <var>waga</var> <var>styl</var> <var>wariant</var></pre>
<p class="opis">Na przyk�ad:</p>
<pre style="margin-bottom: 10px;">font: 15pt Arial bold normal normal</pre>
<p>Oczywi�cie, ka�d� warto��  mo�na pomin��.</p>
</div>
<?php include 'foot.php'; ?>

