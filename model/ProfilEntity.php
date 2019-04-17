<?php
namespace model;

class ProfilEntity extends EntityRepository
{
	
	public function __construct(){

		parent::__construct();
	}
	//Gestion des  compétences

	//recupere differents domaine(Back-end,Front-end,Outils Web) d'un utilisateur choisi

	public function getDomaine(){

		$resultat = $this->getDb()->query("SELECT DISTINCT domaine_competence,image_domaine  FROM t_competences INNER JOIN t_utilisateurs ON t_competences.id_utilisateur = t_utilisateurs.id_utilisateur ");
		$result=$resultat->fetchAll(\PDO::FETCH_ASSOC);
		return $result;
	}




	
	//recupere informations sur entete du site pour remplir la partie profil d'un utilisateur choisi

	public function getEntete()
	{
		$resultat = $this->getDb()->query("SELECT titre_cv,logo,prenom,nom FROM t_titre_cv  INNER JOIN t_utilisateurs ON t_titre_cv .id_utilisateur = t_utilisateurs.id_utilisateur ");
		$result=$resultat->fetch(\PDO::FETCH_ASSOC);
		return $result;

	}



	//recupere les adresses reseaux sociaux d'un utilisateur choisi

	public function getSocial()
	{
		$resultat = $this->getDb()->query("SELECT social.nom,url FROM social INNER JOIN t_utilisateurs ON social.id_utilisateur = t_utilisateurs.id_utilisateur ");
		$result=$resultat->fetchAll(\PDO::FETCH_ASSOC);
		return $result;

	}


	//recupere tous les elements de chaque domaine(HTML,CSS,..) d'un utilisateur choisi


	
	public function getElement($domaine){

		$resultat = $this->getDb()->query("SELECT competence FROM t_competences  INNER JOIN t_utilisateurs ON t_competences.id_utilisateur = t_utilisateurs.id_utilisateur AND domaine_competence= '$domaine'");
		$result=$resultat->fetchAll(\PDO::FETCH_ASSOC);

		return $result;
	}


	// Gestion des realisations 


	//recupere les realisations d'un utilisateur choisi

	public function getRealisations()
	{
		$resultat = $this->getDb()->query("SELECT * FROM t_realisations INNER JOIN t_utilisateurs ON t_realisations.id_utilisateur = t_utilisateurs.id_utilisateur ");
		$result=$resultat->fetchAll(\PDO::FETCH_ASSOC);
		return $result;

	}

	
	// Gestion  des experiences
	//recupere les experiences d'un utilisateur choisi

	public function getExperiences()
	{
		$resultat = $this->getDb()->query("SELECT * FROM t_experiences INNER JOIN t_utilisateurs ON t_experiences.id_utilisateur = t_utilisateurs.id_utilisateur ");
		$result=$resultat->fetchAll(\PDO::FETCH_ASSOC);

		return $result;

	}

	 //recupere les formations d'un utilisateur choisi

	public function getFormations()
	{
		$resultat = $this->getDb()->query("SELECT * FROM t_formations INNER JOIN t_utilisateurs ON t_formations.id_utilisateur = t_utilisateurs.id_utilisateur ");
		$result=$resultat->fetchAll(\PDO::FETCH_ASSOC);

		return $result;

	}

	

	
	
}

// $e=new EntityRepository();
// echo '<pre>';print_r($_SERVER);echo '</pre>';

// $r=$e->paramconnection();
// $s=$e->getDomaine();

// // // $logo=$r['logo'];

// // // echo '/SitePortFolio/FrontOffice/'.$logo;


//  echo "<pre>";print_r($r) ;echo "</pre> <hr>";





 
// echo count($r);







