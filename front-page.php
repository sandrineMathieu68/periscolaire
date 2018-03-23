<!-- Template page d'accueil avec front-page.php et accueil.scss-->
<?php get_header(); ?>
<?php get_template_part('slider','home') ?><!-- appel du fichier carousel à personnalisé-->


<!-------------------------------------------------->
<!-------- Création de ma propre boucle  ----------->
<!-------------------------------------------------->
<!-- saison 2 episode 2 -->

<?php  
$args_blog = array(
  'post_type' => 'post',
  'posts_per_page' => 2 // l'ordre par défaut est descendant
  );
$req_blog = new WP_Query($args_blog); ?>

<?php if($req_blog->have_posts()): ?>

<section class="container" id="blog-front"> 
  <div class="row ">
    <?php while($req_blog->have_posts() ): $req_blog->the_post(); ?>    
      <div class="col-6">
        <div class="card" >
          <?php the_post_thumbnail('medium',
          array('class' =>'img-fluid mx-auto')) ?>
          <div class="card-body">
            <h5 class="card-header"></small> <?php echo the_title(); ?></h5>
            <p class="card-text"><?php the_excerpt(); ?> </p>
            <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/horaire.svg" alt="Card image cap">
          </div>
          <div class="card-footer">
            <p><?php echo lgmac_give_me_meta_01(
                              esc_attr( get_the_date( 'c' ) ),
                              esc_html( get_the_date()),
                              get_the_category_list(', '),
                              get_the_tag_list('', ', ')
                              ); ?>
            </p>                            
          </div>
        </div>
      </div> 
    <?php endwhile; wp_reset_postdata(); ?><!-- bonne habitude de fermer la boucle avec une fonction de wp  pour éviter des soucis avec des boucles imbriquées-->
  </div><!-- /row -->  
</section>

<?php endif; ?>


<!-------------------------------------------------->
<!-------- Template de la page Accueil   ----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 12/13 -->
<div class="container-fluid info">
  <div class="container">
  <div class="row">
    <div class="col-4 text-center">
      <h6 >Horaire d'ouverture</h6>
      <img src="<?php echo get_template_directory_uri(); ?>/img/horaire.svg" alt="" class="img-fluid float-left" >
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae id molestias, dolorum ea, praesentium minus dicta maiores delectus in</p>
    </div>
    <div class="col-4 text-center">
      <h6 >Horaire d'ouverture</h6>
      <img src="<?php echo get_template_directory_uri(); ?>/img/phone.svg" alt="" class="img-fluid float-left" >
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae id molestias, dolorum ea, praesentium minus dicta maiores </p>
    </div>
    <div class="col-4 text-center">
      <h6 >Horaire d'ouverture</h6>
      <img src="<?php echo get_template_directory_uri(); ?>/img/run.svg" alt="" class="img-fluid float-left" >
      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cupiditate quae id molestias, dolorum ea, praesentium minus dicta maiores delectus in neque n repellat!</p>
    </div>        
  </div>
</div>
</div>

<!--<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center"><i class="fa fa-wpexplorer" aria-hidden="true"></i> Affichage de tout les articles avec choix sur interface wordpress actuellement sur index.php articleS.scss</h1>
    </div>
  </div>
</div>-->  

<section class="accueil">
  <div class="container">
      <?php if (have_posts()): ?>  

          <?php while (have_posts()): the_post(); ?>
              <div class="row">
                <div class="col-12">
                  <?php the_title('<h1 class="text-center" >', '</h1>'); ?>
                  <?php the_content(); ?><!-- saison 1 episode 12/13 -->
                  
                </div>
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

<!--  Ajout image dans page admin-options.js -->
<!--  modifier saison 2 episode 5 --> 
    <div class="container">
  <div class="card">
    <?php $theme_opts = get_option('lgmac_opts'); ?> <!--  pour charger les options du thème --> 
    <div class="row ">
      <div class="col-4">
        <img class="img-fluid" src="<?php echo $theme_opts['image_01_url']; ?>" alt="">
        <p class="text-center"><?php echo stripslashes($theme_opts['legend_01']); ?></p>
        <!--  stripslashes de wp pour échapper les caractère \ --> 
      </div>
      
      <div class="col-8">
        <h1>coucou</h1>
      </div>
    </div>
  </div>  
</div>

<?php get_footer(); ?>
