<?php

$jokes = file('statii.txt');
$number = array_rand($jokes,1);

$joke = $jokes[$number];

$joke = preg_replace('/^[\-\~]+/','',$joke);

echo $joke;

