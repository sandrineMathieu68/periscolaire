<?php 

//======================================================
//======   formulaire   gestion des options     ==========
//======================================================
// <!-- saison 2 episode 4 -->
function lgmac_build_options_page() { 

	$theme_opts = get_option('lgmac_opts'); ?>

<div class="wrap">	
	<div class="container">
		<?php if(isset($_GET['status']) && $_GET['status'] == 1) {
			echo '<div class="alert alert-success">Mise à jour effectuée avec succès</div>';
		} ?>
		<div class="row">
			<div class="jumbotron">
			  <h1 class="">Paramètre du site</h1>
			</div>

			<form id="form-lgmac-options" class="form-hotizontal" method="post" action="admin-post.php">
				<input type="hidden" name="action" value="lgmac_save_options">
				<?php  
				wp_nonce_field('lgmac_options_verify'); ?> <!-- Concerne la sécurité du formulaire -->

				<!-- saison 2 episode 5 -->
				<div class="col-12">
					<h1>Image du logo en page d'accueil (haut de page)</h1>
					<div class="row">
						<div class="col-5">
							<img style="margin-bottom:20px;" id="img_preview_01" 
							src="<?php echo $theme_opts['image_01_url']; ?>" 
							class="img-fluid img-thumbnail" alt="">
						</div>
						
						<div class="col-6">
							<button class="btn btn-primary btn-lg btn-select-img" type="button" id="btn_img_01" >Choisir une image pour le logo</button>
						</div>
					</div><!-- /row -->
					<div class="form-group">
						<label for="lgmac_image_01" class="col-2 control-label" >image sauvegardée</label>
						<div class="col-10">
						<input type="text" width="300px" id="lgmac_image_01" name="lgmac_image_01" disabled
						value="<?php echo $theme_opts['image_01_url']; ?>" style="width:100%;" >
						<input type="hidden" width="300px" id="lgmac_image_url_01" name="lgmac_image_url_01"
						value="<?php echo $theme_opts['image_01_url']; ?>" style="width:100%;" >
					</div>		
					
				</div>


				<div class="col-12">
				  <div class="form-group">
				    <label for="lgmac_legend_01" class="col-2 control-label">Légendes</label>
				    <div class="col-10">
				    <input type="text" id="lgmac_legend_01" name="lgmac_legend_01" value="<?php echo $theme_opts['legend_01']; ?>">
				    </div>
				  </div>
				</div><!-- /col-12 -->
			
		

				<div>
					<button id="validator"  type="submit" class="btn btn-primary">Mettre a jour les options</button>
				</div>
			</form>

		</div>
	</div>
</div>	
<?php  
} // fin lgmac_build_options_page