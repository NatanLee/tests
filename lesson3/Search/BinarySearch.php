<?php

function binarySearch ($myArray, $num) {

	$left = 0;
	$right = count($myArray) - 1;
	$n = 0;

	while ($left <= $right) {
		$n++;

		$middle = floor(($left+$right)/2);

		echo "Проверяется элемент с индексом: $middle".PHP_EOL;

		if ($myArray[$middle] == $num) {
			echo "КОЛИЧЕСТВО ИТЕРАЦИЙ: ".$n.PHP_EOL;
			return $middle;
		}

		elseif ($myArray[$middle] > $num) {
			$right = $middle - 1;
		}

		elseif ($myArray[$middle] < $num) {
			$left = $middle + 1;
		}

	}

	echo "КОЛИЧЕСТВО ИТЕРАЦИЙ: ".$n.PHP_EOL;
	return null;

}