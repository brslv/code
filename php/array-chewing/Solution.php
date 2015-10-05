<?php

/**
 * Class Solution
 *
 * A simple class that provides an api for solving the following problem:
 *
 * 1. Create an array, containing 'n' prime numbers, each less than the 'm' value.
 * 2. Remove the duplicated elements from this array.
 * 3. Find the most frequent element out of the duplicated ones.
 *
 * The following class does not follow any heavy design patterns or structures for
 * sake of simplicity and ease of reading.
 *
 * @author Borislav Grigorov <borislav.b.grigorov@gmail.com>
 */
class Solution
{

    /**
     * The number of prime numbers.
     *
     * @var int
     */
    private $n;

    /**
     * The upper limit for a prime number.
     *
     * @var int
     */
    private $m;

    /**
     * Array of random numbers;
     *
     * @var array
     */
    private $array = [];

    /**
     * Array, holding all the unique values
     * from the random-numbers array.
     *
     * @var array
     */
    private $unique = [];

    /**
     * Array, holding all duplicated values
     * from the random-numbers array.
     *
     * @var array
     */
    private $duplicates = [];

    /**
     * The frequency of the most frequent occurring element
     * in the random-numbers array.
     *
     * @var int
     */
    private $frequency = 0;

    /**
     * The most frequent element in the duplicates array.
     *
     * @var int
     * @return Solution
     */
    private $mostFrequentDuplicatedElement;

    public function __construct($n, $m)
    {
        $this->n = $n;
        $this->m = $m;

        $this->fillArray()
            ->extractDuplicates()
            ->findMostFreqDuplicate();

        return $this;
    }

    /**
     * Makes a completely random array,
     * filled up with prime numbers.
     *
     * @return Solution
     */
    private function fillArray()
    {
        for ($i = 0; $i < $this->n; $i++) {
            $random = mt_rand(0, $this->m);

            if ( ! $this->isPrime($random)) {
                $i--;
                continue;
            }

            $this->array[$i] = $random;
        }

        return $this;
    }

    /**
     * Check if a given digit/number is prime.
     *
     * @param int $number
     * @return bool
     */
    private function isPrime($number)
    {
        for ($i = 2; $i <= sqrt($number); $i++) {
            if ($number % $i == 0) {
                return false;
            }
        }

        return true;
    }

    /**
     * Extract all the unique and duplicated values
     * from the random-numbers array.
     *
     * @return Solution
     */
    private function extractDuplicates()
    {
        $arraySize = count($this->array);

        for ($i = 0; $i < $arraySize; $i++) {
            $currentElement = $this->array[$i];

            if ( ! in_array($currentElement, $this->unique)) {
                $this->unique[] = $currentElement;
            } else {
                $this->duplicates[] = $currentElement;
            }
        }

        return $this;
    }

    /**
     * Count the duplicated values.
     *
     * @return $this
     */
    private function findMostFreqDuplicate()
    {
        $duplicatesSize = count($this->duplicates);

        if ($duplicatesSize == 1) {
            $this->mostFrequentDuplicatedElement = $this->duplicates[0];
            $this->frequency = 1;
            return $this;
        }

        for ($i = 0; $i < $duplicatesSize - 1; $i++) {
            $counter = 1;

            for ($j = $i + 1; $j < $duplicatesSize; $j++) {
                if ($this->duplicates[$j] == $this->duplicates[$i]) {
                    $counter++;
                }
            }

            $this->changeMostFreqElement($counter, $this->duplicates[$i]);
        }

        return $this;
    }

    /**
     * Changes the most frequent element.
     *
     * @param int $counter
     * @param int $newElement
     */
    private function changeMostFreqElement($counter, $newElement)
    {
        if ($counter > $this->frequency) {
            $this->frequency = $counter;
            $this->mostFrequentDuplicatedElement = $newElement;
        }
    }

    public static function concatArray($arr)
    {
        if ( ! is_array($arr)) {
            return $arr;
        }

        return implode(',', $arr);
    }

    /**
     * Get the 'n' parameter.
     *
     * @return int
     */
    public function getN()
    {
        return $this->n;
    }

    /**
     * Get the 'm' parameter.
     *
     * @return int
     */
    public function getM()
    {
        return $this->m;
    }

    /**
     * Get the array, holding all the randomly-generated prime numbers.
     *
     * @return array
     */
    public function getArray()
    {
        return $this->array;
    }

    /**
     * Get the array, holding all the unique elements.
     *
     * @return array
     */
    public function getUnique()
    {
        return $this->unique;
    }

    /**
     * Get the array, holding all the duplicating elements.
     *
     * @return array
     */
    public function getDuplicates()
    {
        if (empty($this->duplicates)) {
            return "No duplicates found.";
        }

        return $this->duplicates;
    }

    /**
     * Get the frequency of the most frequent duplicated element.
     *
     * @return int
     */
    public function getFrequency()
    {
        return $this->frequency;
    }

    /**
     * Get the most frequent duplicated element.
     *
     * @return int
     */
    public function getMostFrequentDuplicatedElement()
    {
        if (is_null($this->mostFrequentDuplicatedElement)) {
            return "No duplicates found.";
        }

        return $this->mostFrequentDuplicatedElement;
    }

}