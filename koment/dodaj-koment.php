<html>
<head>
<meta http-equiv="Refresh" content="0; url=index.php" />
</head>
<body>
<?php
$nick = $_POST['nick'];
$koment = $_POST['koment'];
$data = date('H.i, jS F');
?>
<h1>Dodawanie komentarzy</h1>

<?php
echo 'Twój nick to: <b>' .$nick. '</b><br />';
echo 'Twój koment to: <i>' .$koment. '</i><br />';

$ciagwyjsciowy = $nick. "\t" .$koment. "\t" .$data. "\n";


//zapisywanie w pliku

@ $plik = fopen("komenty.txt", 'ab');   //otwieranie pliku

fwrite($plik, $ciagwyjsciowy); //zapisywanie komentarza

fclose ($plik); //zamykanie pliku

echo '<h2>Koment zapisany</h2>';
?>

<h5>&copy; Drzamich 2007. Nie traktujcie tego powa¿nie. To tylko takie ma³e æwiczenie ;D</h5>
</body>
</html>