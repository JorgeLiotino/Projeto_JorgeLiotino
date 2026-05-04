<?php

class Default_Controller extends TinyMVC_Controller {


  function index() {

  $teste = "teste";
  
  $arr = array("1","2","3");
  
  $this->view->assign('title',$teste);	
  $this->view->assign('arr',$arr); 

  $this->view->display('index_view');
  
  }


}

?>
