<?php

class Calculator
{
    public function add( int $a, int $b ) : int
    {
        return $a + $b;
    }

    public function substract ( int $a, int $b ) : int
    {
        return $a - $b;
    }

    public function multiply ( int $a, int $b ) : int
    {
        return $a * $b;
    }

    public function divide ( int $a, int $b )
    {
        if ($b === 0)
        {
            throw new InvalidArgumentException("The number is not divisible by zero");
        }
        return $a / $b;
    }
}