<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Circle
 *
 * @author bcc
 */
class Circle {
    
    public $radius;
    
    public function get_circle_area ()
    {
        define("PIE", 3.14);
        
        $circle_area = PIE * ($this->radius * $this->radius);
        
        return $circle_area;
    }
}
