<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of MyController
 *
 * @author Nikola
 */
abstract class Custom_MyController extends Zend_Controller_Action {
    
    private $options;
    

        public function init()
    {
        
       // Zend_Loader::loadClass('Zend_Soap_Client');
       $this->options = array(
        'location' => 'http://servis/Index/manage',
        'uri' => 'http://servis/Index/manage'
        );
    }

    public function indexAction()
    {
        // action body
    }
    
    function getOptions() {
        return $this->options;
    }
    
}
