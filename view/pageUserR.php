

<div class='realisation container mt-4  px-5 py-5 mx-auto' >
<a class="btn btn-primary mt-5" href="/SitePortFolio/admin/profil/affiche/<?= $id; ?>">Revenir au menu</a>
        <h1 class="text-center font-italic">MES REALISATIONS</h1>
        
        <table class="table table-bordered text-center table-responsive">
            <thead>
                    <tr>
                        <th>id_realisation</th>
                        <th>maquette</th>
                        <th>technologie</th>
   
                        <th>Modifier</th>

                        <th>Supprimer</th>
                        
                    </tr>
            </thead>
            <tbody>
            <?php foreach($realisations as $key => $value): ?>
                <tr>

                    <td><?=$value['id_realisation']; ?></td>
                    <td><img src="<?=$value['maquette'];?>" alt="" width="50" height="50"></td>
                    <td><?=$value['techno']; ?></td>
                   
                   
                    <td><a href="/SitePortFolio/admin/profil/updateRealisation/<?= $value['id_utilisateur']; ;?>/<?= $value['id_realisation'] ;?>" class="text-dark"><i class="fas fa-wrench"></i></a></td>
                    <td><a href="/SitePortFolio/admin/profil/deleteRealisation/<?= $value['id_utilisateur']; ;?>/<?= $value['id_realisation'] ;?>" class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>

        <!-- ************************************ -->

        <h1 class="text-center font-italic">Ajouter une réalisation</h1>
        <div id="ajoutrealisation" >
            <form method="post" enctype="multipart/form-data" action="/SitePortFolio/admin/profil/addRealisation/<?=$realisations[0]['id_utilisateur'];?>">
                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Maquette</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="maquette">
                    </div>
                    
                    <div class="form-group">
                        <label for="exampleFormControlFile1">Modal</label>
                        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="modal">
                    </div>
                
                    <div class="form-group">
                        <label for="exampleUTechno">Technologie utilisé</label>
                        <input type="text" class="form-control" id="exampleTechno" aria-describedby="emailHelp" placeholder="entre la technologie utilisé" name="techno">
                    
                    </div>
                
                
                    <button type="submit" class="btn btn-light btn-primary" name="AjoutRealisation">Ajouter</button>
                </form>
            </div>
        <!-- **************************************** -->
        <a class="btn btn-primary mt-3" href="/SitePortFolio/admin/connection">Deconnexion</a>
      </div>
     
