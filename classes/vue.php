<?php

class Vue{


private $template;

public function __construct($template = null){

  $this->template =$template;
}
public function render($params = array()){

  foreach ($params as $name => $value) {

    extract($params);
  }
  $this->params =$params;

   $template =$this->template;
   //var_dump($template);exit;
   include_once (VUE.$template.'.php');
}
public function redirect($route){
  header("Location:".HOST.$route);
}





}
