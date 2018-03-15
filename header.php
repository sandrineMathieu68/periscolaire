<!DOCTYPE html>
<html lang="<?php language_attributes(); ?>">
<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="descrition" content="Ceci est un premier template wordpress en utilisant bootstrap 4"/>
	

	<?php wp_head(); ?>
</head>
<body>

<!-------------------------------------------------->
<!-------------------    HEADER   ------_----------->
<!-------------------------------------------------->
    <!-- saison 1 episode 08/13 -->
    <!-- saison 7 episode 04/   -->

  <header class="container-fluid  pt-3 pb-3 pr-4 pl-3">
    <div class="row">
      <div class="col-3 ">
        <img src="<?php echo get_template_directory_uri(); ?>/img/garcon.svg" alt="" class="img-fluid float-left" width="60" height="60">
      </div>
      <div class="col-6 text-center nom">
        <h1>Le coin des Mômes</h1>
      </div>
       <div class="col-3">
        <img src="<?php echo get_template_directory_uri(); ?>/img/logo.svg" alt="" class="img-fluid float-right" width="60" height="60">
      </div>       
    </div>
    <div class="container-fluid menu">
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
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker())
        );
?>
    </div>
</nav>
</div>
  </header>