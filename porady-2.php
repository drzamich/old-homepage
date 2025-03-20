<?php include 'head.php'; ?>
<h2 class="title">Porady CSS</h2>
<div class="wykaz" style="margin-top: 5px;">
<h4 id="zerowanie_marginesow">Globalne zerowanie marginesów</h4>
<p>W języku HTML niektóre elementy mają nadpisane marginesy zewnętrzne jak i wewnetrzne - różne w poszczególnych przeglądarkach. Kiedy robimy stronę internetową, po wstawieniu danego elementu posiadającega taki właśnie nadpisany margines, strona może nam się nieoczekiwanie "rozjechać". Aby tego uniknąć, należy na początku arkusza stylów umieścić następujący kod:</p>
<pre>* {
	margin: 0;
	padding: 0;
}
</pre>
<p>Selektor <code>*</code> odpowiada a wszystkie możliwe elementy. Po wstawieniu wyżej wymienionego kodu do akusza stylów, należu ustawić żądane marginesy według własnego upodobania.</p>
</div>


<div class="wykaz">
<h4 id="kolejnosc_wpisywania_atrybutow_mieszanych">Kolejnośc wpisywania atrybutów mieszanych</h4>
<p>W <code>CSS</code> przy niektórych znacznikach mamy możliwośc wpisywania kilku wartośc do jednej cechy. Część z nich ma ustaloną kolejność wpisywania. Na przykład w <code>margin</code> przy wpisywaniu 4 wartości musimy najieprw wpisac wartość górnego marginesu, potem prawego, dolnego i lewego.</p>
<p style="margin-top: 10px;">Tak więc dany element z wpisanym marginesem zewnętrznym:</p>
<pre>margin: 4px 5pt 1cm 2px</pre>
<p>Będzie wyglądał zupełnie inaczej niż:</p>
<pre>margin: 1cm 4px 5pt 2px</pre>
<p>Za to w takich cechach jak <code>background</code>, <code>border</code>, <code>outline</code> i <code>font</code> nie ma znaczenia w jaiej kolejności wpiszemy poszczególne wartości.</p>
<p>Tak więc dany element z wpisanym obramowaniem:</p>
<pre>border: 3px dotted #000</pre>
<p>Będzie wyglądał tak samo jak:</p>
<pre>border: dotted #000 3px</pre>
<p style="margin-top: 10px;">Dobrze jest za to ustalić sobie w jakiej kolejności będziemy wpisywali atrybuty mieszane do różnych cech. I tutaj trafiamy w sedno tego tematu. Cel tego jest taki, że łatwo można się pogubić, gdy bedziemy miec to samo napisane w kilku różnych sposobach, a w dodatku po prostu lepiej jest miejć to wszystko ujednolicone.</p>
<p>Przedstawiam więć moją propozycję kolejności wartości:</p>
<p style="margin-top: 10px;">Dla tła (<code>background</code>):</p>
<pre>background: <var>kolor</var> <var>tło obrazkowe</var> <var>powtarzanie</var> <var>pozycja</var> <var>zaczepienie</var></pre>
<p class="opis">Na przykład:</p>
<pre>background: #ccc url('images/tlo.jpg') no-repeat center fixed</pre>
<p>Dla obramowania (<code>border</code>):</p>
<pre>border: <var>kolor</var> <var>szerokość</var> <var>styl</var></pre>
<p class="opis">Na przykład:</p>
<pre>border: #000 1px dashed</pre>
<p>Dla obrysu (<code>outline</code>)</p>
<pre>outline: <var>kolor</var> <var>szerokość</var> <var>styl</var></pre>
<p class="opis">Na przykład:</p>
<pre>outline: #fff 2px solid</pre>
<p>Dla czcionki (<code>font</code>)</p>
<pre>font: <var>wielkość</var> <var>rodzaj</var> <var>waga</var> <var>styl</var> <var>wariant</var></pre>
<p class="opis">Na przykład:</p>
<pre style="margin-bottom: 10px;">font: 15pt Arial bold normal normal</pre>
<p>Oczywiście, każdą wartość  można pominąć.</p>
</div>
<?php include 'foot.php'; ?>

