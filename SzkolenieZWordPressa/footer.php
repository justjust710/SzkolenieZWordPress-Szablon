<div class="footer"> <!-- star footer -->
		<div class="container fade-in">
			<div class="row">
				<div class="col-md-6">
					<?php dynamic_sidebar( 'footer-sidebar-1' ); ?>
				</div>
				<div class="col-md-3">
					<?php dynamic_sidebar( 'footer-sidebar-2' ); ?>
				</div>
				<div class="col-md-3 social-buttons">
					<?php dynamic_sidebar( 'footer-sidebar-3' ); ?>
				</div>
			</div>
		</div>
	</div> <!-- end footer -->


	<div class="small-footer"> <!-- start small-footer -->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">© <?php bloginfo('name'); ?> | <?php echo date(Y); ?> </div>
			</div>
		</div>
	</div> <!-- end small-footer -->
	
	<?php wp_footer(); ?>

</body>
</html>