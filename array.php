<?php

$numbers = [1, 2, 3, 4, 5];

echo $numbers [2]; 
echo '<br>';
var_dump($numbers[15]);
echo '<br>';
echo '<pre>';
print_r($numbers); 

#вывести все элементы массива не в строчку или через запятую
$count = count($numbers);

echo $count;
 for ($i - 0; $i < $count; $i++) {
     echo "$i $numbers[$i] <br>";
 }

 echo '<hr>';
 foreach ($numbers as $number) {
     echo "$number <br>";
 }

 foreach ($numbers as $key => $value) {
     echo "$key: $value <br>";
 }

 $new_numbers = array();

 $new_numbers = [];

 for ($i = 0; $i < 10; $i++) {
    $new_numbers[] = $i**2;
 }

 $new_numbers[10] = 100;
 $new_numbers[3] = 99;

$new_numbers[67] = 67 * 67;


 echo '<pre>';
 print_r($new_numbers);

 $person =[
    'name' => 'Nelly',
    'age' => '27',
    'city' => 'London',
    'language' => 'PHP'
 ];
 echo $person['name'];

 unset($person['name']);


 echo '<hr'; #09/12/2021

 $colors = ['red', 'green', 'blue'];

 $outpoot = '';
 foreach ($colors as $color) {
     $outpoot = $outpoot . ' ' . $color;
 }

$new_str = 'Предложение из 4 слов';
$array = explode(' ', $new_str);

print_r($arrey);


$numbers = [2, 4, 6, 1, 3];
print_r($numbers);

sort($numbers);
print_r($numbers);
echo '<hr';
$persons = [
    [
        'name' => 'Nelly',
        'age' => '27',
        'city' => 'London',
    ],
[
    'name' => 'John',
    'age' => '35',
    'city' => 'Madrid',
],
[
    'name' => 'Bella',
    'age' => '17',
    'city' => 'Tokio',
]
];
