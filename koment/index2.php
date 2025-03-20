<a href="nowy-koment.html">Dodaj koment!</a>
<?php
$komenty = file("komenty.txt");
$il = count($komenty);
?>
<h1>Ogladanie komentarzy</h1>
<?php
echo 'Ilosc komentarzy: <b>' .$il. '</b><br /><br />';

echo '<table border="1" width="500"><tr><th></th><th>Nick</th><th>Koment</th><th></th><th></th></tr>';
$q = $il - 1;
$licznik = $il;
while($q >= 0){
$element = explode ( "\t", $komenty[$q]);
echo '<tr><td>'.$licznik.'</td><td style="font-weight: bold;">'.$element[0].'</td><td style="font-style: italic;">'.$element[1].'</td><td>'.$element[2].'</td></tr>';
$q--;
$licznik--;
}
echo '</table>';
?>

<h5>&copy; Drzamich 2007. Nie traktujcie tego powa¿nie. To tylko takie ma³e æwiczenie ;D</h5>
