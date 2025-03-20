<?php
$kod[0] = '&lt;!DOCTYPE html PUBLIC &quot;-//W3C//DTD XHTML 1.0 Strict//EN&quot; &quot;http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd&quot;&gt;';
$kod[1] = '&lt;html xmlns=&quot;http://www.w3.org/1999/xhtml&quot;&gt;';
$kod[2] = '&lt;head&gt;';
$kod[3] = '&lt;meta http-equiv=&quot;Content-Type&quot; content=&quot;text/html; charset=utf-8&quot; /&gt;';
$kod[4] = '&lt;title&gt;Dokument bez tytu³u&lt;/title&gt;';
$kod[5] = '&lt;/head&gt;';
$kod[6] = '&lt;body&gt;';
$kod[7] = '&nbsp;';
$kod[8] = 'TREŒÆ STRONY...';
$kod[9] = '&nbsp;';
$kod[10] = '&lt;/body&gt;';
$kod[11] = '&lt;/html&gt;';

echo '<ol>';

foreach ($kod as $biezacy){
	echo '<li>'.$biezacy.'</li>';
}
echo '</ol>';
?>