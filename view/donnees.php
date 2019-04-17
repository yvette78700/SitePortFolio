<!-- Header -->
<header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"><?= $titre ;?></div>
        <div class="intro-heading text-uppercase"><?= $accroche ;?> </div>

        
        
      
      </div>
      <?php foreach($social as $value){ ?>
          <a class="btn btn-light btn-xl text-uppercase js-scroll-trigger" href="<?= $value['url']; ?>" target="_blank"><?= $value['nom']; ?></a>
       <?php  } ?>
    </div>
  </header>

<!-- Compétences -->

<section id="competence">
    <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase ">Compétences</h2>
            <hr>
          </div>
        </div>
        <div class="row text-center mt-5">
            <?php foreach($contenu as $key => $value){?>
                <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fas fa-circle fa-stack-2x text-primary"></i>
                        <i class="<?=end($value) ;?> fa-stack-1x fa-inverse"></i>
                    </span>
                    <h4 class="competence-heading"><?= $key; ?> </h4>
                    <?php 
                         

                         for($i=0;$i<sizeof($value)-1;$i++){

                           echo  $value[$i]['competence']." ";
                       
                
                              } ?>
                             
                </div>
                
                <?php } ?>
        </div>
    </div>
  </section>


   <!-- Réalisations Grid -->

   <section class="bg-light" id="realisation">
    
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Réalisations</h2>
         <hr>
        </div>
      </div>
      <div class="row mt-5">

      <?php foreach($realisation as $key=> $value){ ?>


         <div class="col-md-3 col-sm-12 realisation-item">
          <a class="realisation-link" data-toggle="modal" href="<?='#realisation'.$key ?>" >
           
          <div class="realisation-hover">
              <div class="realisation-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img  class="img-fluid img-thumbnail" src="<?= $value['maquette'];?>" alt="maquette" >
           
          </a>
          <div class="realisation-caption">
          
            <p class="text-muted"><?= $value['techno'];?></p>
          </div>
        </div>
      <?php } ?>
    
      </div>

  </section>

 <!-- realisation Modals sur image réalisations-->

  <!-- Modal 1 -->

  <?php for($i=0; $i<count($realisation); $i++){?>

  <div class="realisation-modal modal fade" id="<?= 'realisation'.$i; ?>" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <img class="img-fluid d-block mx-auto" src="<?= $realisation[$i]['modal']; ?>" alt="maquette">
               
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
 <?php } ?>
  

 <!-- Experiences-->

 <section id="experience">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Expériences</h2>
          <hr>
          
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12 ">
          <ul class="timeline">
            <?php 

            $side="";
              foreach($experience as $key =>$value ){ 

                

                switch($side){

                  case "timeline-inverted":?>

                  <li class="timeline-inverted">
                      <div class="timeline-image ">
                        <img class="rounded-circle img-fluid" src="<?= $value['e_image'] ?>" alt="">
                      </div>
                      <div class="timeline-panel ">
                        <div class="timeline-heading">
                          <h4><?= $value['e_dates']; ?></h4>
                          <h4 class="subheading"><?= $value['e_titre']; ?></h4>
                        </div>
                        <div class="timeline-body">
                          <p class="text-muted"><?= $value['e_description']; ?></p>
                        </div>
                      </div>
                 </li>
                <?php $side="";
                      break;

                      case "": ?>

                      <li >
                      <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="<?= $value['e_image'] ?>" alt="">
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4><?= $value['e_dates']; ?></h4>
                          <h4 class="subheading"><?= $value['e_titre']; ?></h4>
                        </div>
                        <div class="timeline-body">
                          <p class="text-muted"><?= $value['e_description']; ?></p>
                        </div>
                      </div>
                 </li>
                 <?php $side="timeline-inverted";
                 break;


                
              }

              }?>
            
          
          </ul>
        </div>
      </div>
    </div>
  </section>  

  <!-- Formations -->

  <section id="formation">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Formations</h2>
          <hr>
          
        </div>
      </div>
      <div class="row mt-5">
        <div class="col-lg-12">
          <ul class="timeline">
            <?php 

            $side="";
              foreach($formation as $key =>$value ){ 

                

                switch($side){

                  case "timeline-inverted":?>

                  <li class="timeline-inverted">
                      <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="<?= $value['f_image'] ?>" alt="">
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4><?= $value['f_dates']; ?></h4>
                          <h4 class="subheading"><?= $value['f_titre']; ?></h4>
                        </div>
                        <div class="timeline-body">
                          <p class="text-muted"><?= $value['f_description']; ?></p>
                        </div>
                      </div>
                 </li>
                <?php $side="";
                      break;

                      case "": ?>

                      <li >
                      <div class="timeline-image">
                        <img class="rounded-circle img-fluid" src="<?= $value['f_image'] ?>" alt="">
                      </div>
                      <div class="timeline-panel">
                        <div class="timeline-heading">
                          <h4><?= $value['f_dates']; ?></h4>
                          <h4 class="subheading"><?= $value['f_titre']; ?></h4>
                        </div>
                        <div class="timeline-body">
                          <p class="text-muted"><?= $value['f_description']; ?></p>
                        </div>
                      </div>
                 </li>
                 <?php $side="timeline-inverted";
                 break;


                
              }

              }?>
            
          
          </ul>
        </div>
      </div>
    </div>
  </section>  

  <!-- formulaire de contact -->
  <!-- Contact -->
  <section id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Contact</h2>
        
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" type="text" placeholder="Your Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" type="email" placeholder="Your Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" type="tel" placeholder="Your Phone *" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group">
                  <textarea class="form-control" id="message" placeholder="Your Message *" required="required" data-validation-required-message="Please enter a message."></textarea>
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="sendMessageButton" class="btn btn-light btn-primary btn-xl text-uppercase" type="submit">Envoyer</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  
  <!-- <footer>-->
 
    <div class="footer">
      <div class="row ">
        <div class="col-lg-5 text-center">
          <span class="copyright">Copyright &copy; TOUKAM YVETTE 2019</span>
        </div>
        <div class="col-lg-2 text-center">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="https://github.com/yvette78700" target="_blank">
              <i class="fab fa-github"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="https://www.linkedin.com/in/toukam-kake-yvette-60aa19a6/" target="_blank">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
       
       <div class=" col-lg-2  offset-3 fleche   ">
              <a href="#"><i class="fas fa-arrow-alt-circle-up" ></i></a>
       </div>
       
      </div>
    </div>
 


