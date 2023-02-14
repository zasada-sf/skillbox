<?php
$str = "caesar cipher";
$lenght = strlen($str);
$shift = 3;

for ($i = 0; $i < $lenght; $i++){
    $num = ord($str[$i]) + $shift;
    $str[$i] = chr($num);
}
echo $str.PHP_EOL;//зашифрованная строка

for ($i = 0; $i < $lenght; $i++){
    $num = ord($str[$i]) - $shift;
    $str[$i] = chr($num);
}

echo $str.PHP_EOL;//расшифрованная строка