<?php include 'head.php'; ?>
<h2 class="title">Kontakt</h2>
<div class="wykaz">
<p class="copyright">Aby skontaktowac się ze mną, wypełnij poniższy formularz. Pamiętaj że <em>wszystkie pola są wymagane</em>.</p>
</div>
<div class="wykaz">
<h4>Formularz kontaktowy</h4>
<?php
if (count($_POST))
{
	////////// USTAWIENIA //////////
	$email = 'drzamich@gmail.com';	// Adres e-mail adresata
	$subject = 'drzamich.boo.pl';	// Temat listu
	$message = 'Twoja wiadomośc została wysłana';	// Komunikat
	$error = 'Wystąpił błąd podczas wysyłania wiadomości';	// Komunikat błędu
	$charset = 'iso-8859-2';	// Strona kodowa
	//////////////////////////////
	
	$head =
		"MIME-Version: 1.0\r\n" .
		"Content-Type: text/plain; charset=$charset\r\n" .
		"Content-Transfer-Encoding: 8bit";
	$body = '';
	foreach ($_POST as $name => $value)
	{
		if (is_array($value))
		{
			for ($i = 0; $i < count($value); $i++)
			{
				$body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value[$i]) : $value[$i]) . "\r\n";
			}
		}
		else $body .= "$name=" . (get_magic_quotes_gpc() ? stripslashes($value) : $value) . "\r\n";
	}
	echo mail($email, "=?$charset?B?" . base64_encode($subject) . "?=", $body, $head) ? $message : $error;
}
else
{
?>
<div style="width: 300px; margin: 0 auto;">
<form action="?" method="post" id="kontakt">

<fieldset>
<legend>Imię: / Nick:</legend>
<input type="text" name="imie" />
</fieldset>

<fieldset>
<legend>E-mail:</legend>
<input type="text" name="e-mail" />
</fieldset>

<fieldset>
<legend>Temat wiadomości:</legend>
<input type="text" name="temat" />
</fieldset>

<fieldset>
<legend>Treść wiadomości:</legend>
<textarea name="tresc" cols="20" rows="10"></textarea>
</fieldset>

<input type="submit" value="Wyślij" />

</form>
</div>
<?php
}
?>
</div>
<?php include 'foot.php'; ?>
