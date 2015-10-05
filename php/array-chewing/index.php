<?php
include 'Solution.php';
ini_set('display_errors', 1);

$sln = new Solution(5, 10);

$initialRandomArray = $sln->getArray();
$duplicatesArray = $sln->getDuplicates();
$uniqueElementsArray = $sln->getUnique();
$mostFrequentDuplicatedElement = $sln->getMostFrequentDuplicatedElement();

echo "Initial array: [ " . Solution::concatArray($initialRandomArray) . " ] <br />";
echo "Unique values: [ " . Solution::concatArray($uniqueElementsArray) . " ] <br />";
echo "Duplicated values: [ " . Solution::concatArray($duplicatesArray) . " ] <br />";
echo "Most frequent duplicated value: " . $mostFrequentDuplicatedElement;
