<?php

include 'QuickSort.php';
include '08QuickSort.php';
include '06Bubble.php';
include 'randArray.php';

$arr = _randArray(10000);
$count = count($arr)-1;

$start = microtime(true);

//bubbleSort($arr); //3.4390110969543
//quickSort($arr, 0, $count); //0.012294054031372
//quickSort2($arr); //0.012439966201782
//sort($arr); //0.0022540092468262


echo  microtime(true) - $start;