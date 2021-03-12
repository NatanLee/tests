<?php

const LIMIT = 1001;

$result = [2, 3];
$object = new ArrayObject($result);

$pretender = 4;
$checker = 2;

while ($object->count() < LIMIT) {
   while ($checker <= sqrt($pretender)) {
       if ($pretender % $checker === 0) {
           $checker = 2;
           break;
       }
       if (($checker + 1) > sqrt($pretender)) {
           $object->append($pretender);
           $checker = 2;
           break;
       }
       $checker++;
   }
   $pretender++;
}

print_r($object);