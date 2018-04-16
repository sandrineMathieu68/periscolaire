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