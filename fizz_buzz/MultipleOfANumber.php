<?php

class MultipleOfANumber
{
    function getMultiple(int $number): string
    {
        return
            (!empty($this->isMultipleOfThreeAndFive($number)) ? $this->isMultipleOfThreeAndFive($number)
                : (!empty($this->isMultipleOfThree($number)) ? $this->isMultipleOfThree($number)
                    : (!empty($this->isMultipleOfFive($number)) ? $this->isMultipleOfFive($number) : $number)));
    }

    function isMultipleOfThreeAndFive(int $number)
    {
        if ($number % 5 === 0 && $number % 3 === 0) {
            return 'fizzbuzz';
        }
    }

    function isMultipleOfThree(int $number)
    {
        if ($number % 3 === 0) {
            return 'fizz';
        }
    }

    function isMultipleOfFive(int $number)
    {
        if ($number % 5 === 0) {
            return 'buzz';
        }
    }
}