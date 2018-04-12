
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion par article   ------------ -->
<!-------------------------------------------------->
<section class="articles">
  <div class="container">
      <?php if (have_posts()): ?>  
          <?php while (have_posts()): the_post();
          ?>
          <?php get_template_part('content'); ?><!-- saison 1 episode 11/13 -->
          <?php endwhile; ?>
                    <div class="row pagination">
            <div class="col-12">
              <nav>
                <ul class="machin-pager">
                  <li class="float-left"><?php previous_post_link(); ?></li>
                  <li class="float-right"><?php next_post_link(); ?></li>
                </ul>
              </nav>
            </div><!-- /col -->
          </div><!-- /row -->    
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
