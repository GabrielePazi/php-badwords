<?php

$badword = $_POST["badword"];
$text = $_POST["text"];

$censoredText = str_replace($badword, "****", $text);

echo 'La badword è: ' . $badword;
echo '<br> Il testo è: ' . $text;
echo '<br> Il testo ha una lunghezza di: ' . strlen($text) . " caratteri";
echo '<br> Il testo corretto è: ' . $censoredText;
