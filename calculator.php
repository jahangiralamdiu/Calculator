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
    
    public $first_number;
    
    public $second_number;
    
    public function get_value_of_addition ()
    {
        return $this->first_number + $this->second_number;
    }
    
    public function get_value_of_subtraction ()
    {
        return $this->first_number - $this->second_number;
    }
    
    public function get_value_of_muiltiplication ()
    {
        return $this->first_number * $this->second_number;
    }
    
    public function get_value_of_division ()
    {
        return $this->first_number / $this->second_number;
    }
}
