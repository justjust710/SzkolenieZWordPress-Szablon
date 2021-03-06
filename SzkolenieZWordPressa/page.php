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


	<div class="page-content fade-in"> <!-- start page-content -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<?php if (have_posts()) : while (have_posts()) : the_post();?>
						<?php the_content(); ?>
					<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div> <!-- end page-content -->

<?php get_footer(); ?>