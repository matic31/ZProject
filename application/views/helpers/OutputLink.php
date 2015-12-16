<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of OutputLink
 *
 * @author Nikola
 */
class RA_View_Helper_OutputLink extends Zend_View_Helper_Abstract {
   
    public function outputLink($anchor, $description)
    {
        
        return '<a href="' . $anchor . '">' . $description . '</a>';
    }
    
}
