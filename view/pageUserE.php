
  
      <div  class="experience container mt-4  px-5 py-5 mx-auto" >
      <a class="btn btn-primary mt-5" href="/SitePortFolio/admin/profil/affiche/<?= $id; ?>">Revenir au menu</a>
      <h1 class="text-center font-italic">MES EXPERIENCES</h1>
       
        <table class="table table-bordered text-center table-responsive">
            <thead>
                    <tr>
                    
                        <th>id_experience</th>
                        <th>titre</th>
                        <th>dates</th>
                        <th>description</th>
                        <th>image</th>

                        <th>Modifier</th>

                        <th>Supprimer</th>
                        
                    </tr>
            </thead>
            <tbody>
            <?php foreach($experiences as $key => $value): ?>
                <tr>
                    <td><?=$value['id_experience']; ?></td>
                    <td><?=$value['e_titre']; ?></td>
                    <td><?=$value['e_dates']; ?></td>
                    <td><?=$value['e_description']; ?></td>
                    <td><img src="<?=$value['e_image'];?>" alt="" width="50" height="50"></td>
                    
                    <td><a href="/SitePortFolio/admin/profil/updateExperience/<?=$value['id_utilisateur'] ;?>/<?= $value['id_experience'] ;?>" class="text-dark"><i class="fas fa-wrench"></i></a></td>
                    <td><a href="/SitePortFolio/admin/profil/deleteExperience/<?=$value['id_utilisateur'] ;?>/<?= $value['id_experience'] ;?>" class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <!-- ************************* -->
        <h1 class="text-center font-italic" >Ajouter une expérience</h1>
        <div id="ajoutexperience" >
        <form method="post" enctype="multipart/form-data" action="/SitePortFolio/admin/profil/addExperience/<?=$experiences[0]['id_utilisateur'];?>">
                
                <div class="form-group">
                    <label for="Titre">Titre</label>
                    <input type="text" class="form-control" id="Titre" name="titre">
                </div>
                <div class="form-group">
                    <label for="date">Date</label>
                    <input type="text" class="form-control" id="date" name="date">
                </div>
                <div class="form-group">
                    <label for="Description">Description</label>
                    <input type="text" class="form-control" id="Description" name="description">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlFile1">Image</label>
                    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
                </div>
       
                <button type="submit" class="btn btn-light btn-primary" name="AjoutExperience">Ajouter</button>
            </form>
        </div>
        <!-- ****************************** -->
        <a class="btn btn-primary mt-2" href="/SitePortFolio/admin/connection">Deconnexion</a>
      </div>

     
