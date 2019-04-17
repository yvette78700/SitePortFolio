<?php
require_once 'autoload.php';
// use \Libraries\Request;
// use \Libraries\Router;
//$url = 'http://localhost/SitePortFolio/admin/user/affiche/1#competence';
 
  // Print all components of the parsed url
  //print_r(parse_url($url));
 
  // Get the anchor part
 // echo parse_url($url, PHP_URL_FRAGMENT);
// echo '<pre>';
// // $router = new Router(new Request());
try {
    $Autoload = new \Autoloader();
    $Autoload->register();
    // echo '</pre>';
    $e= new \core\Dispatcher();
    
  $e->execute();
} catch (\Throwable $th) {
    throw $th;
}




// echo '<pre>'; print_r($_SERVER);echo '<pre>';
// echo $_SERVER['HTTP_HOST']; 






 





// $router->Dispatch();

// $controller = new Controller\Controller; 

// $controller->handlerRequest() ;



// $controller =new Controller\Profileadmin;
// $controller->Seconnecter();

//  define('ROOT',dirname(__file__));
// echo dirname(ROOT).'<br>';


// echo __DIR__;






// echo $_SERVER['REQUEST_URI'];
