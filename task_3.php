<?php
$start = 100000;
$rate = 8;
$year = 0;
$end = $start * 2;

while ($start <= $end) {
    $cap = $start/100 * $rate;
    $start += $cap;
    $year ++;
    if($year % 3 === 0){
        $rate += 2;
    }
}
echo $year;
