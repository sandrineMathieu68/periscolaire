<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="descrition" content="Ceci est un premier template wordpress en utilisant bootstrap 4"/>

<!--meta donnee saison 1 video 13-->
  <?php if(is_home()): ?>
    <meta name="description" content="Le site présente la page des articles de blog, Lorem ipsum dolor sit amet, consectetur adipisicing elit" >
  <?php endif; ?>
  
  <?php if(is_front_page()): ?>
    <meta name="description" content="Le site présente la page d'accueil statique, Lorem ipsum dolor sit amet, consectetur adipisicing elit" >
  <?php endif; ?>

  <?php if(is_page() && !is_front_page()): ?>
    <meta name="description" content="Le site présente un contenu de type page, Lorem ipsum dolor sit amet, consectetur adipisicing elit" >
  <?php endif; ?>   

  <?php if(is_category()): ?>
    <meta name="description" content="Liste des articles pour la category <?php echo single_cat_title('', false); ?>, Lorem ipsum dolor sit amet, consectetur adipisicing elit" >
  <?php endif; ?>

  <?php if(is_tag()): ?>
    <meta name="description" content="Liste des articles relié avec l'étiquette [<?php echo single_tag_title('', false); ?>], Lorem ipsum dolor sit amet, consectetur adipisicing elit" >
  <?php endif; ?>    

  

  <?php wp_head(); ?>
</head>
<body>

<!-------------------------------------------------->
<!-------------------    HEADER   ------_----------->
<!-------------------------------------------------->


    <header class="container-fluid  pt-1 pb-3 pr-4 pl-3">

      <div class="row">

        <div class="col-12">
           <img src="<?php echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" class="img-fluid " width="60" height="60">
          <h1 class="float-right"><img src="<?php //echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" class="img-fluid float-left" width="60" height="60"> Le coin des Mômes <img src="<?php//echo get_template_directory_uri(); ?>/img/logo1.svg" alt="" class="img-fluid float-right" width="90" height="90"></h1>
          <p >03 84 23 22 97</p>
          
        </div>
    
        
      </div>


    </header>

    <div class="container-fluid menu">
      
      <div id="fixed-header">
        <h1 class="text-center" id="entete">Le coin des mômes</h1>
        <nav class="navbar navbar-expand-sm " data-toggle="affix">
          <div class="mx-auto d-sm-flex d-block flex-sm-nowrap respons">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
              </span>
            </button>

            <?php
            wp_nav_menu( array(
          'menu'              => 'top-menu',// c'est le nom du menu en interne
          'theme_location'    => 'primary',
          'depth'             => 2,
          'container'         => 'div',
          'container_class'   => 'collapse navbar-collapse',
          'container_id'      => 'navbarsExample11',
          'menu_class'        => 'nav navbar-nav ml-auto',
          'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
          'walker'            => new WP_Bootstrap_Navwalker())
          );
          ?>
        </div>
      </nav>
    </div>
  </div>
