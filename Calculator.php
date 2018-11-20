<?php
class Calculator
{
 
    public function add($a, $b)
    {
        return $a + $b;
    }

    public function multiply($a, $b)
    {
        return $a * $b;
    }

    public function division($a, $b)
    {
        return $a / $b;
    }

    public function esPar($a)
    {

        if ($a == "") {
            return false;
        } elseif (!is_numeric($a)) {
            return false;
        } elseif (floor($a / 2) * 2 == $a) {
            return true;
        } else {
            return false;
        }
    }
 
}
