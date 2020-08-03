<?php
// task 1
$a = rand(-100, 100);
$b = rand(-100, 100);
echo "a = $a<br>";
echo "b = $b<br>";
if($a >= 0 && $b >= 0){
    echo $a - $b;
}else if($a < 0 && $b <0){
    echo $a * $b;
}else {
    echo $a + $b;
}
echo "<hr>";

// task 2
$a2 = rand(0,15);
switch ($a2){
    case 0:
        echo "0<br>";
    case 1:
        echo "1<br>";
    case 2:
        echo "2<br>";
    case 3:
        echo "3<br>";
    case 4:
        echo "4<br>";
    case 5:
        echo "5<br>";
    case 6:
        echo "6<br>";
    case 7:
        echo "7<br>";
    case 8:
        echo "8<br>";
    case 9:
        echo "9<br>";
    case 10:
        echo "10<br>";
    case 11:
        echo "11<br>";
    case 12:
        echo "12<br>";
    case 13:
        echo "13<br>";
    case 14:
        echo "14<br>";
    case 15:
        echo "15<hr>";
}

// task 3
function add($a3=1, $b3=1){
    return $a3 + $b3;
}
function sub($a3=1, $b3=1){
    return $a3 - $b3;
}
function div($a3=1, $b3=1){
    return $a3 / $b3;
}
function mult($a3=1, $b3=1){
    return $a3 * $b3;
}
echo add(3,2)."<br>";
echo sub(3,2)."<br>";
echo div(3,2)."<br>";
echo mult(3,2)."<hr>";

// task 4
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case "+":
            echo add($arg1,$arg2)."<br>";
        break;
        case "-":
            echo sub($arg1,$arg2)."<br>";
        break;
        case "/":
            echo div($arg1,$arg2)."<br>";
        break;
        case "*":
            echo mult($arg1,$arg2)."<br>";
        break;
    }
}
mathOperation(3, 2, "+");
mathOperation(3, 2, "-");
mathOperation(3, 2, "/");
mathOperation(3, 2, "*");
echo "<hr>";

// task 6
function power($val , $pow){
    if ($pow == 1){
        return $val;
    } 
    else {
        return $val * power($val, $pow-1);
    }

}
echo power(2, 3);
echo '<hr>';

// task 7
$G = date("G");
$i = date("i");
if ($G == 1 || $G == 21){
    $h = 'час';
}
else if ($G == 2 || $G == 3 || $G == 4 || $G == 22 || $G == 23 || $G == 24){
    $h = 'часа';
}
else {
    $h = 'часов';
}

if ($i == 1 || $i == 21 || $i == 31 || $i == 41 || $i ==51){
    $m = 'минута';
}
else if ($i == 2 || $i == 3 || $i == 4 || $i == 22 || $i == 23 || $i == 24 || $i == 32 || $i == 33 || $i == 34 || $i == 42 || $i == 43 || $i == 44 || $i == 52 || $i == 53 || $i == 54) {
    $m = 'минуты';
}
else {
    $m = 'минут';
}
echo date("G") . " $h" . date("i") . " $m";
?>