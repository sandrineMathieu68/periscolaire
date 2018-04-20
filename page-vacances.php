<?php

/* Template Name: vacances*/?>

<?php get_header(); ?>

<section class="reservation">
  <div class="container">
      <?php if (have_posts()): ?>  

          <?php while (have_posts()): the_post();

          ?>

          <?php get_template_part('templates/vacances'); ?><!-- saison 1 episode 11/13 -->

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