<?php
$series = ["A", "B"];
$letters = ["AA", "AB", "BB", "BA"];

foreach ($series as $val){
    for ($i = 0; $i < 1000; $i++){
        foreach ($letters as $letter){
            echo $val.sprintf('%03d', $i).$letter.PHP_EOL;
            $carnumbers[] = $val.sprintf('%03d', $i).$letter;
        }
    }
}

foreach ($carnumbers as $number){
    echo $number.PHP_EOL;
}

foreach ($carnumbers as $key => $number){
    if($number[1] === $number[2] && $number[1] === $number[3]){
        continue;
    }
    else{
        unset($carnumbers[$key]);
    }
}

print_r($carnumbers);
