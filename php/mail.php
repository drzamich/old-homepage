<?php
$to = "drzamich@gmail.com";
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=iso-8859-2" . "\r\n";
$headers .= 'From: Drzamich' . "\r\n";
mail($to,$subject,$message,$headers);
?>
<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="pl" lang="pl">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-2" />
	<meta http-equiv="Content-Language" content="pl" />	
	<title>Formularz kontaktowy</title>
</head>
<body>
<form action="mail.php" method="post">
<fieldset>
<legend>Formularz kontaktowy</legend>
Imię: / Nick: <input type="text" name="nick" /><br />
Temat: <input type="text" name="subject" /><br />
Treść: <input type="text" name="message" /><br />
<input type="submit" value="Send" />
</form>
