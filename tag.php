
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion par etiquette  --_----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 11/13 à 8MN-->
<!-- etiquette ajouter dans apparence du menu wp-->

 
<section class="etiquettes"><!-- affichage des article saissi dans wordpress avec lien sur titre et img-->
  <div class="container ">
    <div class="row">
      <div class="col-12">
        <p class="lead">Liste des articles avec l'étiquette <?php single_tag_title(''); ?></p>
      </div>
    </div>

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

<?php get_footer(); ?>
