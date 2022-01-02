<?php


$name = "Nelly";
$age = 37;
//Вот так делать не нужно!/
$age = 23;
echo  "<br>";
echo $name;
echo  "<br>";
echo $age;

$name2 = 'Ivan';
echo  "<br>";
echo $name2;

echo  "<br>";
$lastName = 'Nasyrova';
$last_name = 'Nasyrova';

echo $lastName;
$fullName = $name . ' '. $lastName;
echo  "<br>";
echo $fullName;
echo  "<br>";
$word = 'lower_case';
$word = strtoupper($word);
echo  "<br>";
echo $word;
echo  "<br>";
$upperCase = 'UPPER_CASE';
$upperCase = strtolower($upperCase);
echo $upperCase;
echo  "<br>";
$password = 'qwerty';
echo '!' . $password . '!';
echo  "<br>";
echo trim($password) . '!';
echo  "<br>";
$number = 5 * 5;
echo  "<br>";
echo $number * 2;



echo "<br>";


echo  "<br>";
$product1 = 'hamburger';
echo $product1;
echo  "<br>";
$product2 = 'cocktail';
echo $product2;
echo  "<br>";
$product3 = 'coca_cola';
echo $product3;
echo  "<br>";

$price1 = '4.95';
echo $price1;
echo  "<br>";
$price2 = '1.95';
echo $price2;
echo  "<br>";
$price3 = '0.85';
echo $price3;
echo  "<br>";

$tax = '7.5%';
$tips = '16%';

$prices = ($price1 * 2) + $price2 + $price3;
echo $prices;
echo  "<br>";
$prices_with_tips = $prises + ($prises / 100) * 16;