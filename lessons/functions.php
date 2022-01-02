<?php

function sayHello () {
    echo 'Hello!!!<br>';
}


function plusOne ($a) {
    echo ++$a . '<br>';
}

function multiply ($a, $b) {
    echo $a * $b . '<br>';
}

function sumNumbers (int $a, int $b, $c = 0) {
    echo $a + $b + $c . '<br>';
}


function returnPlusOne ($a) {
    
}
sayHello ();

echo 'Hi!<br>';

sayHello ();

sayHello ();
plusOne(55);

sumNumbers(1, 2, 3);
sumNumbers(1, 2);