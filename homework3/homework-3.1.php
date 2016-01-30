<?php
date_default_timezone_set('UTC');
$now = strtotime("now");
$nextYear  = mktime(0, 0, 0, 1, 1, date("Y") + 1);
$ost = gmdate('z', $nextYear - 1) - gmdate('z', $now);
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h2>До нового года <?= $eta ?> дней</h2>
  </body>
</html>
