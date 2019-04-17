<?php
namespace controller;
use \core\Dispatcher;

class Controller
{

	private $router;
	
	protected $session;

	public function __construct(Dispatcher $dispatcher)
	{
		$this->session=$dispatcher->getSession();
		$this->router = $dispatcher->getRouter();
		$this->AuthCheck();
		
	}

    public function render($layout, $template, $parameters = array()) 
	{

		extract($parameters);
		ob_start(); 
		require "view/$template";
		
		$content = ob_get_clean(); 
	

		ob_start(); 
		require "view/$layout";
		return ob_end_flush();
	}

	//charge le model ou le controller ici puisé ses données qui prend une partie du nom du contoller
	//le model doit avoir une partie du nom du controlleur dont il depend
	//null en param est la valeur par defaut donc facultatif


	// public function loadModel()
	// {
	// 	$classname=$this->router->getController();
	
	// 	$model='\model\\'. ucfirst(trim($classname)) .'Entity';
	// 	//trim  evec un param ici tous les espaces sont supprimer
		
		
	// 	if( class_exists($model, true) and is_subclass_of($model ,'\model\\EntityRepository')){
	// 		return new $model();
	// 	}	
	// }

	
	public function loadModel(string $model=null) 
	{
		//$model est le controller ou pas
		if(!$model) $model = $this->router->getController();
		$classname = '\model\\'. ucfirst(trim($model)) .'Entity';
			// verification de  l'existance de la classe sans la charger car false en param
			if(!class_exists($classname) or !is_subclass_of($classname ,'\model\EntityRepository'))
			throw new \Exception('Error Processing Request: class model \''.ucfirst($model).'\'', 1);
			return new $classname();


	}

	// protected function request(){
	// 	return $this->router->getRequest();
	// }

	public function router()
	{
		return $this->router;
	}

	


	public  function AuthCheck()
	{
		if(!empty($this->router->getPrefix()))
		{
			if(!$this->session->isConnecte())
			{
				header('location:/SitePortFolio/connection');
			
				die();
			}

		
			if($this->session->isExpired()) 
			{
				$this->logout();
			}
			else{ $this->session->renew(); }
		}
	}


	protected function logout()
	{
		$this->session->close();
		header('location:/SitePortFolio/connection');
	}


	
}