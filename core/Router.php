<?php 
namespace core;

class Router
{
     /*
     *$url à parser 
     *return un tableau contenant les parametres
     */

    private $request;
    private $defaultController="profil";
    private $defaultAction="index";
    private $attributes=array();
   
   

    public function __construct()

    {   //instancie la requete
        $this->request = new \core\Request();

        //et parse son url pour avoir le tableau de controlleur, action et parametre
        $this->parse($this->request->getUrl());
        
    }

    
    //les getteurs de ces  propriétés car ils sont en private

   

    public  function parse($url)
    {
            //j'enleve / car dans le tableau est decaler la valeur controlleur est a l'indice 1 et l'indice 0 est vide
            //trim enleve le caractere specifie  en param position 2 a droite et gauche de l'url
            $url=trim($url,'/');
           // echo $anchor = parse_url($url,PHP_URL_FRAGMENT);
           

            //on traite le cas de la racine du site ie url pas defini (ici quand on supprime / pour le cas de la racine l'url n'existe pas)
            if(!$url)
            {
    
                $this->setAttribute('controller' ,$this->defaultController);
                $this->setAttribute('action' ,$this->defaultAction);
              

            }
            else
            {
                    $params =explode('/',$url);
                   

                // echo '<pre>';print_r($params);echo '</pre>';

                $prefix = (isset($params[0]) && $params[0]=== 'admin') ? $params[0] :'';

                if($prefix) array_splice($params,0,1);

                $controller = isset($params[0]) ? $params[0] : $this->defaultController;
                $action= isset($params[1]) ? $params[1] : $this->defaultAction;

                $this->setAttribute('controller' ,$controller);
                $this->setAttribute('action' ,$action);
                $this->setAttribute('prefix',$prefix);
              
                

                //j'enleve les element du debut ie controlleur et action et ile me reste parametres
                //array-splice (tableau,debut a supprimer,nombre a supprimer)

                // $reste=array_splice($params,2);

                // foreach($reste as $key=>$value)
                // {
                //     if(preg_match(^[0-9]$))
                // }
                $this->setAttribute('params' ,array_splice($params,2));

                // echo '<pre>';print_r($this->attributes);
                
        
            }

        
       
    }



    
    public function setAttribute($name ,$value)
    {
        $this->attributes[$name] = $value;
    }

    public function getAttribute($name , $default = null)
    {
        return isset($this->attributes[$name]) ? $this->attributes[$name]  : $default;
    }

        public function getPrefix()
        {
            return $this->getAttribute('prefix' ,'');
        }

         public function getController()
         {
             return  $this->getAttribute('controller' , $this->defaultController);
            
         }

         
         public function getAction()
         {
             return  $this->getAttribute('action' , $this->defaultAction);
            
         }

                  
         public function getParams()
         {
             return  $this->getAttribute('params' , []);
            
         }

         public function getRequest()
         {
             return $this->request;
         }

        
     
        public function getDefaultController()
        {
            return $this->defaultController;
        }

        public function getDefaultAction()
        {
            return $this->defaultAction;
        }

       
       
          
          
     
}