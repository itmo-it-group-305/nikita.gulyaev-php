<?php 
$fairy = 16;
$tarelka = 18;
while ($fairy > 0 && $tarelka > 0) {
    $tarelka--;
    $fairy -= 0.5;
    echo 'Осталось ' . $tarelka . ' тарелок' . ' и ' . $fairy . ' чистящего средства' . "<br>";
}
if ($tarelka == 0) {
    echo "Грязной посуды не осталось.<br>";
} else if ($cleaner == 0) {
    echo "Фейри закончился.<br>";
}
