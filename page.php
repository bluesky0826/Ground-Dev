<?php get_template_part( 'partials/header' ); ?>

	<div class="sidebar sidebar--primary">

		<?php get_template_part( 'partials/navigation', 'hierarchy' ); ?>

	</div> <!-- End .sidebar- -primary -->

	<?php while ( have_posts() ) : the_post();

		get_template_part( 'partials/content', 'page' );

	endwhile; ?>

<?php get_template_part( 'partials/footer' ); ?>
