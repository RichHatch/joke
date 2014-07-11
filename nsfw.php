<?php

$jokes = file('statii.txt');
$joke = get_joke($jokes);
echo $joke;
die();


function get_joke($jokes) {
    $number = array_rand($jokes,1);
    $joke = $jokes[$number];
    if (preg_match('/^[\^]/', $joke)) {
        $joke = preg_replace('/^(\^[\-\~]+)/','',$joke);
        return $joke;
    } else {
        return get_joke($jokes);
    }
}
