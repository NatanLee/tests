<?php

include 'randArray.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

const NUM = 1;
$arr = getSortRandArray();
//print_r($arr);

echo "Линейный поиск: ".PHP_EOL; //O(n)
echo linearSearch($arr, NUM);

echo "Бинарный поиск: ".PHP_EOL; //O(logn)
echo binarySearch($arr, NUM);

echo "Интерполяционный поиск: ".PHP_EOL; // O(loglogn)
echo interpolationSearch($arr, NUM);