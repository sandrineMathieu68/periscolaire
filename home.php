
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion des articles   --_----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 07/13 -->
        <!-- saison 1 episode 10/13 -->
<!--<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center"><i class="fa fa-wpexplorer" aria-hidden="true"></i> Affichage de tous les articles avec choix sur interface Wp actuellement sur home.php et articles.scss</h1>
    </div>
  </div>
</div>--> 

<section class="articles">
  <div class="container">
<?php //var_dump($wp_query); ?><!-- saison 2 episode 1 comprendre le fonctionnement de la boucle wp -->


      <?php if (have_posts()): ?>  

          <?php while (have_posts()): the_post(); ?>

<?php //var_dump($post); ?><!-- saison 2 episode 1 -->
<?php //echo $post->post_title; ?><!-- saison 2 episode 1 -->            

          <?php get_template_part('content'); ?><!-- saison 1 episode 11/13 -->

          <?php endwhile; ?>

      <?php else: ?>
          <div class="row">
            <div class="col-12">
              <p>Y a pas de résultat !</p>
            </div><!-- /row -->
          </div>
      <?php endif; ?>

    <div class="row"><!-- Pagination sans plugging car beaucoup de fichier pour pas grand chose dans ce cas -->
      <?php   global $wp_query;
        $big = 999999999; // need an unlikely integer
        $total_pages = $wp_query->max_num_pages;

        if($total_pages > 1): ?><!-- On peut en faire une fonction si l'on souhaite une pagination sur d'autre pages !!-->
          <div class="col-12 lgmac-pagination ">
            <?php    echo paginate_links( array(
                  'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
                  'format' => '/page/%#%',// nommer comme les permaliens
                  'current' => max( 1, get_query_var('paged') ),
                  'total' => $total_pages,
                  'prev_next' => true,
                  'prev_text' => '<< Page précédente',
                  'next_text' => 'Page suivante >>'
                ) ); ?>
          </div>


      <?php endif; //fin de la pagination ?>  
    </div>    

  </div><!-- /container -->
</section>

<?php get_footer(); ?>
