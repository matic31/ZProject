<?php

class FrontendController extends Custom_MyController
{

    public function init()
    {
         
//       $menu_opcije=array(
//            $this->view->outputLink($this->view->url(array('controller'=>'Administracija','action'=>'galerije'),'default',true),'Galerije'),
//            $this->view->outputLink($this->view->url(array('controller'=>'Administracija','action'=>'slike'),'default',true),'Slike'),
//            $this->view->outputLink($this->view->url(array('controller'=>'Administracija','action'=>'kategorije'),'default',true),'Kategorije'),
//            $this->view->outputLink($this->view->url(array('controller'=>'Administracija','action'=>'korisnici'),'default',true),'Korisnici'),
//            $this->view->outputLink($this->view->url(array('controller'=>'Administracija','action'=>'uloge'),'default',true),'Uloge'),
//            $this->view->outputLink($this->view->url(array('controller'=>'Administracija','action'=>'post'),'default',true),'Postovi'),
//                    
//                );
        //$lista=$this->view->htmlList($menu_opcije,false,false,false);
        //$this->view->placeholder('sidebar')->append('<h2>Opcije</h2>'.$lista);
    }

    public function indexAction()
    {
        
        
    }


}

