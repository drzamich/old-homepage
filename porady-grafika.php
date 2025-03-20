<?php include 'head.php'; ?>
<h2 class="title">Grafika</h2>
<div class="wykaz">
<h4 id="zmniejszanie_ciezaru_obrazka">Zmniejszanie cięzaru obrazka</h4>
<p>Najbardziej znanymi formatami grafiki komputerowej są formaty <code>bmp</code>, <code>gif</code> <code>jpg</code> i <code>png</code>.
Dzięla się one na dwie grupy - ciężkie i lekkie. Do ciężakich należą <code>bmp</code> i <code>png</code>, a do lekkich <code>jpg</code> i <code>gif</code>.
Cięzkie odznaczają się tym że w poruwnaniu z lekkimi mają bardzo dużą wagę (określaną w kilobajtach - <code>kb</code>) i kiedy umieścimy taki obrazej na stronie internetowej, bardzo długo się ładuje.
Za to obrazki lekkie mniej ważą, ale mają mniejszą jakośc od tych ciężkich.
Opisze tutaj jak w szybki i prosty sposób obniżyć wagę obrazka nie obniżając jego jakości.</p>
<ul style="padding-left: 20px;">
<li>Po pierwsze będzimy potrzebowali program IrfanView, który posłuży nam do tego. Można ściągnąc go <a href="http://irfanview.com/">tutaj</a></li>
<li>Po ściągnięciu, zainstalowaniu i uruchomieniu programu, wybiramy z menu <code>Plik > Otwórz</code> (lub klawisz O)</li>
<li>Wybieramy obrazek, którego ciężar chcemy zmniejszyć
</li>
<li>Wybieramy opcje <code>Zapisz jako...</code></li>
<li>W dolnym menu wybieramy format <code>JPG</code></li>
<li>Na suwaku wybieramy zchowanie jakości na <code>max.</code>, a następnie zapisujemy go</li>
</ul>
</div>
<div class="wykaz">
<h4 id="masowe_zmniejszanie_ciezaru_obrazkow">Masowe zmniejszanie ciężaru obrazków</h4>
<p>Wiesz już jak zmniejszyć wagę pojedynczeo obrazka. Co jednak gdy masz cały folder ciezkich obrazkow? Czy musisz po kolei zmniejszać wagę każdego? Na szczęścnie nie! Wytłumacze tutaj jak w jednej chwili zmniejszyć wagę dowolnej ilości obrazków na raz</p>
<ul style="padding-left: 20px;">
<li>W programie IrfanView z menu wybieramy <code>Plik > Przetwarzanie wsadowe</code> (lub wciśnij klawisz B)</li>
<li>Powinno pokazać nam się duże okno z opcjami przetwarzania</li>
<li>Po lewej wybieramy folder w którymn mamy obrazki do zmniejszenia</li>
<li>Zaznaczamy wybrane obrazki, lub klikamy w przycisk <code>Zaznacz wszystko</code>, jeśli chcemy zmiejszyć wszystkie obrazki w folderze</li>
<li>W polu <code>Katalog docelowy</code> wpisujemy adres folderu w którym będą znajdowac się obrazki w nowym formacie</li>
<li>Z menu <code>Format wyjściowy</code> wybieramy <code>JPG</code></li>
<li>Klikamy na start i czekamy aż program przetworzy wszystkie obrazki</li>
</ul>
</div>
<div class="wykaz">
<h4 id="zmniejszanie_wielkosci_obrazka">Zmniejszanie wielkości obrazka</h4>
<p>Obrazki występują w najróżniejszych wymiarach. Czasami gdy jakiś obrazek jest zbyt duży, po wstawieniu na stronę przestawia inne elementy. Można go pomniejszyć "siłowo" w taki sposób:</p>
<pre>&lt;img width="<var>szerokość</var>" height="<var>wysokość</var>" /&gt;</pre>
<p>Lub także:</p>
<pre>&lt;img style="width: <var>szerokość</var>; height: <var>wysokość</var>;" /&gt;</pre>
<p>Takie rozwiązanie daje pożądany efekt, ale ma swoje złe strony. Po pierwsze jakośc obrazka jest dużo gorsza, a po drugie mimo małych rozmiarów obrazek waży tyle samo co duży.</p>
<p>Zaprezentują tutaj jak przy pomocy programu IrfanView zmniejszyć obrazek nie pogarszając jego jakości, a jednocześnie oszczędzić na ciężarze.</p>
<ul style="padding-left: 20px;">
<li>Uruchamiamy program IrfanView i otwieramy obrazk, który chcemy zmiejszyć</li>
<li>Wybieramy w menu <code>Obraz - Zmień Rozmiar obrazka</code> (lub klawisze <code>Ctrl + R</code>)</li>
<li>Wybieramy opcję <code>Nowy rozmiar:</code> lub <code>Nowy rozmiar jako procent oryginału:</code>. Można także zostosować autoamtyczne opcje takie jak <code>Połowa</code>, <code>Podwójny</code> jak też gotowe wartości w pikselach</li>
<li>Po wszystkim klikamy na <code>OK</code> i zapisujemy obrazek pod ta samą lub inną nazwą</li>
</ul>
<p><b>Uwaga!</b> Prosze nie oczekiwac że jeślizmniejszymy obrazek 50 - krotnie będzie on wyrażny. Przy tak dużych zmianac nie jest to możliwe.</p>
</div>
<div class="wykaz">
<h4 id="masowe_zmniejszanie_wielkosci_obrazkow">Masowe zmniejszanie wielkości obrazków</h4>
<p>Tak jak wcześniej zmienialiśmy rozszeżenie wielku grafik na raz, możemy również zmniejszyć ich rozmiary jednym kliknięciem.</p>
<ul style="padding-left: 20px;">
<li>Uruchamiamy program IrfanView i przechodzimy do znanej nam już opcji <code>Przetwarzania wsadowego</code> (<code>Plik - Przetwarzanie wsadowe</code> lub klawisz <code>B</code>)</li>
<li>Tak jak poprzedni, wybieramy obrazki, które chcemy zmniejszyć i ustalamy folder docelowy</li>
<li>Możemy także od razu zmienić ich rozszeżenie, ale ustalmy że obrazki są już pożądanych przez nas ciężarach</li>
<li>Jęsli to konieczne, zaznaczamy <code>Uzyj opcji zaawansowanych</code> i klikamny na przycisk <code>Opcje zaawansowane...</code></li>
<li>Zaznaczamy <code>ZMIANA ROZMIARU:</code> i wybieramy spośród dwóch opcji <code>Nowy rozmiar:</code> lub <code>Nowy rozmiar jak oprocent oryginału:</code></li>
<li>Po wpisaniu żądanych wartości klikamy na <code>OK</code>, a następnie na <code>Start</code> w poprzednim oknie</li>
</ul>
</div>
<?php include 'foot.php'; ?>

