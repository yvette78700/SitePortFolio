
<div class="card  connection mx-auto " >
  <div class="card-body">
          <?php if(isset($info['erreur'])){?>
          <div><?php echo $info['erreur']; ?></div>
          <?php } ?>
      <form  method="post"  action="">
          <div class="form-group">
            <?php if(isset($info['pseudo'])and !empty($_POST)) echo $info['pseudo'];?>
            <label for="exampleInputPseudo">Pseudo</label>
            <input type="text" class="form-control" id="exampleInputPseudo"  placeholder="Enter Pseudo" name="pseudo">
          
          </div>
          <div class="form-group">
            <?php if(isset($info['mdp'])and !empty($_POST)) echo $info['mdp'];?>
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="mdp">
          </div>
            
            <button type="submit" class="btn  btn-light btn-primary">Se connecter</button>
    </form>
  </div>
</div>


