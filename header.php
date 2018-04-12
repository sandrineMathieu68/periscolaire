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
    <!-- saison 1 episode 08/13 -->
    <!-- saison 7 episode 04/   -->

  <header class="container-fluid">
    <div class="bus"></div>
    <div class="row">
      <div id="fixed-header">      
    <div class="container-fluid menu">
      <h1 class="float-right"><img src="<?php //echo get_template_directory_uri(); ?>/img/logo.jpg" alt="" class="img-fluid float-left" width="60" height="60"> Le coin des Mômes <img src="<?php//echo get_template_directory_uri(); ?>/img/logo1.svg" alt="" class="img-fluid float-right" width="90" height="90"></h1>
      <p >03 84 23 22 97</p>
  <nav class="navbar navbar-expand-sm " data-toggle="affix">
    <div class="mx-auto d-sm-flex d-block flex-sm-nowrap respons">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample11" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"><i class="fa fa-bars" aria-hidden="true"></i>
</span>
        </button>
        <!--<div class="collapse navbar-collapse text-center navi" id="navbarsExample11">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <a class="nav-link" href="#">Accueil</a>
                </li>
                <li class="nav-item active">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <a class="nav-link" href="#">Inscription</a>
                </li>
                <li class="nav-item">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <a class="nav-link" href="#">Nos tarifs</a>
                </li>
                <li class="nav-item">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <a class="nav-link" href="#">Anniversaires</a>
                </li>
                <li class="nav-item dropdown">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Activités
                  </a>
                  <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">3-5 ans</a>
                    <a class="dropdown-item" href="#">6-11 ans</a>

                  </div>
                </li>                   
              <li class="nav-item dropdown">
                <i class="fa fa-star-o" aria-hidden="true"></i>
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Vacances scolaire
                </a>
                <div class="dropdown-menu choix" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">Printemps</a>
                  <a class="dropdown-item" href="#">ete</a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="#">Something</a>
                </div>
              </li>
              <li class="nav-item">
                  <i class="fa fa-star-o" aria-hidden="true"></i>
                  <a class="nav-link" href="#">Mon compte</a>
              </li>
                <li class="nav-item">
                    <i class="fa fa-star-o" aria-hidden="true"></i>
                    <a class="nav-link" href="#">Nous contacter</a>
                </li>              
            </ul>
        </div>-->
        <?php
        wp_nav_menu( array(
          'menu'              => 'top-menu',// c'est le nom du menu en interne
            'theme_location'    => 'primary',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarsExample11',
            'menu_class'        => 'nav navbar-nav ml-auto text-uppercase',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
?>
    </div>
</nav>
</div>
</div>
</div>





<!--<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100 img-fluid" src="<?php //echo get_template_directory_uri(); ?>/img/tttt.jpg" width="1900" max-height="450" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="<?php //echo get_template_directory_uri(); ?>/img/ttt.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100 img-fluid" src="<?php //echo get_template_directory_uri(); ?>/img/mmmm.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>-->

  </header>