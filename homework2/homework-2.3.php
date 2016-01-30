<?php
$arr = [2, 4, 6, 8, 10, 12, 14];
$arrLength = (int)((count($arr)) / 2);

for ($i = 0; $i <= $arrLength - 1; $i++) {
   $arr[$i] = $arr[$i] + $arr[count($arr) - 1 - $i];
   $arr[count($arr) - 1 - $i] = $arr[$i] - $arr[count($arr) - 1 - $i];
   $arr[$i] = $arr[$i] - $arr[count($arr) - 1 - $i];
}

print_r($arr);
