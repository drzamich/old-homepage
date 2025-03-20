<?php include 'head.php'; ?>
<h2 class="title">Porady CSS</h2>
<div class="wykaz" style="margin-top: 5px;">
<h4 id="zerowanie_marginesow">Globalne zerowanie marginesów</h4>
<p>W jêzyku HTML niektóre elementy maj± nadpisane marginesy zewnêtrzne jak i wewnetrzne - ró¿ne w poszczególnych przegl±darkach. Kiedy robimy stronê internetow±, po wstawieniu danego elementu posiadaj±cega taki w³a¶nie nadpisany margines, strona mo¿e nam siê nieoczekiwanie "rozjechaæ". Aby tego unikn±æ, nale¿y na pocz±tku arkusza stylów umie¶ciæ nastêpuj±cy kod:</p>
<pre>* {
	margin: 0;
	padding: 0;
}
</pre>
<p>Selektor <code>*</code> odpowiada a wszystkie mo¿liwe elementy. Po wstawieniu wy¿ej wymienionego kodu do akusza stylów, nale¿u ustawiæ ¿±dane marginesy wed³ug w³asnego upodobania.</p>
</div>


<div class="wykaz">
<h4 id="kolejnosc_wpisywania_atrybutow_mieszanych">Kolejno¶c wpisywania atrybutów mieszanych</h4>
<p>W <code>CSS</code> przy niektórych znacznikach mamy mo¿liwo¶c wpisywania kilku warto¶c do jednej cechy. Czê¶æ z nich ma ustalon± kolejno¶æ wpisywania. Na przyk³ad w <code>margin</code> przy wpisywaniu 4 warto¶ci musimy najieprw wpisac warto¶æ górnego marginesu, potem prawego, dolnego i lewego.</p>
<p style="margin-top: 10px;">Tak wiêc dany element z wpisanym marginesem zewnêtrznym:</p>
<pre>margin: 4px 5pt 1cm 2px</pre>
<p>Bêdzie wygl±da³ zupe³nie inaczej ni¿:</p>
<pre>margin: 1cm 4px 5pt 2px</pre>
<p>Za to w takich cechach jak <code>background</code>, <code>border</code>, <code>outline</code> i <code>font</code> nie ma znaczenia w jaiej kolejno¶ci wpiszemy poszczególne warto¶ci.</p>
<p>Tak wiêc dany element z wpisanym obramowaniem:</p>
<pre>border: 3px dotted #000</pre>
<p>Bêdzie wygl±da³ tak samo jak:</p>
<pre>border: dotted #000 3px</pre>
<p style="margin-top: 10px;">Dobrze jest za to ustaliæ sobie w jakiej kolejno¶ci bêdziemy wpisywali atrybuty mieszane do ró¿nych cech. I tutaj trafiamy w sedno tego tematu. Cel tego jest taki, ¿e ³atwo mo¿na siê pogubiæ, gdy bedziemy miec to samo napisane w kilku ró¿nych sposobach, a w dodatku po prostu lepiej jest miejæ to wszystko ujednolicone.</p>
<p>Przedstawiam wiêæ moj± propozycjê kolejno¶ci warto¶ci:</p>
<p style="margin-top: 10px;">Dla t³a (<code>background</code>):</p>
<pre>background: <var>kolor</var> <var>t³o obrazkowe</var> <var>powtarzanie</var> <var>pozycja</var> <var>zaczepienie</var></pre>
<p class="opis">Na przyk³ad:</p>
<pre>background: #ccc url('images/tlo.jpg') no-repeat center fixed</pre>
<p>Dla obramowania (<code>border</code>):</p>
<pre>border: <var>kolor</var> <var>szeroko¶æ</var> <var>styl</var></pre>
<p class="opis">Na przyk³ad:</p>
<pre>border: #000 1px dashed</pre>
<p>Dla obrysu (<code>outline</code>)</p>
<pre>outline: <var>kolor</var> <var>szeroko¶æ</var> <var>styl</var></pre>
<p class="opis">Na przyk³ad:</p>
<pre>outline: #fff 2px solid</pre>
<p>Dla czcionki (<code>font</code>)</p>
<pre>font: <var>wielko¶æ</var> <var>rodzaj</var> <var>waga</var> <var>styl</var> <var>wariant</var></pre>
<p class="opis">Na przyk³ad:</p>
<pre style="margin-bottom: 10px;">font: 15pt Arial bold normal normal</pre>
<p>Oczywi¶cie, ka¿d± warto¶æ  mo¿na pomin±æ.</p>
</div>
<?php include 'foot.php'; ?>

