<?php
//1.1
$year = 2104;

$yearCheck = ($year % 4 == 0 && $year % 100 != 0) ? true : false;
var_dump($yearCheck);

//1.2
$color = (date('i') % 5 < 3) ? "green" : "red";
echo $color;

//1.3


$a = [2, 7];
$b = [6, 1];
$c = [12, 5];

$ab = (pow(($b[0] - $a[0]), 2) + (pow(($b[1] - $a[1]), 2)));
$ac = (pow(($c[0] - $a[0]), 2) + (pow(($c[1] - $a[1]), 2)));
$bc = (pow(($c[0] - $b[0]), 2) + (pow(($c[1] - $b[1]), 2)));

$first = 0;
$second = 0;
$third = 0;

if ($ab > $ac && $ab > $bc) {
    $first = $ab;
    $second = $ac;
    $third = $bc;
} else if ($ac > $bc && $ac > $ab) {
    $first = $ac;
    $second = $ab;
    $third = $bc;
} else if ($bc > $ac && $bc > $ab) {
    $first = $bc;
    $second = $ab;
    $third = $ac;
}

$result = ($first == $second + $third) ? true : false;
var_dump($result);