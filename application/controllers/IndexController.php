<?php

class IndexController extends Custom_MyController
{

    public function init()
    {
        parent::init();
    }

    public function indexAction()
    {
                $client = new Zend_Soap_Client(null, $this->getOptions()); 
        $cons = $client->getImages();
        foreach ($cons as $image) {
            echo "idImage: ".$image->idImage."<br>";
            $concert = $image->concert;
            echo $concert['city'];
            echo "<br><br>";
        }
        
    }
    


}

