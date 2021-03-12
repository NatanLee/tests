<?php

function quickSort2 ($mas) {

	$count = count($mas);
	if ($count <= 1) {
		return $mas;
	}

	$baseEl = $mas[0];
	$left = [];
	$right = [];

	for ($i = 1; $i < $count; $i++) {
		if ($mas[$i] <= $baseEl) {
			$left[] = $mas[$i];
		}

		else {
			$right[] = $mas[$i];
		}
	}

	$left = quickSort2($left);
	$right = quickSort2($right);

	return array_merge($left, [$baseEl], $right);

}