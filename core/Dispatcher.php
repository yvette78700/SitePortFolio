<?php 
namespace core;

class Dispatcher
{
   private $router;
   private $session;
    public function __construct()
    {   
        $this->router = new \core\Router();
        $this->session = new \core\Session();
        // echo '<pre>';
        // var_dump( $this->router);
        
    }

    public function getRouter()
    {
        return $this->router;
    }

    public function getSession()
    { return $this->session;
    }


    //crée une fonction qui instancie le controller pour appeler la fonction action qui s'y trouve 

    //elle charge le bon controlleur pris du router


    private function loadController()
    {
        $Controller = ucfirst($this->router->getController());
        $classname = '\controller\\'.$Controller;
       
        if(!class_exists($classname) or !is_subclass_of($classname ,'\controller\Controller') )
        {
            $Controller = ucfirst($this->router->getDefaultController());
            $classname = '\controller\\'.$Controller;
            $this->router->setAttribute('controller' ,$Controller);

        }
 
        return new $classname($this);
    }
    // public function loadController()
    // {

    //     //le fichier et la class gerant le controlleur doit avoir le meme nom
    //     //double slash apres controller car un peur etre vu comme un echappement de la cote 
    //     //class_exist(le nom class,dire si la class doit etre charger)
    //    $classname = '\controller\\'.ucfirst($this->router->getController());
    //    if(!class_exists($classname, false) or !is_subclass_of($classname ,'\controller\\Controller') )
    //    {
    //     $classname = '\controller\\'.ucfirst($this->router->getDefaultController());
    //    }
    //     return new $classname($this);
    // }





    public function execute(){
        $ctrl = $this->loadController();

        $action =  $this->router->getAction();

        if(!empty($this->router->getPrefix()))   $action = $this->router->getAttribute('prefix').ucfirst($action);
          
        if(!in_array($action,get_class_methods($ctrl)))
        {
            $action =  $this->router->getDefaultAction();
            $this->router->setAttribute('action' ,$action); 
        }

      
        return $ctrl->$action();
    }
    
 
    
}


