<?php

$quotesJson = file_get_contents('quotes.json');

$quotes = json_decode($quotesJson, true);

$selectquote = array_rand($quotes,1);

?>
