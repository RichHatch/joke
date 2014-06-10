<?php

$jokes = file('statii.txt');
$number = array_rand($jokes,1);

$joke = $jokes[$number];

$joke = preg_replace('/^[\-\~]+/','',$joke);

if (preg_match('/^[\^]/', $joke)) {
    $joke = 'This joke has been censored. Plz try again. -HR';
}

echo $joke;


