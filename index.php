
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion des articles   --_----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 07/13 -->
        <!-- saison 1 episode 10/13 -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center"><i class="fa fa-wpexplorer" aria-hidden="true"></i> Affichage de tout les articles avec choix sur interface wordpress actuellement sur index.php articleS.scss</h1>
    </div>
  </div>
</div> 
<section class="articles">
  <div class="container">
      <?php if (have_posts()): ?>  

          <?php while (have_posts()): the_post();

          ?>

          <?php get_template_part('content'); ?><!-- saison 1 episode 11/13 -->

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
