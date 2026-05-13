<?php

class Default_Controller extends TinyMVC_Controller {


  function index() {

  $teste = "teste";
  
  //teste array
  $arr = array("1","2","3");

  //teste objeto
  //$pessoa = new Pessoa(Jorge, 20);

  $this->view->assign('title',$teste);	
  $this->view->assign('arr',$arr); 
  //$this->view->assign('pessoa',$pessoa);

  $this->view->display('index_view');
  
  }


}

?>
