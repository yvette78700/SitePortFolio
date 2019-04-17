<form method="post" enctype="multipart/form-data" action="" class="formationUser container pt-5" >
                
    <div class="form-group">
        <label for="Titre">Titre</label>
        <input type="text" class="form-control" id="Titre" name="titre" value="<?= (isset($formation))? $formation['f_titre'] :'';?>">
    </div>
    <div class="form-group">
        <label for="date">Date</label>
        <input type="text" class="form-control" id="date" name="date" value="<?= (isset($formation))? $formation['f_dates'] :'';?>">
    </div>
    <div class="form-group">
        <label for="Description">Description</label>
        <input type="text" class="form-control" id="Description" name="description" value="<?= (isset($formation))? $formation['f_description'] :'';?>">
    </div>
    <div class="form-group">
        <label for="exampleFormControlFile1">Image</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image">
    </div>
    
    
    
    
    <button type="submit" class="btn btn-light btn-primary" name="AjoutFormation">Ajouter</button>
</form>