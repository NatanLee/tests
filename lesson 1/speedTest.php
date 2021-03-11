<?php

include 'lesson.php';

const COUNT = 10000;
const ARRAY_COUNT = 100000000;

$myStack = new MyStack(COUNT);
$splStack = new SplStack();

$myArray = [];
$sqlArray = new SplFixedArray(ARRAY_COUNT);

//ds еще одна библиотека, отдельная. Работает быстрее всех

$start = microtime(true);
/* for ($i = 0; $i < COUNT; $i++){
    //$splStack-> push(1);
    $myStack-> push(1);
} */
for ($i = 0; $i < ARRAY_COUNT; $i++){
    $sqlArray[$i] = $i;
}
foreach($sqlArray as $value){
    $value *=2;
}
echo microtime(true) - $start;