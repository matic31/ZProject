<?php

class IndexController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        Zend_Loader::loadClass('Zend_Soap_Client');
        $options = array(
        'location' => 'http://servis/Index/manage',
        'uri' => 'http://servis/Index/manage'
        );
        $client = new Zend_Soap_Client(null, $options); 
        $cons = $client->getImages();
        //print_r($cons);
        foreach ($cons as $image) {
            echo "idImage: ".$image->idImage."<br>";
            $concert = $image->concert;
            echo $concert['city'];
            echo "<br><br>";
        }
        
    }
    


}

