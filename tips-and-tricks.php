<?php include 'head.php'; ?>
<h2 class="title">Tips &amp; tricks - sztuczki i triki</h2>
<div class="wykaz">
<h4 id="wylaczanie_reklam_ogame">Wyłączanie reklam OGame.pl</h4>
<!-- <p>W <a href="http://ogame.pl" title="OGame - świetna gra internetowa">OGame</a> gra bardzo dużo osób. Także i ja. Bardzo czesto denerwowały mnie reklamy pojawiające się w grze. Na szczęście nie były to pop-up'y lecz bannery, jednak na tyle duże by skuteznie uprzykrzyć mi życie. Uporałem się z nimi i chciałbym podzielić się tą wiedzą.</p> -->
<ol>
<li>Będziemy potrzebowali przeglądarki <a href="http://www.mozilla-europe.org/pl/products/firefox/" title="Firefox - druga po Operze przeglądarka internetowa">Firefox</a>, oraz wtyczki <a href="https://addons.mozilla.org/pl/firefox/addon/2108" title="Stylish - wtyczka do firefoxa umożliwiająca tworzenie stylów uzytkownika">Stylish</a>.</li>
<li>Po zainstalowaniu Stylisha i ponownym uruchomieniu Firefoxa w prawym dolnym rogu powinna ukazać nam się taka ikonka: <img src="images/stylish.jpg" alt="Ikonka Stylish'a" /></li>
<li>Klikamy na nią i wybieramy opcję "<em>Zarządzaj arkuszami stylów</em>".</li>
<li>Klikamy na "<em>Stwórz</em>".</li>
<li>W polu "<em>Opis</em>" wpisujemy swoją własną nazwę.</li>
<li>W polu wpisywania kodu wpisujemy następujący kod:
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
<!-- <p>Aby zobaczyć efekty odśwież (jeśli w chwili pisania kodu masz ją włączoną) stronę OGame.</p> -->
<p class="up">Ten kod został <a href="http://userstyles.org/styles/4480">umieszczony na userstyles.org</a> Jeśli masz tam konto i przydał Ci się mój sposób, nie obrażę się jeśli zostawisz komentarz ;)</p>
</div>
<?php include 'foot.php'; ?>

