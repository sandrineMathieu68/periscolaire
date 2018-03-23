<!-------------------------------------------------->
<!--- Requête pour création du slidder client   --   Saison 3 episode 4 -->
<!-------------------------------------------------->

<?php 
		$args = array(
			'post_type'		  => 'lgmac_slider',
			'posts_per_page'  => -1,
			'orderby'		  => 'menu_order',
			'order'		      => 'ASC'
		);
		$slider_query = new WP_Query($args);  //var_dump($slider_query);

if($slider_query->have_posts()): ?>


<!-------------------------------------------------->
<!----------    Saison 3 episode 1   --------------->
<!-------------------------------------------------->

	<section>
		<div class="container">
			<div id="slider-01" class="carousel slide" data-ride="carousel">
				<!-- Indicators -->
				<ol class="carousel-indicators">
					<?php $indicator_index = 0;
					while ( $slider_query->have_posts() ) : $slider_query->the_post(); 
						echo '<li data-target="#slider-01" data-slide-to=" '  .	 $indicator_index  .'" 
						class="'. ($indicator_index == 0 ? "active" :  "" )	. '"></li>'; ?>
					<!--<li data-target="#slider-01" data-slide-to="0" class="active"></li>
					<li data-target="#slider-01" data-slide-to="1"></li>
					<li data-target="#slider-01" data-slide-to="2"></li>-->
						<?php $indicator_index++;
					endwhile; ?>
				</ol>

				<?php rewind_posts(); //pour faire un retour de la boucle afin de revenir au début et recommencer une nouvelle boucle ?>

				<!-- Wrapper for slide -->
				<div class="carousel-inner"><!-- Saison 3 episode 4 -->
					<?php  $active_test = true;
					while ( $slider_query->have_posts() ) : $slider_query->the_post();  

					if($thumbnail_html = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'front-slider')): 
						$thumbnail_src = $thumbnail_html['0'];
						$alt_val = get_post_meta(get_post_thumbnail_id($post->ID), '_wp_attachment_image_alt'); 
						$alt_val = $alt_val[0];
						// remplacer par du ternaire dans div carousel ci-dessous
							/*if($active_test)	{
								$theclass = " active";// avec un espace pour séparer les classes
							} else {
								$theclass = "";
							}*/
						?>


							<div class="carousel-item<?php echo ($active_test ? " active" : ""); ?>">
								<img class="d-block w-100" src="<?php echo $thumbnail_src; ?>" alt="<?php echo $alt_val; ?>">
								<div class="carousel-caption d-none d-md-block">
								  <h3><?php the_title(); ?></h3><!-- saison 3 episode 5 -->
								  <p><?php the_field('sous_titre'); ?></p><!-- saison 3 episode 5 -->
								</div>
							</div>


							<?php $active_test = false;
					endif;
					endwhile; wp_reset_postdata();//Pour éviter toute confusion entre plusieurs boucles qui pourrait être sur la même page ?>

				</div>




				<!-- Controls -->
				<a class="carousel-control-prev" href="#slider-01" role="button" data-slide="prev">
					<span class="carousel-control-prev-icon" aria-hidden="true"></span>
					<span class="sr-only">Previous</span>
				</a>
				<a class="carousel-control-next" href="#slider-01" role="button" data-slide="next">
					<span class="carousel-control-next-icon" aria-hidden="true"></span>
					<span class="sr-only">Next</span>
				</a>
			</div><!-- /carousel -->		
		</div><!-- /container -->
	</section>

<?php endif; ?>



