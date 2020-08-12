<?php

$arr = ["abcd", "abc", "de", "hjjj", "g", "wer"];

$lengths = array_map('strlen', $arr);

echo "The shortest is " . min($lengths) .
    ". The longest is " . max($lengths);

$maxLenght = 0;

foreach ($arr as $value) {
    if (strlen($value) > $maxLenght) {
        $maxItem = $value;
        $maxLenght = strlen($value);
    }
}

foreach ($arr as $value) {
    if (strlen($value) < $minLenght) {
        $minItem = $value;
        $minLenght = strlen($value);
    }
}

echo "Didziausias: " . $maxItem;
echo "Maziausias: " . $minItem;