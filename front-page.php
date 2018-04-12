<?php get_header(); ?>
<?php //get_template_part('slider','home') ?><!-- appel du fichier carousel à personnalisé-->

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


<!-- --------------------------------------------------------------- -->
<!-- ------             INFORMATIONS GÉNÉRALES             --------- -->
<!-- --------------------------------------------------------------- -->
<div class="container-fluid infos ">
  <div class="container">
    <h4 class="text-center">Informations pratique</h4>
    <p class="ligne text-center">Informations pratique</p>
  <div class="row">
    <div class="col-4 text-center">
      <h6 ><img src="<?php echo get_template_directory_uri(); ?>/img/horaire1.svg" alt="" class="img-fluid " width="40" >Horaire d'accueil</h6>
      <p class="ligne text-center">tique</p>
      <p class="float-right">Lundi, Mardi, Jeudi et Vendredi :<br /> 7H30 à 8H30, 11H30 à 13H30, 16H30 à 18H30</p>
      <p class="text-center">MERCREDI: 7H30 à 18H30</p>
    </div>
    <div class="col-4 text-center">
      <h6 ><img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="" class="img-fluid" width="40" >Nous joindre</h6>
      <p class="ligne text-center">tique</p>
      <p>Par téléphone de 7H30 à 18H30 au :<br />03 84 23 22 97 </p>
      <p class="text-center ligne">Pvb</p>
    </div>
    <div class="col-4 text-center">
      <h6  ><img src="<?php echo get_template_directory_uri(); ?>/img/run.svg" alt="" class="img-fluid " width="40">Nous rencontrer</h6>
      <p class="ligne text-center">tique</p>
      <p class="text-center">ACCEM</p>
      <p>7 rue des Frères Renaud<br />70290 CHAMPAGNEY</p>
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
<!-- ------    PRÉSENTATION TOUS SERVICE ET ACTIVITES      --------- -->
<!-- --------------------------------------------------------------- -->




              <!-- --------------------------------------------------------------- -->
              <!-- ------ Création de ma propre boucle du pluging bidule --------- -->
              <!-- --------------------------------------------------------------- -->

          <div class="container-fluid all-services">

          <?php
          $args_vacances_front = array(
            'post_type' => 'lgmac_vacances',
            'posts_per_page' => 4, // l'ordre par défaut est descendant
            'orderby' =>'rand' // classé arbitrairement
            );
          $req_vacances_front= new WP_Query($args_vacances_front);


          if ($req_vacances_front->have_posts()): ?>
            <section class="media-front">
              <div class="container ">
                <h1>APPEL d'UN CONTENU DE CUSTOM POST TYPE EN STYLE AVEC CLASS all-services</h1>
                <div class="row">
                  <?php while($req_vacances_front->have_posts() ): $req_vacances_front->the_post(); ?>

                    <article class="col-3">
                      <div class="card">

                        <?php the_post_thumbnail('medium-large', array('class' => 'img-fluid')); ?>              
                        <div class="card-footer">
                          <h1 class="h4 text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                        </div>
                      </div>
                      
                    </article>

                  <?php endwhile; wp_reset_postdata(); ?>  
                </div>
              </div>
              
            </section>
          <?php endif; ?>
        </div>



              <!-- --------------------------- -->
              <!-- ----  Suite affichage ----- -->
              <!-- --------------------------- -->

                        <div class="container-fluid all-services">

          <?php
          $args_vacances_front = array(
            'post_type' => 'lgmac_anniversaires',
            'posts_per_page' => 3, // l'ordre par défaut est descendant
            'orderby' =>'rand' // classé arbitrairement
            );
          $req_vacances_front= new WP_Query($args_vacances_front);


          if ($req_vacances_front->have_posts()): ?>
            <section class="media-front">
              <div class="container ">
                <h1>APPEL d'UN CONTENU DE CUSTOM POST TYPE EN STYLE AVEC CLASS all-services</h1>
                <div class="row">
                  <?php while($req_vacances_front->have_posts() ): $req_vacances_front->the_post(); ?>

                    <article class="col-4">
                      <div class="card">

                        <?php the_post_thumbnail('medium-large', array('class' => 'img-fluid')); ?>              
                        <div class="card-footer">
                          <h1 class="h4 text-center"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h1></a>
                        </div>
                      </div>
                      
                    </article>

                  <?php endwhile; wp_reset_postdata(); ?>  
                </div>
              </div>
              
            </section>
          <?php endif; ?>
        </div>



<div class="container">
                <div class="row">

                <div class="col-3 text-center">
                  <h6 >contenu à definir</h6>
                  <p ><img src="<?php echo get_template_directory_uri(); ?>/img/forme.jpg" alt="" class="img-fluid " width="100" height="100"></p>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-3 text-center">
                  <h6 >contenu à definir</h6>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/forme1.jpg" alt="" class="img-fluid " width="100" height="100">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-3 text-center">
                  <h6 >contenu à definir</h6>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/forme.jpg" alt="" class="img-fluid " width="100" height="100">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>
                <div class="col-3 text-center">
                  <h6 >contenu à definir</h6>
                  <img src="<?php echo get_template_directory_uri(); ?>/img/forme1.jpg" alt="" class="img-fluid " width="100" height="100">
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                </div>                
              </div>
</div>

<?php get_footer(); ?>
