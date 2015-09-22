<?php

ini_set('display_errors', 1);

// Write three functions that compute the sum of the numbers in a given list
// using a for-loop, a while-loop, and recursion.

// Sum in a list with a for loop.
$list = [1,2,3];
$sumWithForLoop = 0;

for ($i = 0; $i < count($list); $i++) {
	$sumWithForLoop += $list[$i];
}

$result = sprintf("The sum of %s, calculated with for loop, is %d", implode(' + ', $list), $sumWithForLoop);
echo $result . '<br />';

// Sum in a list with while loop.
$sumWithWhileLoop = 0;
$i = 0;

while ($i < count($list)) {
	$sumWithWhileLoop += $list[$i];
	$i++;
}

$result = sprintf("The sum of %s, calculated with while loop, is %d", implode(' + ', $list), $sumWithWhileLoop);
echo $result . '<br />';

// Sum in a list with recursion
function sum($list)
{
	if (empty($list)) {
		return 0;
	}

	return array_shift($list) + sum($list);
}

$result = sprintf("The sum of %s, calculated with recursive function, is %d", implode(' + ', $list), sum($list));
echo $result;