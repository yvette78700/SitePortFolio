  
    <div  class="container  mx-auto competence px-5">
        <ul class="nav nav-tabs profilUser pt-4 ">
            <li class="nav-item">
                <a class="nav-link active" href="/SitePortFolio/admin/profil/affiche/<?= $id[0];?>">Compétences</a>
                </li>
                <li class="nav-item">
                <a class="nav-link " href="/SitePortFolio/admin/profil/afficheR/<?= $id[0];?>">Réalisation</a>
                </li>
            
                <li class="nav-item">
                <a class="nav-link" href="/SitePortFolio/admin/profil/afficheE/<?= $id[0];?>">Expériences</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" href="/SitePortFolio/admin/profil/afficheF/<?= $id[0];?>">Formations</a>
                </li>
        </ul>
        <a class="btn btn-primary mt-5" href="/SitePortFolio/admin/profil">Revenir au tableau de bord</a>
        <h1 class="text-center font-italic">MES COMPETENCES</h1>
      
        <table class="table table-bordered text-center table-responsive ">
            <thead>
                    <tr>
                    
                        <?php foreach($competences[0] as $key=> $value): ?>
                            <th><?= $key ?></th>
                        <?php endforeach; ?>

                       

                        <th>Modifier</th>

                        <th>Supprimer</th>
                        
                    </tr>
            </thead>
            <tbody>
            <?php foreach($competences as $key => $value): ?>
                <tr>
                    <td><?=$value['id_competence']; ?></td>
                    <td><?=$value['domaine_competence']; ?></td>
                    <td><?=$value['competence']; ?></td>
                    <td><?=$value['id_utilisateur']; ?></td>
                    <td><img src="<?=$value['image_domaine'];?>" alt="" width="50" height="50"></td>
                    
                    
                    <td><a href="/SitePortFolio/admin/profil/updateCompetence/<?= $value['id_utilisateur'];?>/<?= $value['id_competence'] ;?>" class="text-dark"><i class="fas fa-wrench"></i></a></td>
                    <td><a href="/SitePortFolio/admin/profil/deleteCompetence/<?= $value['id_utilisateur'];?>/<?= $value['id_competence'] ;?>" class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
        <!-- *********************** -->
        <h1 class="text-center font-italic ">Ajouter une compétence</h1>
        <div id="ajoutcompetence" >
            <form method="post" enctype="multipart/form-data" action="/SitePortFolio/admin/profil/addCompetence/<?=$competences[0]['id_utilisateur'];?>">
                <div class="form-group">
                    <label for="exampleDomaine">Domaine Compétence</label>
                    <input type="text" class="form-control" id="exampleDomaine" aria-describedby="emailHelp" placeholder="Entre un domaine de competence" name="domaine">
                   
                </div>
                <div class="form-group">
                    <label for="exampleCompetence">Compétence</label>
                    <input type="text" class="form-control" id="exampleCompetence" aria-describedby="emailHelp" placeholder="entre une Compétence" name="competence"
                   >
                   
                </div>

                <div class="form-group">
                    <label for="exampleFormControlFile1">Image domaine</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_domaine"
                    >
                </div>
               
               
                <button type="submit" class="btn btn-light btn-primary" name="AjoutCompetence">Ajouter</button>
            </form>
        </div>
        <a class="btn btn-primary my-3" href="/SitePortFolio/admin/connection">Deconnexion</a>
        <!-- ************************** -->
      </div>

        
   

      
 