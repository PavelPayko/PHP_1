<?php
// Задание 3
$a = 5;
$b = '05';
var_dump($a == $b);   // при сравнении значения приводятся к одному типу, поэтому будет true
var_dump((int)'012345');   // при смене типа на integer, получаем целое число и опускаем лишние символы, 12345?
var_dump((float)123.0 === (int)123.0); // тождественное равенство сравнивает также типы данных, поэтому false?
var_dump((int)0 === (int)'hello, world'); // строка не содержит верного числовоо значения, поэтому принимает значение о при смене типа, поэтому true?
?>

<?php
// Задание 5
$a = 10;
$b = 20
$a = $a + $b;
$b = $a - $b;
$a = $a - $b;
?>