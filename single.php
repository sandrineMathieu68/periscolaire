
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion par article  --_----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 10/13 -->
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center"><i class="fa fa-wpexplorer" aria-hidden="true"></i> Affichage par article single.scss</h1>
    </div>
  </div>
</div>
 
<section>
  <div class="container single">
      <?php if (have_posts()): ?>   

          <?php while (have_posts()): the_post(); ?>

            <div class="row">
              <div class="col-12">
                <h1><?php the_title(); ?><i class="fa fa-star-o" aria-hidden="true"></i></h1>
                <p><!-- saison 1 episode 10/13 12MN -->
                <?php echo lgmac_give_me_meta_01(
                                            esc_attr( get_the_date( 'c' ) ),
                                            esc_html( get_the_date()),
                                            get_the_category_list(', '),
                                            get_the_tag_list('', ', ') 
                                            ); ?>
                </p> 
                <!-- affichage complet de l'article -->
                <?php the_content(); ?>                
              </div>
            </div><!-- /row -->

          <?php endwhile; ?>
        
          <!-- choix des articles -->
          <div class="row">
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
