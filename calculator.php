<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Calculator
 *
 * @author bcc
 */
class Calculator {
 
    
    public function add ($first_number, $second_number)
    {
        return $first_number + $second_number;
    }
    
    public function subtract ($first_number, $second_number)
    {
        return $first_number - $second_number;
    }
    
    public function multiply ($first_number, $second_number)
    {
        return $first_number * $second_number;
    }
    
    public function divide ($first_number, $second_number)
    {
        return $first_number / $second_number;
    }
}
