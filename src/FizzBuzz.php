<?php

namespace App;

class FizzBuzz
{

    /**
     * @param int $minNumber
     * @param int $maxNumber
     * @return string
     */
    public function generate(int $minNumber, int $maxNumber): string
    {
        return $this->evaluateNumbers($minNumber, $maxNumber);
    }

    /**
     * @param int $number
     * @return string
     */
    public function evaluateNumber(int $number): string
    {
        if ($number % 15 == 0)
            return "FizzBuzz";

        if ($number % 3 == 0)
            return "Fizz";

        if ($number % 5 == 0)
            return "Buzz";

        return (string)$number;
    }

    /**
     * @param int $minNumber
     * @param int $maxNumber
     * @return string
     */
    public function evaluateNumbers(int $minNumber, int $maxNumber): string
    {
        $result = $this->evaluateNumber($minNumber);

        while ($minNumber < $maxNumber)
            $result .= $this->evaluateNumber(++$minNumber);

        return $result;
    }
}