<?php

$name = 'Nelly';
$age  = 27;
$money = 999.99;
$isRain = 'true';

$name = 'Nelly';
echo $name . ' ' . gettype($name) . ' ' . '<br>';

$age  = 27;
echo $age . ' ' . gettype($age) . ' ' . '<br>';

$money = 999.99;
echo $money . ' ' . gettype($money) . ' ' . '<br>';

$isRain = 'true';
echo $isRain . ' ' . gettype($isRain) . ' ' . '<br>';

echo $notExist . ' ' . gettype($notExist) . ' ' . '<br>';

echo '<hr>';

if ($name) {
    echo '$name true <br>';
} else {
    echo '$name false <br>';
}

$emptyString = '';

if ($emptyString) {
    echo '$emptyString true <br>';
} else {
    echo '$emptyString false <br>';
}

$zeroString = '0';
if ($zeroString) {
    echo '$zeroString true <br>';
} else {
    echo '$zeroString false <br>';
}

$space = ' ';
if ($space) {
    echo '$space true <br>';
} else {
    echo '$space false <br>';
}

$number = 99;

if ($number) {
    echo '$number true <br>';
} else {
    echo '$number false <br>';
}

$zero = 0;
if ($zero) {
    echo '$zero true <br>';
} else {
    echo '$zero false <br>';
}

$false = false;
if ($false) {
    echo '$false true <br>';
} else {
    echo '$false false <br>';
}

$null = NULL;
if ($nulle) {
    echo '$null true <br>';
} else {
    echo '$null false <br>';
}

if ($null == $false) {
    echo '$null == $false true <br>';
} else {
    echo '$null == $false false <br>';
}

if ($null === $false) {
    echo '$null === $false true <br>';
} else {
    echo '$null === $false false <br>';
}

if (0 == "") {
    echo '0 == "" true <br>';
} else {
        echo '0 == "" $false false <br>';
}

if (0 === "") {
    echo '0 === "" true <br>';
} else {
        echo '0 === "" $false false <button> !!! </button> <br>';
}

echo "My name's Nelly <br>";
echo 'My name\'s Nelly <br>';

$message = "значение переменной name = $name";
echo $message;

echo '<br>';
echo htmlspecialchars('<img src="images/img.png">');  # вывод html тегов

echo '<br>';
$number = 10;
$number++;
echo $number;
echo '<br>';
$number--;
echo $number;
echo '<br>';

$n = 10;
$new_number = $n++;
echo $new_number;
echo '<br>';
$n = 10;
$new_number = ++$n;
echo $new_number;

#задача
$age = 12;
$shoe_size = 13;
if ($age > $shoe_size) #12 не больше 13. Данное условие не подходит.
   print "Message 1.";
else if (($shoe_size++) && ($age > 20)) #$shoe_size++ - тип данных integer, 
#не нулевой. дает true. При этом возраст по условиям больше 20. Не подходит.
   print "Message 2.";
else 
   print "Message 3.";

print "Age: $age . Shoe Size: $$shoe_size";   
#  с возрастом ничего не происходило. Его только сравнивали
#$shoe_size взяли текеущее значение и потом увеличили на единицу.

# поэтмоу выведется сооьбщение 3. и Возраст 12. Размер обуви 14.

echo '<hr>';

$n= -1;

if ($n++) {
    echo 'true'; # тк -1 целое число
} else {
    echo 'false';
}

$n= -1;

if (++$n) {
    echo 'true'; # 
} else {
    echo 'false';
} #в данном случае 0, а 0 - это false

echo '<hr>';

$n = 10;
$n = $n + 1; #Существует сокращенная версия записи увеличения на единицу
$n +=1; # до знака = прописывается то действие, которое необходимо произвести с самим собой
#умножение, деление, вычитание, сложение/+=/*=/+=/-=

#Можно также присоединять части строк
$name = 'Nelly';
$name .= ' Nasyrova';
echo $name;
