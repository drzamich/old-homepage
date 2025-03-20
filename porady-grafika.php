<?php include 'head.php'; ?>
<h2 class="title">Grafika</h2>
<div class="wykaz">
<h4 id="zmniejszanie_ciezaru_obrazka">Zmniejszanie ciêzaru obrazka</h4>
<p>Najbardziej znanymi formatami grafiki komputerowej s± formaty <code>bmp</code>, <code>gif</code> <code>jpg</code> i <code>png</code>.
Dziêla siê one na dwie grupy - ciê¿kie i lekkie. Do ciê¿akich nale¿± <code>bmp</code> i <code>png</code>, a do lekkich <code>jpg</code> i <code>gif</code>.
Ciêzkie odznaczaj± siê tym ¿e w poruwnaniu z lekkimi maj± bardzo du¿± wagê (okre¶lan± w kilobajtach - <code>kb</code>) i kiedy umie¶cimy taki obrazej na stronie internetowej, bardzo d³ugo siê ³aduje.
Za to obrazki lekkie mniej wa¿±, ale maj± mniejsz± jako¶c od tych ciê¿kich.
Opisze tutaj jak w szybki i prosty sposób obni¿yæ wagê obrazka nie obni¿aj±c jego jako¶ci.</p>
<ul style="padding-left: 20px;">
<li>Po pierwsze bêdzimy potrzebowali program IrfanView, który pos³u¿y nam do tego. Mo¿na ¶ci±gn±c go <a href="http://irfanview.com/">tutaj</a></li>
<li>Po ¶ci±gniêciu, zainstalowaniu i uruchomieniu programu, wybiramy z menu <code>Plik > Otwórz</code> (lub klawisz O)</li>
<li>Wybieramy obrazek, którego ciê¿ar chcemy zmniejszyæ
</li>
<li>Wybieramy opcje <code>Zapisz jako...</code></li>
<li>W dolnym menu wybieramy format <code>JPG</code></li>
<li>Na suwaku wybieramy zchowanie jako¶ci na <code>max.</code>, a nastêpnie zapisujemy go</li>
</ul>
</div>
<div class="wykaz">
<h4 id="masowe_zmniejszanie_ciezaru_obrazkow">Masowe zmniejszanie ciê¿aru obrazków</h4>
<p>Wiesz ju¿ jak zmniejszyæ wagê pojedynczeo obrazka. Co jednak gdy masz ca³y folder ciezkich obrazkow? Czy musisz po kolei zmniejszaæ wagê ka¿dego? Na szczê¶cnie nie! Wyt³umacze tutaj jak w jednej chwili zmniejszyæ wagê dowolnej ilo¶ci obrazków na raz</p>
<ul style="padding-left: 20px;">
<li>W programie IrfanView z menu wybieramy <code>Plik > Przetwarzanie wsadowe</code> (lub wci¶nij klawisz B)</li>
<li>Powinno pokazaæ nam siê du¿e okno z opcjami przetwarzania</li>
<li>Po lewej wybieramy folder w którymn mamy obrazki do zmniejszenia</li>
<li>Zaznaczamy wybrane obrazki, lub klikamy w przycisk <code>Zaznacz wszystko</code>, je¶li chcemy zmiejszyæ wszystkie obrazki w folderze</li>
<li>W polu <code>Katalog docelowy</code> wpisujemy adres folderu w którym bêd± znajdowac siê obrazki w nowym formacie</li>
<li>Z menu <code>Format wyj¶ciowy</code> wybieramy <code>JPG</code></li>
<li>Klikamy na start i czekamy a¿ program przetworzy wszystkie obrazki</li>
</ul>
</div>
<div class="wykaz">
<h4 id="zmniejszanie_wielkosci_obrazka">Zmniejszanie wielko¶ci obrazka</h4>
<p>Obrazki wystêpuj± w najró¿niejszych wymiarach. Czasami gdy jaki¶ obrazek jest zbyt du¿y, po wstawieniu na stronê przestawia inne elementy. Mo¿na go pomniejszyæ "si³owo" w taki sposób:</p>
<pre>&lt;img width="<var>szeroko¶æ</var>" height="<var>wysoko¶æ</var>" /&gt;</pre>
<p>Lub tak¿e:</p>
<pre>&lt;img style="width: <var>szeroko¶æ</var>; height: <var>wysoko¶æ</var>;" /&gt;</pre>
<p>Takie rozwi±zanie daje po¿±dany efekt, ale ma swoje z³e strony. Po pierwsze jako¶c obrazka jest du¿o gorsza, a po drugie mimo ma³ych rozmiarów obrazek wa¿y tyle samo co du¿y.</p>
<p>Zaprezentuj± tutaj jak przy pomocy programu IrfanView zmniejszyæ obrazek nie pogarszaj±c jego jako¶ci, a jednocze¶nie oszczêdziæ na ciê¿arze.</p>
<ul style="padding-left: 20px;">
<li>Uruchamiamy program IrfanView i otwieramy obrazk, który chcemy zmiejszyæ</li>
<li>Wybieramy w menu <code>Obraz - Zmieñ Rozmiar obrazka</code> (lub klawisze <code>Ctrl + R</code>)</li>
<li>Wybieramy opcjê <code>Nowy rozmiar:</code> lub <code>Nowy rozmiar jako procent orygina³u:</code>. Mo¿na tak¿e zostosowaæ autoamtyczne opcje takie jak <code>Po³owa</code>, <code>Podwójny</code> jak te¿ gotowe warto¶ci w pikselach</li>
<li>Po wszystkim klikamy na <code>OK</code> i zapisujemy obrazek pod ta sam± lub inn± nazw±</li>
</ul>
<p><b>Uwaga!</b> Prosze nie oczekiwac ¿e je¶lizmniejszymy obrazek 50 - krotnie bêdzie on wyra¿ny. Przy tak du¿ych zmianac nie jest to mo¿liwe.</p>
</div>
<div class="wykaz">
<h4 id="masowe_zmniejszanie_wielkosci_obrazkow">Masowe zmniejszanie wielko¶ci obrazków</h4>
<p>Tak jak wcze¶niej zmieniali¶my rozsze¿enie wielku grafik na raz, mo¿emy równie¿ zmniejszyæ ich rozmiary jednym klikniêciem.</p>
<ul style="padding-left: 20px;">
<li>Uruchamiamy program IrfanView i przechodzimy do znanej nam ju¿ opcji <code>Przetwarzania wsadowego</code> (<code>Plik - Przetwarzanie wsadowe</code> lub klawisz <code>B</code>)</li>
<li>Tak jak poprzedni, wybieramy obrazki, które chcemy zmniejszyæ i ustalamy folder docelowy</li>
<li>Mo¿emy tak¿e od razu zmieniæ ich rozsze¿enie, ale ustalmy ¿e obrazki s± ju¿ po¿±danych przez nas ciê¿arach</li>
<li>Jêsli to konieczne, zaznaczamy <code>Uzyj opcji zaawansowanych</code> i klikamny na przycisk <code>Opcje zaawansowane...</code></li>
<li>Zaznaczamy <code>ZMIANA ROZMIARU:</code> i wybieramy spo¶ród dwóch opcji <code>Nowy rozmiar:</code> lub <code>Nowy rozmiar jak oprocent orygina³u:</code></li>
<li>Po wpisaniu ¿±danych warto¶ci klikamy na <code>OK</code>, a nastêpnie na <code>Start</code> w poprzednim oknie</li>
</ul>
</div>
<?php include 'foot.php'; ?>

