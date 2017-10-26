<?php get_header(); ?>


	<div class="photo"> <!-- start photo -->
		<div class="content fade-in-down">
			<h1><?php echo ot_get_option( 'text' ); ?></h1>

			<a href="<?php echo ot_get_option( 'button_url' ); ?>" class="button"><?php echo ot_get_option( 'button_text' ); ?></a>

		</div>
		<img src="<?php echo ot_get_option( 'main_photo' ); ?>" alt="<?php echo ot_get_option( 'button_text' ); ?>">
	</div> <!-- end photo -->


	<div class="info-boxes"> <!-- start info-boxes -->
		<div class="container">
			<div class="row fade-in-up">
				<div class="col-md-4">
					<?php dynamic_sidebar( 'main-page-sidebar-1' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'main-page-sidebar-2' ); ?>
				</div>
				<div class="col-md-4">
					<?php dynamic_sidebar( 'main-page-sidebar-3' ); ?>
				</div>
			</div>
		</div>
	</div> <!-- end info-boxes -->
					


<?php get_footer(); ?>