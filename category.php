
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion par catégorie  --_----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 11/13 -->

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Coucou, c'est nous !<i class="fa fa-wpexplorer" aria-hidden="true"></i></h1>
    </div>
  </div>
</div>
 
<section><!-- affichage des article saissi dans wordpress avec lien sur titre et img-->
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="lead">Archive de la catégorie <?php single_cat_title('', true); ?></p>
      </div>
    </div>

      <?php if (have_posts()): ?> 

          <?php while (have_posts()): the_post(); ?>

            <?php get_template_part('content'); ?>

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
