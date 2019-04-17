<div class="container formUser py-3">

<a class="btn btn-primary my-2" href="/SitePortFolio/admin/profil">Revenir au tableau de bord</a>
           <h1 class="text-center">Ajouter un utilisateur</h1>
    
         <form method="post" action="" >

            <div class="form-row">
                
                <div class="form-group col-md-6">
                <?php  if(isset($params['nom'])){ ?>
                    <div class="alert alert-danger" role="alert"><?=$params['nom']; ?></div>
                <?php  } ?>
                    <label for="exampleInputNom">Nom</label>
                    <input type="text" class="form-control" id="exampleInputNom"  placeholder="Enter Nom" name="nom" value="">
                    
                </div>
                <div class="form-group col-md-6">
                    <label for="exampleInputPrenom">Prenom</label>
                    <input type="text" class="form-control" id="exampleInputPrenom"  placeholder="Enter Prenom" name="prenom" value="">
                
                </div>


            </div>

            <div class="form-row ">

                
                <div class="form-group col-md-6">
                <?php  if(isset($params['pseudo'])){ ?>
                    <div class="alert alert-danger" role="alert"><?=$params['pseudo']; ?></div>
                <?php  } ?>
                    <label for="exampleInputPseudo">Pseudo</label>
                    <input type="text" class="form-control" id="exampleInputPseudo"  placeholder="Enter Pseudo" name="pseudo" value="" >
                
                </div>

                <div class="form-group col-md-6">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1"  aria-describedby="emailHelp" placeholder="Enter email" name="mail" value="">
                
                </div>

            </div>

            
            <div class="form-row">

                <div class="form-group col-md-6">
                <label for="exampleInputphone">Telephone</label>
                <input type="text" class="form-control" id="exampleInputphone"  placeholder="Enter phone" name="tel" value="" >
                
                </div>

            
            <div class="form-group col-md-6">
            <?php  if(isset($params['mdp'])){ ?>
                    <div class="alert alert-danger" role="alert"><?=$params['mdp']; ?></div>
                <?php  } ?>
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp" value="">
            </div>

            </div>
            
            <div class="form-row">


            <div class="form-group col-md-6">
            <?php  if(isset($params['age'])){ ?>
                    <div class="alert alert-danger" role="alert"><?=$params['age']; ?></div>
                <?php  } ?>
                <label for="exampleInputAge">Age</label>
                <input type="number" min="1" max="120" class="form-control" id="exampleInputAge"  placeholder="Enter Age" name="age" value="" >
                
                </div>
                <div class="form-group col-md-6">
                <label for="exampleInputnaissance">Date naissance</label>
                <input type="date" class="form-control" id="exampleInpunaissance"  placeholder="Enter Date naissance" name="date" value="">
                
                </div>
            </div>

            <div class="form-row">

                <div class="form-group col-md-6">
                <label for="exampleInputAdresse">Adresse</label>
                <input type="text" class="form-control" id="exampleInputAdresse"  placeholder="Enter Adresse" name="adresse" value="" >
                
                </div>
                <div class="form-group col-md-6">
                <label for="exampleInputCp">Code Postal</label>
                <input type="text" class="form-control" id="exampleInputCp"  placeholder="Enter Adresse" name="CP" value="">
                
                </div>
            </div>


            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="exampleInputVille">Ville</label>
                <input type="text" class="form-control" id="exampleInputVille"  placeholder="Enter Ville" name="ville" value="">
                
                </div>
                
                <div class="form-group col-md-6">
                <?php  if(isset($params['pays'])){ ?>
                    <div class="alert alert-danger" role="alert"><?=$params['pays']; ?></div>
                <?php  } ?>
                    <label for="exampleInputPays">Pays</label>
                    <input type="text" class="form-control" id="exampleInputPays"  placeholder="Enter Pays" name="pays"  value="">
                
                </div>

            </div>


                
            <div class="form-group form-check row" >

            <label for="exampleInputsexe">Sexe</label>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="sexe" id="exampleRadios1" value="f" >
            <label class="form-check-label" for="exampleRadios1">
            Femme
            </label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="sexe" id="exampleRadios2" value="h" >
            <label class="form-check-label" for="exampleRadios2">
            Homme
            </label>
            </div>


            </div>
            <button type="submit" class="btn btn-light  btn-primary " name="inserer" >Inserer</button>
        </form>
     
        </div>