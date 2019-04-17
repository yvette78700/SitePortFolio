<?php
namespace controller ;
use \core\Dispatcher;

Class Profil extends Controller{

	public function __construct(Dispatcher $dispatcher){

        parent::__construct($dispatcher);
 
	}


    //affiche le front office d'un utilisateur choisi

    public function index(){

		$tab=$this->loadModel()->getDomaine();

		$element=array();

        foreach($tab as $value)
        {

			$element[$value['image_domaine']]=$value['domaine_competence'];


		}

		$comp=array();
        foreach($element as $key=> $val)
        {
			
			$k=sizeof($this->loadModel()->getElement("$val"));
			$comp[$val]=$this->loadModel()->getElement("$val");
			$comp[$val][$k]=$key;


		}


		$this->render('layout.php','donnees.php', array(

			'titre'=>$this->loadModel()->getEntete()['titre_cv'],

			'accroche'=>$this->loadModel()->getEntete()['prenom'].' '.$this->loadModel()->getEntete()['nom'],

			'logo'=>$this->loadModel()->getEntete()['logo'],

			'social'=>$this->loadModel()->getSocial(),

			"contenu"=>$comp,
			
			'realisation'=>$this->loadModel()->getRealisations(),
			'experience' =>$this->loadModel()->getExperiences(),
			'formation' =>$this->loadModel()->getFormations()
			

		));
	}

	
	


    //ajoute un utilisateur

    public function adminIndex()
    {
        $model=$this->loadModel("user");
        $this->render('layoutB.php','Users.php',array
        (
        'users'=>$model->getUsers(),
        'logo'=>$this->loadModel()->getEntete()['logo']
   
         ));
        
    }
    
	public function adminAddUser(){  
    

    $model=$this->loadModel("user");

            $params=[];
            
                if (!empty($_POST)){
        
                    
                     if($_POST['nom']==null)  $params['nom']="le champ nom est obligatoire"; 
                        
                      if($_POST['pseudo']==null) $params['pseudo']= "le champ pseudo est obligatoire"  ;
        
                     if($_POST['mdp']==null) $params['mdp']= "le champ password est obligatoire";
        
                    if($_POST['pays']==null) $params['pays']= "le champ pays est obligatoire" ;
                                                    
                     if($_POST['age']==null) $params['age']= "le champ age est obligatoire" ;
        
                
                    
                    
                    if(empty($params))
                    {
                        foreach ($_POST as $key => $value) 
                        {
  
                            if($key === 'mdp')
                            {
  
                                $_POST[$key] = password_hash($value, PASSWORD_DEFAULT);
  
                            }
                            else{
                                $_POST[$key] = htmlspecialchars(addslashes($value));
                            }
    
                        }

                        $model->insertUser();
                        header("location:/SitePortFolio/admin/profil");
                        
                        
                    }
                   
                    
                }
                
              
        
                        $this->render('layoutB.php','userForm.php',array
                        ('params'=>$params,
                        'users'=>$model->getUsers(),
                        'logo'=>$this->loadModel()->getEntete()['logo']
                   
                         ));
                        
        
                }
		

		
                // ajout competence

                public function adminAddCompetence()
                {  
                   
                    // print_r($_POST);

                    $id=$this->router()->getParams();
                   
                    if(isset($_POST['AjoutCompetence'])){
                        
                        
                        $photo_bdd="";
                
                    
                      
                        if(!empty($_FILES['image_domaine']['name'])){
                           
                            $nom_photo =  $_FILES['image_domaine']['name'];
                    
                            $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/competence/".$nom_photo;
                        
                            $photo="/SitePortFolio/public/img/competence/".$nom_photo;
                            copy($_FILES['image_domaine']['tmp_name'],$photo_bdd );
                            $_FILES['image_domaine']['name']=$photo;
                        }
                    
                        
                        foreach ($_POST as $key => $value) {

                        
                             $_POST[$key] = htmlspecialchars(addslashes($value));
                        }
                    
                       
                       
                       $this->loadModel("user")->insertcompetence($id[0]);
                       header("location:/SitePortFolio/admin/profil/affiche/$id[0]");
                       die();
                    }

                    
                }

                //supprime une competence

                public function adminDeleteCompetence()
                {
                    $id=$this->router()->getParams();
                    $this->loadModel('user')->deletecompetence($id[0],$id[1]);
                    header("location:/SitePortFolio/admin/profil/affiche/$id[0]");
                    exit;
                }


                // met a jour une competence
                public function adminUpdateCompetence()
                {

                         $id=$this->router()->getParams();
                         $model=$this->loadModel("user");
            
                    if($_POST)
                    {
                        $photo_bdd="";
                
                    
                      
                        if(!empty($_FILES['image_domaine']['name'])){
                           
                            $nom_photo =  $_FILES['image_domaine']['name'];
                    
                            $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/competence/".$nom_photo;
                        
                            $photo="/SitePortFolio/public/img/competence/".$nom_photo;
                            copy($_FILES['image_domaine']['tmp_name'],$photo_bdd );
                            $_FILES['image_domaine']['name']=$photo;
                        }
                    
                        
                        foreach ($_POST as $key => $value) {

                        
                             $_POST[$key] = htmlspecialchars(addslashes($value));
                        }
            
                          $model->updateCompetence($id[0],$id[1]);
                          header("location:/SitePortFolio/admin/profil/affiche/$id[0]");
                        exit;
                    }

                    $competence=$model->getCompetencesUser($id[0]);

                    foreach($competence as $key =>$value)
                    {
                        if($value['id_competence'] === $id[1])  $competence=$value;
                    }
                    $this->render('layoutB.php','editcompetence.php',array
                    (
                   
                    'competence'=> $competence,
                    'logo'=>$this->loadModel()->getEntete()['logo']
                     ));
                  
                }
            
                // *****



                // ajout experience

                public function adminAddExperience()
                {
                    
                    $id=$this->router()->getParams();
                    
                    if(isset($_POST['AjoutExperience'])){
                        
                        
                        $photo_bdd="";
           
                        if(!empty($_FILES['image']['name'])){
                           
                            $nom_photo =  $_FILES['image']['name'];
                           
                         $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/experience/".$nom_photo;
                         
                        
                            $photo="/SitePortFolio/public/img/experience/".$nom_photo;
                          
                            copy($_FILES['image']['tmp_name'],$photo_bdd );
                            $_FILES['image']['name']=$photo;
                            
                        }
                    
                       
                      
                        foreach ($_POST as $key => $value) {

                        
                             $_POST[$key] = htmlspecialchars(addslashes($value));
                        }
                    
                       
                       
                       $this->loadModel("user")->insertexperience($id[0],$id[1]);
                       header("location:/SitePortFolio/admin/profil/afficheE/$id[0]");
                       exit;
                      
                    }
                }

                // supprime experience
                public function adminDeleteExperience()
                {
                    $id=$this->router()->getParams();
                    $this->loadModel('user')->deleteexperience($id[0],$id[1]);
                    header("location:/SitePortFolio/admin/profil/afficheE/$id[0]");
                    exit;
                }

                // met à jour expérience
public function adminUpdateExperience()
{
    $id=$this->router()->getParams();
    $model=$this->loadModel("user");

if($_POST)
{
   
    $photo_bdd="";
           
    if(!empty($_FILES['image']['name'])){
       
        $nom_photo =  $_FILES['image']['name'];
       
     $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/experience/".$nom_photo;
     
    
        $photo="/SitePortFolio/public/img/experience/".$nom_photo;
      
        copy($_FILES['image']['tmp_name'],$photo_bdd );
        $_FILES['image']['name']=$photo;
        
    }

   
  
    foreach ($_POST as $key => $value) {

    
         $_POST[$key] = htmlspecialchars(addslashes($value));
    }

     $model->updateExperience($id[0],$id[1]);
     header("location:/SitePortFolio/admin/profil/afficheE/$id[0]");
   exit;
}

$experience=$model->getExperiencesUser($id[0]);

foreach($experience as $key =>$value)
{
   if($value['id_experience'] === $id[1])  $experience=$value;
}
$this->render('layoutB.php','editexperience.php',array
(

'experience'=> $experience,
'logo'=>$this->loadModel()->getEntete()['logo']
));
}
                // *********************

                // ajout realisation
                public function adminAddRealisation()
                {
                    
                   
                    if(isset($_POST['AjoutRealisation'])){

                       
                        $id=$this->router()->getParams();
                      
                   
                    
                        
                        $photo_bdd="";
                        $photo_bddM="";
                    
                      
                        if(!empty($_FILES['maquette']['name'])){
                           
                            $nom_photo =  $_FILES['maquette']['name'];
                            $nom_photoM= $_FILES['modal']['name'];
                    
                            $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/realisation/".$nom_photo;
                            $photo_bddM=$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/realisation/".$nom_photoM;
                        
                            $photo="/SitePortFolio/public/img/realisation/".$nom_photo;
                            $photoM="/SitePortFolio/public/img/realisation/".$nom_photoM;
                            copy($_FILES['maquette']['tmp_name'],$photo_bdd );
                            copy($_FILES['modal']['tmp_name'],$photo_bddM);
                            $_FILES['maquette']['name']=$photo;
                            $_FILES['modal']['name']=$photoM;
                        }
                    
                       
                        foreach ($_POST as $key => $value) {

                        
                             $_POST[$key] = htmlspecialchars(addslashes($value));
                        }
                    
                       
                       
                       $this->loadModel("user")->insertrealisation($id[0]);
                      
                       header("location:/SitePortFolio/admin/profil/afficheR/$id[0]");
                       exit;
                    }
                }

                //supprime une réalisation
                public function adminDeleteRealisation()
                {
                    $id=$this->router()->getParams();
                    $this->loadModel('user')->deleterealisation($id[0],$id[1]);
                    header("location:/SitePortFolio/admin/profil/afficheR/$id[0]");
                    exit;
                }

//met à jour une réalisation
public function adminUpdateRealisation()
{

         $id=$this->router()->getParams();
         $model=$this->loadModel("user");

    if($_POST)
    {
        
        $photo_bdd="";
        $photo_bddM="";
    
      
        if(!empty($_FILES['maquette']['name'])){
           
            $nom_photo =  $_FILES['maquette']['name'];
            $nom_photoM= $_FILES['modal']['name'];
    
            $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/realisation/".$nom_photo;
            $photo_bddM=$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/realisation/".$nom_photoM;
        
            $photo="/SitePortFolio/public/img/realisation/".$nom_photo;
            $photoM="/SitePortFolio/public/img/realisation/".$nom_photoM;
            copy($_FILES['maquette']['tmp_name'],$photo_bdd );
            copy($_FILES['modal']['tmp_name'],$photo_bddM);
            $_FILES['maquette']['name']=$photo;
            $_FILES['modal']['name']=$photoM;
        }
    
       
        foreach ($_POST as $key => $value) {

        
             $_POST[$key] = htmlspecialchars(addslashes($value));
        }

          $model->updateRealisation($id[0],$id[1]);
          header("location:/SitePortFolio/admin/profil/afficheR/$id[0]");
        exit;
    }

    $realisation=$model->getRealisationUser($id[0]);

    foreach($realisation as $key =>$value)
    {
        if($value['id_realisation'] === $id[1])  $realisation=$value;
    }
    $this->render('layoutB.php','editrealisation.php',array
    (
   
    'realisation'=> $realisation,
    'logo'=>$this->loadModel()->getEntete()['logo']
     ));
  
}
// *******************

                // ajout formation

                public function adminAddFormation()
                {
                      
                    $id=$this->router()->getParams();
                      
                    if(isset($_POST['AjoutFormation'])){
                        
                        
                        $photo_bdd="";
       
                        if(!empty($_FILES['image']['name'])){
                           
                            $nom_photo =  $_FILES['image']['name'];
                           
                         $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/experience/".$nom_photo;
                         
                        
                            $photo="/SitePortFolio/public/img/experience/".$nom_photo;
                          
                            copy($_FILES['image']['tmp_name'],$photo_bdd );
                            $_FILES['image']['name']=$photo;
                            
                        }
             
                        foreach ($_POST as $key => $value) {

                        
                             $_POST[$key] = htmlspecialchars(addslashes($value));
                        }
                    
                       $this->loadModel("user")->insertformation($id[0]);
                       header("location:/SitePortFolio/admin/profil/afficheF/$id[0]");
                       exit;
                      
                    }

                }
	
							
                //supprime une formation
                public function adminDeleteFormation()
                {
                    $id=$this->router()->getParams();
                    $this->loadModel('user')->deleteformation($id[0],$id[1]);
                    header("location:/SitePortFolio/admin/profil/afficheF/$id[0]");
                    exit;
                }



                // met à jour une formation

                public function adminUpdateFormation()
                {
                    $id=$this->router()->getParams();
    $model=$this->loadModel("user");

if($_POST)
{
   
     
    $photo_bdd="";
       
    if(!empty($_FILES['image']['name'])){
       
        $nom_photo =  $_FILES['image']['name'];
       
     $photo_bdd =$_SERVER['DOCUMENT_ROOT']."/SitePortFolio/public/img/experience/".$nom_photo;
     
    
        $photo="/SitePortFolio/public/img/experience/".$nom_photo;
      
        copy($_FILES['image']['tmp_name'],$photo_bdd );
        $_FILES['image']['name']=$photo;
        
    }

    foreach ($_POST as $key => $value) {

    
         $_POST[$key] = htmlspecialchars(addslashes($value));
    }

     $model->updateFormation($id[0],$id[1]);
     header("location:/SitePortFolio/admin/profil/afficheF/$id[0]");
   exit;
}

$formation=$model->getformationsUser($id[0]);

foreach($formation as $key =>$value)
{
   if($value['id_formation'] === $id[1])  $formation=$value;
}
$this->render('layoutB.php','editformation.php',array
(

'formation'=> $formation,

'logo'=>$this->loadModel()->getEntete()['logo']
));
                }
              

//met a jour un utilisateur
public function adminUpdate()
{
        $model=$this->loadModel('user');
         $id=$this->router()->getParams();


    if($_POST)
    {
        if(strlen($_POST['mdp']<60))
        $_POST['mdp']=password_hash($_POST['mdp'],PASSWORD_DEFAULT);
          $model->updateUser($id[0]);
          header("location:/SitePortFolio/admin");
        exit;
    }
    $this->render('layoutB.php','useredit.php',array
    (
    'users'=>	$model->getUsers(),
    'user' =>	$model->getUser($id[0]),
    'logo'=>$this->loadModel()->getEntete()['logo']
     ));
  
}

//supprime un utilisateur de la liste
public function adminDelete()
{
    $id=$this->router()->getParams();
    $this->loadModel("user")->deleteUser($id[0]);
     header("location:/SitePortFolio/admin");
    exit;
}


 // affiche la back office d'un utilisateur
 public function adminAffiche()
 {
     $id=$this->router()->getParams();

     
    // echo '<pre>';print_r($id);
    //     die;
     if(isset($id[0]))
     {
     $this->render('layoutB.php','pageUser.php',array
     (
         'id'=>$id[0],
         'logo'=>$this->loadModel()->getEntete()['logo'],
         'competences'=>$this->loadModel('user')->getCompetencesUser($id[0])
      
         ));
     }
 }
            




    // information sur realisation
    public function adminAfficheR()
    {

        //  echo '<pre>';print_r($this->router());
        
        $id=$this->router()->getParams();

        if(isset($id[0]))
        {
        $this->render('layoutB.php','pageUserR.php',array
        (
            
            'realisations'=>$this->loadModel('user')->getRealisationUser($id[0]),
           
            'logo'=>$this->loadModel()->getEntete()['logo'],
            'id'=>$id[0]
          
            
        
            ));
        }

    }

    // information sur formation
    public function adminAfficheF()
    {

        //  echo '<pre>';print_r($this->router());
        
        $id=$this->router()->getParams();

        if(isset($id[0]))
        {
        $this->render('layoutB.php','pageUserF.php',array
        (
            'formations'=>$this->loadModel('user')->getFormationsUser($id[0]),
           
            'logo'=>$this->loadModel()->getEntete()['logo'],
            'id'=>$id[0]
          
            
        
            ));
        }

    }

    // information sur experience
    public function adminAfficheE()
    {

        //  echo '<pre>';print_r($this->router());
        
        $id=$this->router()->getParams();

        if(isset($id[0]))
        {
        $this->render('layoutB.php','pageUserE.php',array
        (
            'experiences'=>$this->loadModel('user')->getExperiencesUser($id[0]),
            'logo'=>$this->loadModel()->getEntete()['logo'],
            'id'=>$id[0]
          
            ));
        }

    }
}