
<?php get_header(); ?>

<!-------------------------------------------------->
<!----------   gestion des articles   --_----------->
<!-------------------------------------------------->
        <!-- saison 1 episode 07/13 -->

<div class="container">
  <div class="row">
    <div class="col-12">
      <h1>Coucou, c'est nous !<i class="fa fa-wpexplorer" aria-hidden="true"></i></h1>
    </div>
  </div>
</div>
 
<section><!-- affichage des article saissi dans wordpress avec lien sur titre et img-->
  <div class="container">
      <?php if (have_posts()): ?> <!--syntaxe de point : à la place des chevrons pour une meilleur lecture-->  

          <?php while (have_posts()): the_post();
          /* gestion des img <!-- saison 1 episode 09/13 -->  
$mon_id = get_post_thumbnail_id( $post->Id );
echo $mon_id; 
$my_thumb = wp_get_attachment_image_src($mon_id, 'thumbnail');
//var_dump($my_thumb); affiche un tableau
echo $my_thumb[0];// affiche un élément du tableau pour récupérer l'url
die();*/
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
