<form method="post" enctype="multipart/form-data" action="" class="competenceUser container pt-5">
    <div class="form-group">
        <label for="exampleDomaine">Domaine Compétence</label>
        <input type="text" class="form-control" id="exampleDomaine" aria-describedby="emailHelp" placeholder="Entre un domaine de competence" name="domaine" value="<?= (isset($competence))? $competence['domaine_competence'] :'';?>">
        
    </div>
    <div class="form-group">
        <label for="examplecompetence">Compétence</label>
        <input type="text" class="form-control" id="exampleCompetence" aria-describedby="emailHelp" placeholder="entre une Compétence" name="competence" value="<?= (isset($competence))? $competence['competence'] :'';?>"
        >
        
    </div>

    <div class="form-group">
        <label for="exampleFormControlFile1">Image domaine</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="image_domaine" 
        >
    </div>
    
    
    <button type="submit" class="btn btn-light btn-primary" name="AjoutCompetence">Ajouter</button>
</form>