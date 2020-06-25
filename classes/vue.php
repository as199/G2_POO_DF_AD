<?php

class Vue{


private $template;

public function __construct($template){

  $this->template =$template;
}
public function render($etudiantes){
   $template =$this->template;
   include_once (VUE.$template.'.php');
}



}
