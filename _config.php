<?php
//init_set('display_errors','on');
//error_reporting(E_ALl);
//echo '<pre>'; print_r($_SERVER);exit;

class Myautoload{
/*
* class qui va nous permettre de charger les page au demarrage si on en a besoin
*
*/
public static function start(){
  spl_autoload_register(array(__CLASS__ ,'autoload'));
  $root = $_SERVER['DOCUMENT_ROOT'];
  $host = $_SERVER['HTTP_HOST'];

  define('ROOT',$root.'/mvc1');
  define('HOST','http://'.$host.'/mvc1');
  define('CONTROLLER',ROOT.'/controller/');
  define('MODEL',ROOT.'/model/');
  define('VUE',ROOT.'/vue/');
  define('CLASSES',ROOT.'/classes/');

  define('ASSETS',HOST.'/asset/');
}

public static function autoload($class)
{

    if(file_exists(CONTROLLER.$class.'.php'))
    {
      include_once(CONTROLLER.$class.'.php');
    }
    // elseif (MODEL.$class.'.php') {
    //    include_once(MODEL.$class.'.php');
    //  }
    elseif (CLASSES.$class.'.php') {
      include_once(CLASSES.$class.'.php');
    }
}

}

?>

