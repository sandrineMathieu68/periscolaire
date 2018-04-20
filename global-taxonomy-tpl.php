<?php 
/*
Template Name: element anniversaire
*/
 ?>
<!-- attention boucle special ne pas utiliser contenu wp -->
 <?php get_header(); ?>

<div class="container-fluid all-services">
	<h1 class="text-center">Affichage par taxonomy</h1>
<?php $lgmac_term_list = get_terms(array('taxonomy' => 'condi_inscription', 'hide_empty' => true));
if(count($lgmac_term_list) > 0): 
	
	foreach($lgmac_term_list as $the_term): ?>
		<section class="media-front">
			<?php $args_taxo_rupt = array(
				'post_type' => 'lgmac_anniversaires',
				'posts_per_page'=> -1,

				'tax_query' => array(
					array(
						'taxonomy' => 'condi_inscription',
						'field'	   => 'slug',
						'terms'    => $the_term->slug
					)
				)
			);
			$req_taxo_rupt = new WP_Query($args_taxo_rupt);

			if($req_taxo_rupt->have_posts()): ?>
				<div class="container">
					<div class="row">
						<div class="col-12">
							<h1><?php echo $the_term->name; ?></h1>
						</div>
						<?php while($req_taxo_rupt->have_posts()): ?>
							<?php $req_taxo_rupt->the_post(); ?>

							<article class="col-6">
								<div class="card">
									<?php the_post_thumbnail('medium-large', array('class' => 'img-fluid')) ?>
									<div class="card-footer">
										<h1 class="h4 text-center"><?php the_title(); ?></h1>
									</div>
								</div>
							</article>
						<?php endwhile;wp_reset_postdata(); ?>	
					</div><!-- /row -->
				</div><!-- /container -->

			<?php endif; ?>
		</section>
	<?php endforeach;
endif;	

?> 

</div>

 <?php get_footer(); ?>