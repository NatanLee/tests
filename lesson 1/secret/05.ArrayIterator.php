<?php


$arr = ["Moscow", "Munich", "Beijing", "Roma", "Barcelona", "London"];

$obj = new ArrayObject( $arr );
$iter = $obj->getIterator();

// Цикл для обработки объекта
while( $iter->valid() )
{
    echo $iter->key() . "=" . $iter->current() . "\n";
    $iter->next();
}

foreach ($arr as $key => $value) {
	echo $key . "=". $value.PHP_EOL;
}