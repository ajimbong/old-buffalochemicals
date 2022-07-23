<?php
$msg = "Hello Buffalo";

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg,70);

$headers = "From: webmaster@example.com" . "\r\n";

// send email
mail("gdscsiantou2021@gmail.com","My subject",$msg, $headers);

echo "<br> Hello Buffalo";