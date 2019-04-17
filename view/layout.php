<!DOCTYPE html>
<html lang="fr">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="SITE CV YVETTE TOUKAM KAKE">
  <meta name="author" content=" YVETTE TOUKAM KAKE">

  <title>SITE CV YVETTE TOUKAM</title>
  
  <!-- Bootstrap core CSS -->
  

  <link href="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/vendor/bootstrap/css/bootstrap.min.css';?>" rel="stylesheet" >

 
  <!-- Custom fonts for this template -->
  <link href="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/vendor/fontawesome-free/css/all.min.css'; ?>" rel="stylesheet" type="text/css" >
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/css/agency.css';?>" rel="stylesheet">
  <link href="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/css/style.css';?>" rel="stylesheet" >
  
 
  <!-- <script type="text/javascript">
  
  var i=1;
    
  
  function change()
  {
  
    
      document.querySelector("header.masthead").style.backgroundImage= 'url("/SitePortFolio/public/img/'+i+'.jpg")';

      i++;

     
      if(i>2){
        i=1;
      }
     
  }

  setInterval("change()",3000);
 
  </script> -->

</head>

<body id="page-top" >

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= $logo; ?>" alt="logo"></a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="profil">Profil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#competence">Compétences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#realisation">Réalisations</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#experience">Expériences</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#formation">Formations</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

 
  <?= $content; ?>

 
  <!-- Bootstrap core JavaScript -->
  
  <script src="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/vendor/jquery/jquery.min.js'; ?>"></script>
  <script src="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/vendor/bootstrap/js/bootstrap.bundle.min.js';  ?>"></script>
  

  <!-- Plugin JavaScript -->
  <script src="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/vendor/jquery-easing/jquery.easing.min.js';  ?>"></script>

  <!-- Contact form JavaScript -->
  <script src="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/js/jqBootstrapValidation.js' ; ?>"></script>
  <script src="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/js/contact_me.js';  ?>"></script>

  <!-- Custom scripts for this template -->
 
  <script src="<?= 'http://'.$_SERVER['HTTP_HOST'].'/SitePortFolio/public/js/agency.js';  ?>"></script>


 
</body>

</html>
