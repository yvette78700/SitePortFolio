<form method="post" enctype="multipart/form-data" action="" class="realisationUser container pt-5">
                
    <div class="form-group">
        <label for="exampleFormControlFile1">Maquette</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="maquette" value="<?= (isset($realisation))? $realisation['maquette'] :'';?>">
    </div>
        
    <div class="form-group">
        <label for="exampleFormControlFile1">Modal</label>
        <input type="file" class="form-control-file" id="exampleFormControlFile1" name="modal">
    </div>
    
    <div class="form-group">
        <label for="exampleUTechno">Technologie utilisé</label>
        <input type="text" class="form-control" id="exampleTechno" aria-describedby="emailHelp" placeholder="entre la technologie utilisé" name="techno" value="<?= (isset($realisation))? $realisation['techno'] :'';?>">
        
    </div>
    
    
    <button type="submit" class="btn btn-light btn-primary" name="AjoutRealisation">Ajouter</button>
</form>