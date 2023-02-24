<?php

class Dice
{


    function __construct(public int $num_die)
    {
    }

    function roll()
    {
        $result = [];
        
        for ($i=0; $i<$this->num_die; $i+=1) {
            array_push($result, rand(1, 6));
        }
        return $result;
    }
}
