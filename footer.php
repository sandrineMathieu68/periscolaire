<!-------------------------------------------------->
<!-------------------    FOOTER   ------_----------->
<!-------------------------------------------------->


<!-- --------------------------------------------------------------- -->
<!-- ------            LES DIFFERENTS PARTENAIRE           --------- -->
<!-- --------------------------------------------------------------- -->



<footer>

<div class="container ">
  <div class="row"><!-- saison 2 episode 6 -->
    <!-- IL FAUT REGARDER AVEC L'INSPECTEUR POUR CIBLER LES CLASS CREE PAR WP AFIN DE STYLISER-->
    <?php  //if (is_active_sidebar('widgetized-footer')): ?>

      <?php //dynamic_sidebar('widgetized-footer'); ?>

    <?php  //else: ?> 
    
    <div class="col-12">
      <a href="#"><p class="text-center"><i class="fa fa-address-card-o" aria-hidden="true"></i> --> Design & Developed by Sandrine Mathieu exclusively for Nathalie Petithory<i class="fa fa-address-card-o" aria-hidden="true"></i></a>

</p>
    </div> 
    
    <?php //endif; ?>

  </div>
</div>

</footer>
<div class="container-fluid partenaires">
  <!--<h3 class="text-center">Merci à tous nos partenaires</h3>-->
  
    
    <div class="row divers">

      <div class="col-2">
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ville.jpg" alt="" class=" img-fluid " width="50" height="50" ></p>
      </div>
      <div class="col-1">
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/cafz.jpg" alt="" class=" img-fluid " width="45" height="45" ></p>
      </div>
      <div class="col-2">
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/admr.jpg" alt="" class=" img-fluid admr" width="70" height="70" ></p>
      </div>
      <div class="col-2">
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/rahin.png" alt="" class=" img-fluid " width="90" height="90" ></p>
      </div>
      <div class="col-2">
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/admr.jpg" alt="" class=" img-fluid admr" width="70" height="70" ></p>
      </div>
      <div class="col-1">
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/cafz.jpg" alt="" class=" img-fluid " width="45" height="45" ></p>
      </div>
      <div class="col-2">
        <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/img/ville.jpg" alt="" class=" img-fluid " width="50" height="50" ></p>
      </div>
      </div>
  </div>
	<?php wp_footer(); ?>

</body>
</html>