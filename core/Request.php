<?php
namespace core;

class Request
{
   private $url;
   
   
      public function __construct()
      {
         
         $this->url= isset($_GET['url'])? $_GET['url'] :'/';
        
 
      }



      public function getUrl()
      {
         return $this->url;
      }

//   public function getMethod(){
//      $method = $_SERVER['REQUEST_METHOD'];
//    return strtolower($method);
// }

}