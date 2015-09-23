<?php

// Write a function that given a list of non negative integers, 
// arranges them such that they form the largest possible number. 
// For example, given [50, 2, 1, 9], 
// the largest formed number is 95021.

$list = [50, 2, 1, 9];

usort($list, function ($a, $b) {
	return ($a . $b) < ($b . $a);
});

$result = sprintf('The largest number, number made from the list is: %s', implode('', $list));
echo $result; // prints 95021