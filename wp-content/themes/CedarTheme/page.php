<?php 

	/**
	 * PAGE TEMPLATE
	 */

	get_header(); 

?>

	<?php while ( have_posts() ) : the_post(); ?>
	
		<?php get_template_part('layouts/posttitle'); ?>





	<?php endwhile; ?>

<?php get_footer(); ?>