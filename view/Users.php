
  

<div class="listUser  mx-auto px-3 py-3 container " >
    <div class="alert alert-primary text-center" role="alert">
    <h1 >Bienvenue sur le tableau de bord  </h1> 
    </div>
    <a class="btn btn-primary my-3" href="/SitePortFolio/admin/profil/addUser">Ajouter un utilisateur</a>
        <h1 class="text-center"> Liste des Utilisateurs </h1>
       
                <table class="table table-bordered text-center table-responsive">
                                <thead>
                                        <tr>
                                        
                                            <?php foreach($users[0] as $key=> $value): ?>
                                                <th><?= $key ?></th>
                                            <?php endforeach; ?>

                                            <th>Mes informations</th>

                                            <th>Modifier</th>

                                            <th>Supprimer</th>
                                            
                                        </tr>
                                </thead>
                                <tbody>
                                <?php foreach($users as $key => $value): 
                                //    echo '<pre>'; print_r($value); echo '</pre>';
                                
                                
                                // $value possède un tableau ARRAY avec les données d'un employé par tour de boucle
                                // implode() permet d'extraire les données de chaque tableau ARRAY par employé
                                    ?>
                                    <tr>
                                        <td><?= implode('</td><td>', $value) ?></td>
                                        <td><a href="/SitePortFolio/admin/profil/affiche/<?= $users[$key]['ID'] ;?>" class="text-dark"><i class="fas fa-search"></i></a></td>
                                        <td><a href="/SitePortFolio/admin/profil/update/<?= $users[$key]['ID'] ;?>" class="text-dark"><i class="fas fa-wrench"></i></a></td>
                                        <td><a href="/SitePortFolio/admin/profil/delete/<?= $users[$key]['ID'] ;?>" class="text-dark"><i class="fas fa-trash-alt"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                                </tbody>
                </table>
       
        <a class="btn btn-primary  " href="/SitePortFolio/admin/connection">Deconnexion</a>
</div>



 