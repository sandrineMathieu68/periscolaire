
<!---------------------------------------------------->
<!---- CONTENU APPELER DANS PLUSIEURS TEMPLATES  ----->
<!---------------------------------------------------->
          <!-- saison 1 episode 11/13 -->

            <div class="row inscription">
              <div class="col-2"><!-- gestion des Vignettes à la une avec lien -->
                <?php if ($thumbnail_html = wp_get_attachment_image_src(get_post_thumbnail_id( $post->Id ), 'thumbnail')) :// on peut remplacer la taille en remplaçant thumbnail dans les paramétres
                $thumbnail_src = $thumbnail_html['0']; ?>
                  <img class="img-fluid img-thumbnail" src="<?php echo $thumbnail_src; ?>" alt="">
                <?php 
                endif; ?>  
              </div>
              <div class="col-10">
                <h1 class="text-center"><?php the_title(); ?></i></h1>
                <p><!-- saison 1 episode 10/13 12MN -->
                <?php /*echo lgmac_give_me_meta_01(
                                            esc_attr( get_the_date( 'c' ) ),
                                            esc_html( get_the_date()),
                                            get_the_category_list(', '),
                                            get_the_tag_list('', ', ')
                                            ); */?>
                </p>
                <!-- affichage d'extrait d'article -->
                <?php the_content(); ?>                
              </div>
            </div><!-- /row -->