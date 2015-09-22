<?php

ini_set('display_errors', 1);

// Write a function that combines two lists by alternatingly taking elements. 
// For example: given the two lists [a, b, c] and [1, 2, 3], 
// the function should return [a, 1, b, 2, c, 3].

function combine($list, $anotherList) 
{
	$resultList = [];
	$longerList = count($list) > count($anotherList) ? $list : $anotherList;

	for ($i = 0; $i < count($longerList); $i++) {
		if (isset($list[$i])) 
			$resultList[] = $list[$i];

		if (isset($anotherList[$i]))
			$resultList[] = $anotherList[$i];
	}

	return $resultList;
}

$list = ['a', 'b', 'c', 'd', 'e'];
$anotherList = [1,2,3];
$result = sprintf("The merged list looks like this: [%s].", implode(', ', combine($list, $anotherList)));
echo $result;