<?php

$a = 5;
$b = &$a;
$b++;

echo $a.PHP_EOL;

function add(&$link) {
	$link++;
}
add($a);

function &add2 (&$link) {
	$link++;
	return $link;
}

$c = add2($a);
$c++;
?>


a + b
+ a b
a b +

a * (b + c)
* a + b c
a b c + *

((a + b) * (c + d)) / e

















