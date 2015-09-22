<?php

// Write a function that computes the list of the first 100 Fibonacci numbers. 
// By definition, the first two numbers in the Fibonacci sequence are 0 and 1, 
// and each subsequent number is the sum of the previous two. 
// As an example, here are the first 10 Fibonnaci numbers: 
// 0, 1, 1, 2, 3, 5, 8, 13, 21, and 34.

function fibo($n)
{
	$fibo = [];
	$a = 0;
	$b = 1;
	$index = 1;

	while ($index <= $n) {
		$c = $a + $b;
		$a = $b;
		$b = $c;

		$fibo[] = $c;
		$index++;
	}

	return $fibo;
}

$result = fibo(100);
echo implode(', ', $result);