<?php
namespace controller ;
use \core\Dispatcher;

Class Connection extends Controller{

	public function __construct(Dispatcher $dispatcher){

		parent::__construct($dispatcher);
    }
    

   
    public function index()
    {
      $info=[];
      if($_POST)
      {
           
           $mdp=trim(strip_tags($_POST['mdp']));
           $pseudo=trim(strip_tags($_POST['pseudo']));

           $model=$this->loadModel("user");

            if($user=$model->getUserByUsername($pseudo))
            {
                if(!password_verify($mdp,$user['mdp']))
                {
                  $info['erreur']='identifiant ou mot de passe incorrect';
                }
                else
                {
                    if($user['statut'] !=='true')
                    {
                      $info['erreur']='vous n \'avez pas acces à cette page';
                    }
                    else
                    {
                      $this->session->set('utilisateur_actuel',array('session_id'=>$user['ID'],'session_start'=>time(),'session_limite'=>600,'statut'=>$user['statut']));
                    header('location:/SitePortFolio/admin/profil');
                    exit;
                    } 
                }

              }
          
          else
          {

            $info['erreur']='identifiant ou mot de passe incorrect';
          }
    
      }
       return  $this->render("layoutB.php","connection.php",array(

          'info'=>$info,
          'logo'=>$this->loadModel('profil')->getEntete()['logo']
      ));

     
  }

  public function adminIndex()
  {
    $this->session-> close();
    header('location:/SitePortFolio/connection');

  }

}




