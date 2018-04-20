
<!---------------------------------------------------->
<!---- CONTENU APPELER DANS PLUSIEURS TEMPLATES  ----->
<!---------------------------------------------------->
          <!-- saison 1 episode 11/13 -->

            <div class="row semaines">
              <div class="col-12">
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