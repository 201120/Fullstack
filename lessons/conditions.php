<?php

$number = 4;

if ($number > 5 ) {
    echo '10 больше 5';
    echo '<br>';
    echo '!';
}
echo '<br>';
echo 'Эта строка выводится всегда';

if ($number > 5 ) {
    echo '<br>';
    echo 'число больше 5';
} else {
    echo '<br>';
    echo 'число меньше или равно 5';
}

if ($number > 5) {
    echo '<br>';
    echo 'число больше 5';
} else if ($number > 3) {
    echo '<br>';
    echo 'число меньше или равно 5, но больше 3';
} else if ($number > 0 ) {
    echo '<br>';
    echo 'либо 1, либо 2, либо 3';
} else {
    echo '<br>';
    echo ' 0 либо отрицательное';
}


$second_number = 0;
if ($number = 3) {
    echo '<br>';
    echo ' число = 3';
}
echo '<br>';
echo $number;

echo '<hr>';

if ($number > 0 and $second_number == 0) {
echo '$number > 0 и $second_number равно 0';
}

if ($number > 0 and $second_number == 0) {
    echo '$number > 0 или $second_number равно 0';
    }

    if ($number > 0) {
        if ($number >2){
            echo 'число больше 2';
        }
    }

 
 
 
 
 
 
 
 
 
 
 
 
 
 
    $age = 13

    if ( $age < 7 ) {
        echo '<br>';
        echo 'Вы школьник';
    } else if ( $age > 6 and < 19 ) {
        echo '<br>';
        echo 'Вы в школе';
    } else {
           echo 'Вы закончили школу';
    }