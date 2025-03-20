<?php include 'head.php'; ?>
<h2 class="title">Tips &amp; tricks - sztuczki i triki</h2>
<div class="wykaz">
<h4 id="wylaczanie_reklam_ogame">Wy³±czanie reklam OGame.pl</h4>
<!-- <p>W <a href="http://ogame.pl" title="OGame - ¶wietna gra internetowa">OGame</a> gra bardzo du¿o osób. Tak¿e i ja. Bardzo czesto denerwowa³y mnie reklamy pojawiaj±ce siê w grze. Na szczê¶cie nie by³y to pop-up'y lecz bannery, jednak na tyle du¿e by skuteznie uprzykrzyæ mi ¿ycie. Upora³em siê z nimi i chcia³bym podzieliæ siê t± wiedz±.</p> -->
<ol>
<li>Bêdziemy potrzebowali przegl±darki <a href="http://www.mozilla-europe.org/pl/products/firefox/" title="Firefox - druga po Operze przegl±darka internetowa">Firefox</a>, oraz wtyczki <a href="https://addons.mozilla.org/pl/firefox/addon/2108" title="Stylish - wtyczka do firefoxa umo¿liwiaj±ca tworzenie stylów uzytkownika">Stylish</a>.</li>
<li>Po zainstalowaniu Stylisha i ponownym uruchomieniu Firefoxa w prawym dolnym rogu powinna ukazaæ nam siê taka ikonka: <img src="images/stylish.jpg" alt="Ikonka Stylish'a" /></li>
<li>Klikamy na ni± i wybieramy opcjê "<em>Zarz±dzaj arkuszami stylów</em>".</li>
<li>Klikamy na "<em>Stwórz</em>".</li>
<li>W polu "<em>Opis</em>" wpisujemy swoj± w³asn± nazwê.</li>
<li>W polu wpisywania kodu wpisujemy nastêpuj±cy kod:
<pre>
/* Wylaczanie reklam w OGame.
   Copyleft by Drzamich 2007.
   (drzamich.boo.pl)
*/
@namespace url(http://www.w3.org/1999/xhtml);

@-moz-document domain("s<strong>NumerTwojegoUni</strong>.ogame.onet.pl") {
#combox_container {display: none !important;}
}
</pre>
</li>
<li>Klikamy na "<em>Zapisz</em>".</li>
</ol>
<!-- <p>Aby zobaczyæ efekty od¶wie¿ (je¶li w chwili pisania kodu masz j± w³±czon±) stronê OGame.</p> -->
<p class="up">Ten kod zosta³ <a href="http://userstyles.org/styles/4480">umieszczony na userstyles.org</a> Je¶li masz tam konto i przyda³ Ci siê mój sposób, nie obra¿ê siê je¶li zostawisz komentarz ;)</p>
</div>
<?php include 'foot.php'; ?>

