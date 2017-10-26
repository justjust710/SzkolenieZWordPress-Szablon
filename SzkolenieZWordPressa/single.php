<?php get_header(); ?>

	<div class="page-header fade-in-down"> <!-- start page-header -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<h1><?php single_post_title(); ?></h1>
					<div class="breadcrumbs">
						<?php if(function_exists('bcn_display'))
							{
								bcn_display();
							}
						?>
					</div>
				</div>
			</div>
		</div>
	</div> <!-- end page-header -->



	<div class="page-content page-list fade-in"> <!-- start page-content -->
		<div class="container">
			<div class="row">
				
				<div class="col-md-8">
					<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    
					<div class="meta-info">
						autor: <?php the_author(); ?>, opublikowano: <?php the_date(); ?>
					</div>
					
                    <?php the_content(); ?>
                    
                    <?php endwhile; endif;  ?>



				<!-- wczytujemy szablon dodawania/wyświetlania komentarzy jeśli włączone -->
				<?php 
					if ( comments_open() ) {
						comments_template(); 
					}
				?>

                </div>
				<div class="sidebar col-md-4 hidden-sm">
					<?php dynamic_sidebar( 'main-sidebar' ); ?>
				</div>

			</div>
		</div>
	</div> <!-- end page-content -->
	

<?php get_footer(); ?>