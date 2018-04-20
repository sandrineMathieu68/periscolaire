<?php

/* Template Name: nous-contacter*/?>

<?php get_header(); ?>

<section class="formulaire">
  <div class="container">
      <?php if (have_posts()): ?>  

          <?php while (have_posts()): the_post();

          ?>

          <?php get_template_part('templates/inscription'); ?><!-- saison 1 episode 11/13 -->

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

<?php get_footer(); ?>	