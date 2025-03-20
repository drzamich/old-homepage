<?php include 'head.php'; ?>
<h2 class="title">Grafika</h2>
<div class="wykaz">
<h4 id="zmniejszanie_ciezaru_obrazka">Zmniejszanie ci�zaru obrazka</h4>
<p>Najbardziej znanymi formatami grafiki komputerowej s� formaty <code>bmp</code>, <code>gif</code> <code>jpg</code> i <code>png</code>.
Dzi�la si� one na dwie grupy - ci�kie i lekkie. Do ci�akich nale�� <code>bmp</code> i <code>png</code>, a do lekkich <code>jpg</code> i <code>gif</code>.
Ci�zkie odznaczaj� si� tym �e w poruwnaniu z lekkimi maj� bardzo du�� wag� (okre�lan� w kilobajtach - <code>kb</code>) i kiedy umie�cimy taki obrazej na stronie internetowej, bardzo d�ugo si� �aduje.
Za to obrazki lekkie mniej wa��, ale maj� mniejsz� jako�c od tych ci�kich.
Opisze tutaj jak w szybki i prosty spos�b obni�y� wag� obrazka nie obni�aj�c jego jako�ci.</p>
<ul style="padding-left: 20px;">
<li>Po pierwsze b�dzimy potrzebowali program IrfanView, kt�ry pos�u�y nam do tego. Mo�na �ci�gn�c go <a href="http://irfanview.com/">tutaj</a></li>
<li>Po �ci�gni�ciu, zainstalowaniu i uruchomieniu programu, wybiramy z menu <code>Plik > Otw�rz</code> (lub klawisz O)</li>
<li>Wybieramy obrazek, kt�rego ci�ar chcemy zmniejszy�
</li>
<li>Wybieramy opcje <code>Zapisz jako...</code></li>
<li>W dolnym menu wybieramy format <code>JPG</code></li>
<li>Na suwaku wybieramy zchowanie jako�ci na <code>max.</code>, a nast�pnie zapisujemy go</li>
</ul>
</div>
<div class="wykaz">
<h4 id="masowe_zmniejszanie_ciezaru_obrazkow">Masowe zmniejszanie ci�aru obrazk�w</h4>
<p>Wiesz ju� jak zmniejszy� wag� pojedynczeo obrazka. Co jednak gdy masz ca�y folder ciezkich obrazkow? Czy musisz po kolei zmniejsza� wag� ka�dego? Na szcz�cnie nie! Wyt�umacze tutaj jak w jednej chwili zmniejszy� wag� dowolnej ilo�ci obrazk�w na raz</p>
<ul style="padding-left: 20px;">
<li>W programie IrfanView z menu wybieramy <code>Plik > Przetwarzanie wsadowe</code> (lub wci�nij klawisz B)</li>
<li>Powinno pokaza� nam si� du�e okno z opcjami przetwarzania</li>
<li>Po lewej wybieramy folder w kt�rymn mamy obrazki do zmniejszenia</li>
<li>Zaznaczamy wybrane obrazki, lub klikamy w przycisk <code>Zaznacz wszystko</code>, je�li chcemy zmiejszy� wszystkie obrazki w folderze</li>
<li>W polu <code>Katalog docelowy</code> wpisujemy adres folderu w kt�rym b�d� znajdowac si� obrazki w nowym formacie</li>
<li>Z menu <code>Format wyj�ciowy</code> wybieramy <code>JPG</code></li>
<li>Klikamy na start i czekamy a� program przetworzy wszystkie obrazki</li>
</ul>
</div>
<div class="wykaz">
<h4 id="zmniejszanie_wielkosci_obrazka">Zmniejszanie wielko�ci obrazka</h4>
<p>Obrazki wyst�puj� w najr�niejszych wymiarach. Czasami gdy jaki� obrazek jest zbyt du�y, po wstawieniu na stron� przestawia inne elementy. Mo�na go pomniejszy� "si�owo" w taki spos�b:</p>
<pre>&lt;img width="<var>szeroko��</var>" height="<var>wysoko��</var>" /&gt;</pre>
<p>Lub tak�e:</p>
<pre>&lt;img style="width: <var>szeroko��</var>; height: <var>wysoko��</var>;" /&gt;</pre>
<p>Takie rozwi�zanie daje po��dany efekt, ale ma swoje z�e strony. Po pierwsze jako�c obrazka jest du�o gorsza, a po drugie mimo ma�ych rozmiar�w obrazek wa�y tyle samo co du�y.</p>
<p>Zaprezentuj� tutaj jak przy pomocy programu IrfanView zmniejszy� obrazek nie pogarszaj�c jego jako�ci, a jednocze�nie oszcz�dzi� na ci�arze.</p>
<ul style="padding-left: 20px;">
<li>Uruchamiamy program IrfanView i otwieramy obrazk, kt�ry chcemy zmiejszy�</li>
<li>Wybieramy w menu <code>Obraz - Zmie� Rozmiar obrazka</code> (lub klawisze <code>Ctrl + R</code>)</li>
<li>Wybieramy opcj� <code>Nowy rozmiar:</code> lub <code>Nowy rozmiar jako procent orygina�u:</code>. Mo�na tak�e zostosowa� autoamtyczne opcje takie jak <code>Po�owa</code>, <code>Podw�jny</code> jak te� gotowe warto�ci w pikselach</li>
<li>Po wszystkim klikamy na <code>OK</code> i zapisujemy obrazek pod ta sam� lub inn� nazw�</li>
</ul>
<p><b>Uwaga!</b> Prosze nie oczekiwac �e je�lizmniejszymy obrazek 50 - krotnie b�dzie on wyra�ny. Przy tak du�ych zmianac nie jest to mo�liwe.</p>
</div>
<div class="wykaz">
<h4 id="masowe_zmniejszanie_wielkosci_obrazkow">Masowe zmniejszanie wielko�ci obrazk�w</h4>
<p>Tak jak wcze�niej zmieniali�my rozsze�enie wielku grafik na raz, mo�emy r�wnie� zmniejszy� ich rozmiary jednym klikni�ciem.</p>
<ul style="padding-left: 20px;">
<li>Uruchamiamy program IrfanView i przechodzimy do znanej nam ju� opcji <code>Przetwarzania wsadowego</code> (<code>Plik - Przetwarzanie wsadowe</code> lub klawisz <code>B</code>)</li>
<li>Tak jak poprzedni, wybieramy obrazki, kt�re chcemy zmniejszy� i ustalamy folder docelowy</li>
<li>Mo�emy tak�e od razu zmieni� ich rozsze�enie, ale ustalmy �e obrazki s� ju� po��danych przez nas ci�arach</li>
<li>J�sli to konieczne, zaznaczamy <code>Uzyj opcji zaawansowanych</code> i klikamny na przycisk <code>Opcje zaawansowane...</code></li>
<li>Zaznaczamy <code>ZMIANA ROZMIARU:</code> i wybieramy spo�r�d dw�ch opcji <code>Nowy rozmiar:</code> lub <code>Nowy rozmiar jak oprocent orygina�u:</code></li>
<li>Po wpisaniu ��danych warto�ci klikamy na <code>OK</code>, a nast�pnie na <code>Start</code> w poprzednim oknie</li>
</ul>
</div>
<?php include 'foot.php'; ?>

