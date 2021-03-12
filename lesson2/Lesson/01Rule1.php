<?php

$array = [1, 5, 6, 8, 2, 0, 3, 4, 9, 7]; //O(1)

function findMax($array)
{
    $result = $array[0]; // O(1)

    for ($i = 1; $i < count($array)/2; $i++) { //O(n)
        if ($array[$i] > $result) { //O(1)
					$result = $array[$i]; //O(1)
        }
    }

    return $result; //O(1)
}

echo findMax($array) . PHP_EOL; //O(1)

// O(1) + O(4n) + O(1)
// O(n)
