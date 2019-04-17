<?php
namespace model;

class  EntityRepository
{
    private $db;
    
    public function __construct(){

        if(!$this->db) 
		{
            try 
            {
                $this->db = new \PDO('mysql:host=localhost;dbname=siteportfolio;charset=utf8', 'root', '', array(\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION));
            }
            catch(\PDOException $e) 
            {
                die('Problème de connexion bdd ' . $e->getMessage());
            }
		}
	}

   
	
	// recupere la BDD
	protected function getDb() 
	{
		return $this->db; 
    }
    


    /*
    C create
    R read
    U update(modifier)
    D delete
    */

    //competence

    
    
}



	
