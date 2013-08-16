<?php

class Config {
  private static $me;
  
  private $productionServers = array('ricehusk.cc');
  private $localServers = array('localhost:8888');
  
  private function __construct(){
    $this->everywhere();
    
    $i_am_here = $this->whereAmI();

    if('production' == $i_am_here)
        $this->production();
    elseif('local' == $i_am_here)
        $this->local();
  }
  
  public static function getConfig(){
      if(is_null(self::$me))
          self::$me = new Config();
      return self::$me;
  }
  
  // Allow access to config settings statically.
  // Ex: Config::get('some_value')
  public static function get($key){
      return self::$me->$key;
  }
  
  // Add code to be run on all servers
  private function everywhere(){
  }
  
  private function production(){
    ini_set('display_errors', '0');

    $this->web_root = '/';
  }
  
  private function local(){
    ini_set('display_errors', '1');
    ini_set('error_reporting', E_ALL);
    
    $this->web_root = 'ricehuskcc/';
  }
  
  public function whereAmI(){
      if(in_array($_SERVER['HTTP_HOST'], $this->productionServers))
          return 'production';
      elseif(in_array($_SERVER['HTTP_HOST'], $this->localServers))
          return 'local';
      elseif(isset($_ENV['SHELL']))
          return 'shell';
      else
          return false;
  }
}