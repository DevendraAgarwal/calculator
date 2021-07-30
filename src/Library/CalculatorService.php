<?php

namespace Sirdevendra\Calculator\Library;

class CalculatorService 
{    
    /**
     * add ($a+$b)
     *
     * @param  mixed $a
     * @param  mixed $b
     * @return void
     */
    public function add($a,$b)
    {
        return ($a+$b);
    }
    
    /**
     * subtract ($a-$b)
     *
     * @param  mixed $a
     * @param  mixed $b
     * @return void
     */
    public function subtract($a,$b)
    {
        return ($a-$b);
    }
}