
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion des articles   --_----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 07/13 -->
 
<section>
  <div class="container">
      <?php if (have_posts()): ?>  

          <?php while (have_posts()): the_post();

          ?>

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
