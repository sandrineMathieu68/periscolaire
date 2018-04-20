<?php get_header(); ?>
<?php get_template_part('slider','home') ?><!-- appel du fichier carousel à personnalisé-->


<!-- -------------------------------------------------- -->
<!-- --------  TEST gestion par catégorie  ------------ -->
<!-- -------------------------------------------------- -->
        <!-- saison 1 episode 11/13 -->
<section><!-- affichage des article saissi dans wordpress avec lien sur titre et img-->
  <div class="container-fluid sections">
      <?php if (have_posts()): ?> 

          <?php while (have_posts()): the_post(); ?>

            <?php get_template_part('templates/content'); ?>

          <?php endwhile; ?>

      <?php else: ?>
          <div class="row">
            <div class="col-12">
              <p>Y a pas de résultat !</p>
            </div><!-- /row -->
          </div>
      <?php endif; ?>
  </div><!-- /container -->
</section>


 
<!-- -------------------------------------------------- -->
<!-- --------   Les valeurs et pédagogie   ------------ -->
<!-- -------------------------------------------------- --> 
<div class="container valeurs">
  <div class="row">

    <div class="col-4 cadre" >
      <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/tt.jpg" alt="" class="img-fluid"" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Nos valeurs<br /><span>-------- </span></h5>
          
          <p class="card-text text-center">Leur  sécurité,  y  compris  pendant  leur  éventuel  transport  si  le  restaurant  est  hors  de l’école, en les prenant en charge depuis la sortie des classes en fin de matinée jusqu’à l’entrée en classe en début d’après-midi. </p>    
        </div>
    </div>

    <div class="col-4 cadre" >
      <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/mm.jpg" alt="" class="img-fluid"" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Pédagogie<br /><span>-------- </span></h5>
          <p class="card-text text-center">Leur  sécurité,  y  compris  pendant  leur  éventuel  transport  si  le  restaurant  est  hors  de l’école, en les prenant en charge depuis la sortie des classes en fin de matinée jusqu’à l’entrée en classe en début d’après-midi. .</p>    
        </div>
    </div>

    <div class="col-4 cadre" >
      <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/peinture.jpg" alt="" class="img-fluid"" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title text-center">Sécurité<br /><span>-------- </span></h5>
          <p class="card-text text-center">Leur  sécurité,  y  compris  pendant  leur  éventuel  transport  si  le  restaurant  est  hors  de l’école, en les prenant en charge depuis la sortie des classes en fin de matinée jusqu’à l’entrée en classe en début d’après-midi. </p>    
        </div>
    </div>


  </div>
</div>


<!-- --------------------------------------------------------------- -->
<!-- ------            ACTIVITÉ ET SERVICE ADMR            --------- -->
<!-- --------------------------------------------------------------- -->

<div class="container-fluid  services">

    <div class="row">

      <div class="col-6 pedagogie">
        <p class="haut">Sorties éducatives <span class="float-right">goûter équilibré</span></p>
        <p class="bas">Activés de détente, relaxation</p>
        <h3 ><img src="<?php echo get_template_directory_uri(); ?>/img/admr.jpg" alt="" class="img-fluid" width="120" height="120">Activités d'éveils pour tous</h3>
      </div>

      <div class="col-6 prestations">
        <h3>Des professionnels aux côtés de vos enfants</h3>
        <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Vos enfants sont encadrés par des professionnels recrutés pour leurs compétences et leurs qualités relationnelles.</p>
        <h3>Des solutions adaptées à vos besoins</h3> 
      <p><i class="fa fa-check-square-o" aria-hidden="true"></i>L’ADMR est attentive au bien-être des enfants et soucieuse de permettre aux parents de concilier les différents temps de la vie (familiale, professionnelle et sociale).</p>
      <p><i class="fa fa-check-square-o" aria-hidden="true"></i>Pour répondre à tous vos besoins, l’ADMR développe des solutions d’accueil individuel (garde d’enfants à domicile) ou collectif (crèches et micro-crèche, accueil de loisirs, halte-garderie, etc.), ainsi qu’un soutien éducatif et moral en cas d’aléas de la vie (soutien à la parentalité).</p>
      </div>
    </div>

</div>


<!-- --------------------------------------------------------------- -->
<!-- ------                EQUIPE D'ANIMATION              --------- -->
<!-- --------------------------------------------------------------- -->
<div class="container-fluid ttequipe">
  <div class="container equipes">
    <div class="row">
      <div class="col-4 titre text-center">
        <h2>L'ÉQUIPE <br />D'ANIMATION</h2>
      </div>
      <div class="col-8 competences">
        <p class="text-center">Vos enfants sont encadrés par des professionnels recrutés pour leurs compétences et leurs qualités relationnelles. L’écoute  de  leurs  besoins  et  souhaits, en  leur  donnant  la  possibilité  de  s’exprimer librement. Leur éducation alimentaire, en proposant l’éveil du goût. Le respect des règles de vie du centre (élaborer avec les enfants en début d’année)</p>
      </div>
        <div class="row personnel">
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid" > </p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus">  
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>  
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>  
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>
      <div class="col-3 col-sm-2 col-lg-1 bus"> 
        <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
        <p class="text-center">Prénom</p>
      </div>                       
    </div>
    </div>
  </div>
</div>
<!--<div class="container equipe ">
  <h1 class="text-center">L'équipe d'animation</h1>
  <p class="text-center">Vos enfants sont encadrés par des professionnels recrutés pour leurs compétences et leurs qualités relationnelles. L’écoute  de  leurs  besoins  et  souhaits, en  leur  donnant  la  possibilité  de  s’exprimer librement. Leur éducation alimentaire, en proposant l’éveil du goût. Le respect des règles de vie du centre (élaborer avec les enfants en début d’année)</p>
  <div class="row">
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid" > </p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus">  
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>  
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>  
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid " ></p>
      <p class="text-center">Prénom</p>
    </div>                       
  </div>
</div>--> 


<!-- --------------------------------------------------------------- -->
<!-- ------             INFORMATIONS GÉNÉRALES             --------- -->
<!-- --------------------------------------------------------------- -->
<!--<div class="container-fluid infos ">
  <div class="container">
    <h4 class="text-center">Informations pratique</h4>
  <div class="container deco ">
  <div class="row">
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid" width="30" height="30"> </p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus">  
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>  
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>  
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete1.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>
    <div class="col-3 col-sm-2 col-lg-1 bus"> 
      <p class="avatar"><img src="<?php echo get_template_directory_uri(); ?>/img/tete2.svg" alt="" class=" img-fluid" width="30" height="30" ></p>
      
    </div>                       
  </div>
</div> 
  <div class="row">
    <div class="col-4 text-center">
      <h6 ><img src="<?php echo get_template_directory_uri(); ?>/img/reveil.svg" alt="" class="img-fluid " width="40" >Horaire d'accueil</h6>
      
      <p class="float-right">Lundi, Mardi, Jeudi et Vendredi :<br /> 7H30 à 8H30, 11H30 à 13H30, 16H30 à 18H30</p>
      <p class="mercredi">MERCREDI et VACANCES: 7H30 à 18H30</p>
    </div>
    <div class="col-4 text-center">
      <h6 ><img src="<?php echo get_template_directory_uri(); ?>/img/phone1.svg" alt="" class="img-fluid" width="40" >Nous joindre</h6>
      
      <p>Par téléphone de 7H30 à 18H30 au :<br />03 84 23 22 97 </p>
      <p class="ligne text-center">tique</p>
      
    </div>
    <div class="col-4 text-center">
      <h6  ><img src="<?php echo get_template_directory_uri(); ?>/img/run1.svg" alt="" class="img-fluid " width="40">Nous rencontrer</h6>
      
      <p class="text-center">ACCEM<br />7 rue des Frères Renaud<br />70290 CHAMPAGNEY</p>
    </div>        
  </div>
</div>-->
</div>

<!-- -------------------------------------------------- -->
<!-- --------   Les valeurs et pédagogie   ------------ -->
<!-- -------------------------------------------------- --> 
<div class="container info-home">
  <div class="row">

    <div class="col-4 card " >
        <div class="card-body">
          <h5 class="card-title text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/reveil.svg" alt="" class="img-fluid " width="40" >Horaire d'accueil<br /><span>-------- </span></h5>
          <p class="card-text text-center">Lundi, Mardi, Jeudi et Vendredi :<br /> 7H30 à 8H30, 11H30 à 13H30, 16H30 à 18H30</p>
          <p class="mercredi text-center">MERCREDI et VACANCES:<br /><span class="vac">7H30 à 18H30</span> </p>
          </div>
    </div>

    <div class="col-4 card" >
        <div class="card-body">
          <h5 class="card-title text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/phone1.svg" alt="" class="img-fluid" width="40" >Nous joindre<br /><span>-------- </span></h5>
          <p class="card-text text-center phone">Par téléphone de 7H30 à 18H30</p>
          <p class="text-center tel">03 84 23 22 97 </p>    
        </div>
    </div>

    <div class="col-4 card " >
        <div class="card-body">
          <div class="rue">
          <h5 class="card-title text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/run1.svg" alt="" class="img-fluid " width="40">Nous rencontrer<br /><span>-------- </span></h5>
          <p class="card-text text-center adresse">ACCEM<br />7 rue des Frères Renaud<br />70290 CHAMPAGNEY</p>
          </div>    
        </div>
    </div>


  </div>
</div>

<?php get_footer(); ?>
