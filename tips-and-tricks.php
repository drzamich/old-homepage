<?php include 'head.php'; ?>
<h2 class="title">Tips &amp; tricks - sztuczki i triki</h2>
<div class="wykaz">
<h4 id="wylaczanie_reklam_ogame">Wy��czanie reklam OGame.pl</h4>
<!-- <p>W <a href="http://ogame.pl" title="OGame - �wietna gra internetowa">OGame</a> gra bardzo du�o os�b. Tak�e i ja. Bardzo czesto denerwowa�y mnie reklamy pojawiaj�ce si� w grze. Na szcz�cie nie by�y to pop-up'y lecz bannery, jednak na tyle du�e by skuteznie uprzykrzy� mi �ycie. Upora�em si� z nimi i chcia�bym podzieli� si� t� wiedz�.</p> -->
<ol>
<li>B�dziemy potrzebowali przegl�darki <a href="http://www.mozilla-europe.org/pl/products/firefox/" title="Firefox - druga po Operze przegl�darka internetowa">Firefox</a>, oraz wtyczki <a href="https://addons.mozilla.org/pl/firefox/addon/2108" title="Stylish - wtyczka do firefoxa umo�liwiaj�ca tworzenie styl�w uzytkownika">Stylish</a>.</li>
<li>Po zainstalowaniu Stylisha i ponownym uruchomieniu Firefoxa w prawym dolnym rogu powinna ukaza� nam si� taka ikonka: <img src="images/stylish.jpg" alt="Ikonka Stylish'a" /></li>
<li>Klikamy na ni� i wybieramy opcj� "<em>Zarz�dzaj arkuszami styl�w</em>".</li>
<li>Klikamy na "<em>Stw�rz</em>".</li>
<li>W polu "<em>Opis</em>" wpisujemy swoj� w�asn� nazw�.</li>
<li>W polu wpisywania kodu wpisujemy nast�puj�cy kod:
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
<!-- <p>Aby zobaczy� efekty od�wie� (je�li w chwili pisania kodu masz j� w��czon�) stron� OGame.</p> -->
<p class="up">Ten kod zosta� <a href="http://userstyles.org/styles/4480">umieszczony na userstyles.org</a> Je�li masz tam konto i przyda� Ci si� m�j spos�b, nie obra�� si� je�li zostawisz komentarz ;)</p>
</div>
<?php include 'foot.php'; ?>

