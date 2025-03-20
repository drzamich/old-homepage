<?php include 'head.php'; ?>
<h2 class="title">Kontakt</h2>
<div class="wykaz">
<p class="copyright">Aby skontaktowac siê ze mn±, wype³nij poni¿szy formularz. Pamiêtaj ¿e <em>wszystkie pola s± wymagane</em>.</p>
</div>
<div class="wykaz">
<h4>Formularz kontaktowy</h4>
<?php
if (count($_POST))
{
	////////// USTAWIENIA //////////
	$email = 'drzamich@gmail.com';	// Adres e-mail adresata
	$subject = 'drzamich.boo.pl';	// Temat listu
	$message = 'Twoja wiadomo¶c zosta³a wys³ana';	// Komunikat
	$error = 'Wyst±pi³ b³±d podczas wysy³ania wiadomo¶ci';	// Komunikat b³êdu
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
<legend>Imiê: / Nick:</legend>
<input type="text" name="imie" />
</fieldset>

<fieldset>
<legend>E-mail:</legend>
<input type="text" name="e-mail" />
</fieldset>

<fieldset>
<legend>Temat wiadomo¶ci:</legend>
<input type="text" name="temat" />
</fieldset>

<fieldset>
<legend>Tre¶æ wiadomo¶ci:</legend>
<textarea name="tresc" cols="20" rows="10"></textarea>
</fieldset>

<input type="submit" value="Wy¶lij" />

</form>
</div>
<?php
}
?>
</div>
<?php include 'foot.php'; ?>
