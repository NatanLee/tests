<?php

function interpolationSearch($myArray, $num)
{
	$start = 0;
	$end = count($myArray) - 1;
	$n = 0;

	while (($start <= $end) && $num >= $myArray[$start] && $num <= $myArray[$end]) {

		$n++;


		$pos = floor($start + (
				(($end - $start) / ($myArray[$end] - $myArray[$start]))
				* ($num - $myArray[$start])
			)
		);

		echo "Проверяется элемент с индексом: $pos".PHP_EOL;

		if ($myArray[$pos] == $num) {
			echo "КОЛИЧЕСТВО ИТЕРАЦИЙ: ".$n.PHP_EOL;
			return $pos;
		}

		elseif ($myArray[$pos] < $num) {
			$start = $pos + 1;
		}

		elseif ($myArray[$pos] > $num) {
			$end = $pos - 1;
		}
	}

	echo "КОЛИЧЕСТВО ИТЕРАЦИЙ: ".$n.PHP_EOL;
	return null;
}