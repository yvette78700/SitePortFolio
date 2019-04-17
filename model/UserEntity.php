<?php
namespace model;

class UserEntity extends EntityRepository
{
	
	public function __construct(){

		parent::__construct();
  }
    

  // requete sur les utilisateurs
    public function getUsers(){

        $result=$this->getDb()->query("SELECT id_utilisateur as ID,nom,prenom,email,telephone,statut,sexe,ville,pays FROM t_utilisateurs")->fetchAll(\PDO::FETCH_ASSOC);
		return $result;
    }

    public function insertUser(){

      $this->getDb()->exec("INSERT INTO `t_utilisateurs`( `prenom`, `nom`, `email`, `telephone`, `mdp`, `pseudo`, `statut`, `age`, `date_naissance`, `sexe`, `adresse`, `code_postal`, `ville`, `pays`) VALUES ('$_POST[prenom]','$_POST[nom]','$_POST[mail]','$_POST[tel]','$_POST[mdp]','$_POST[pseudo]','false','$_POST[age]','$_POST[date]','$_POST[sexe]','$_POST[adresse]','$_POST[CP]','$_POST[ville]','$_POST[pays]')");
		
    }

    public function deleteUser($id)
    {
      $this->getDb()->exec("DELETE FROM `t_utilisateurs` WHERE id_utilisateur=$id");
    }


    public function getUser($id)
    {
      $result=$this->getDb()->query("SELECT * FROM t_utilisateurs WHERE id_utilisateur='$id'")->fetch(\PDO::FETCH_ASSOC);
      return $result;

    }

    public function updateUser($id)
    {
      
      $this->getDb()->exec("UPDATE `t_utilisateurs` SET `prenom`='$_POST[prenom]',`nom`='$_POST[nom]',`email`='$_POST[mail]',`telephone`='$_POST[tel]',`mdp`='$_POST[mdp]',`pseudo`='$_POST[pseudo]',`age`='$_POST[age]',`date_naissance`='$_POST[date]',`sexe`='$_POST[sexe]',`adresse`='$_POST[adresse]',`code_postal`='$_POST[CP]',`ville`='$_POST[ville]',`pays`='$_POST[pays]'WHERE id_utilisateur=$id");
    }


    // requete sur un utilisateur

    public function getCompetencesUser($id)
    {
     $result= $this->getDb()->query("SELECT * FROM t_competences WHERE id_utilisateur='$id'")->fetchAll(\PDO::FETCH_ASSOC);

     return $result;
    }


    public function getRealisationUser($id)
    {
     $result= $this->getDb()->query("SELECT * FROM t_realisations WHERE id_utilisateur='$id'")->fetchAll(\PDO::FETCH_ASSOC);

     return $result;
    }

    public function getFormationsUser($id)
    {
     $result= $this->getDb()->query("SELECT * FROM t_formations WHERE id_utilisateur='$id'")->fetchAll(\PDO::FETCH_ASSOC);

     return $result;
    }


    public function getExperiencesUser($id)
    {
     $result= $this->getDb()->query("SELECT * FROM t_experiences WHERE id_utilisateur='$id'")->fetchAll(\PDO::FETCH_ASSOC);

     return $result;
    }


//requete pour le backoffice

public function getUserByUsername($pseudo)
{
      $result=$this->getDb()->query("SELECT id_utilisateur as ID,pseudo,mdp,statut  FROM t_utilisateurs WHERE pseudo='$pseudo'")->fetch(\PDO::FETCH_ASSOC);
		return $result;
}


  //requete concernant les domaine pour un utilisateur donné

  
  public function insertcompetence($id){

    $photo= $_FILES['image_domaine']['name'];
    $this->getDb()->exec("INSERT INTO `t_competences`( `domaine_competence`, `competence`,`id_utilisateur`, `image_domaine`) VALUES ('$_POST[domaine]','$_POST[competence]','$id','$photo') ");
  
  }


  public function insertrealisation($id){

    
    $photo= $_FILES['maquette']['name'];
    $photoM=$_FILES['modal']['name'];
    $this->getDb()->exec("INSERT INTO `t_realisations`( `maquette`, `techno`, `modal`, `id_utilisateur`) VALUES ('$photo','$_POST[techno]','$photoM','$id')");
  
    
  }


  public function insertexperience($id){

    
    $photo= $_FILES['image']['name'];
   
    $this->getDb()->exec("INSERT INTO `t_experiences`( `e_titre`, `e_dates`, `e_description`, `e_image`, `id_utilisateur`) VALUES ('$_POST[titre]','$_POST[date]','$_POST[description]','$photo','$id')");
  
    
  }


// *******************
  
  public function insertformation($id){

    
    $photo= $_FILES['image']['name'];
    
    $this->getDb()->exec("INSERT INTO `t_formations`(`f_titre`, `f_dates`, `f_description`, `f_image`, `id_utilisateur`) VALUES ('$_POST[titre]','$_POST[date]','$_POST[description]','$photo','$id')");
  
    
  }
  // *********************
  public function deletecompetence($id,$idc)
  {
    $this->getDb()->exec("DELETE FROM `t_competences` WHERE id_utilisateur='$id' AND id_competence='$idc'");
  }


  public function deleterealisation($id,$idc)
  {
    $this->getDb()->exec("DELETE FROM `t_realisations` WHERE id_utilisateur='$id' AND id_realisation='$idc'");
  }


  
  public function deleteexperience($id,$idc)
  {
    $this->getDb()->exec("DELETE FROM `t_experiences` WHERE id_utilisateur='$id' AND id_experience='$idc'");
  }


  
  public function deleteformation($id,$idc)
  {
    $this->getDb()->exec("DELETE FROM `t_formations` WHERE id_utilisateur='$id' AND id_formation='$idc'");
  }



  public function updateCompetence($id,$idc)
  {
    $photo=$_FILES['image_domaine']['name'];
    $this->getDb()->exec("UPDATE `t_competences` SET `domaine_competence`='$_POST[domaine]',`competence`='$_POST[competence]',`image_domaine`='$photo' WHERE id_utilisateur='$id' AND id_competence='$idc'");
  }


  public function updateRealisation($id,$idc)
  {
    
    $photo =  $_FILES['maquette']['name'];
    $photoM= $_FILES['modal']['name'];
    $this->getDb()->exec("UPDATE `t_realisations` SET `maquette`=' $photo ',`techno`='$_POST[techno]',`modal`='$photoM'  WHERE  `id_utilisateur`='$id' and id_realisation='$idc'");
  }


  public function updateExperience($id,$idc)
  {
    
    $photo =   $_FILES['image']['name'];
    
    $this->getDb()->exec("UPDATE `t_experiences` SET `e_titre`='$_POST[titre]',`e_dates`='$_POST[date]',`e_description`='$_POST[description]',`e_image`='$photo' WHERE `id_utilisateur`='$id' AND id_experience='$idc'");
  }


  public function updateFormation($id,$idc)
  {
    
    $photo =   $_FILES['image']['name'];
    
    $this->getDb()->exec("UPDATE `t_formations` SET `f_titre`='$_POST[titre]',`f_dates`='$_POST[date]',`f_description`='$_POST[description]',`f_image`='$photo' WHERE `id_utilisateur`='$id' AND id_formation='$idc'");
  }
}