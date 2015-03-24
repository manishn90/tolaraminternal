<?php 

	/**
	 * COPYRIGHT
	 */

?>		

	<section class="widget copyright">
		<p class="main"><?php esc_html_e('Copyright', ECKO_THEME_ID); ?> &copy; <a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php esc_html(bloginfo('name')); ?></a>. <?php echo date("Y"); ?> &bull; <?php esc_html_e('All rights reserved', ECKO_THEME_ID); ?>.</p>
		<p class="alt"><span class="wordpress"><?php esc_html_e('Proudly published with', ECKO_THEME_ID); ?> <a href="http://wordpress.org">WordPress</a>. &bull;</span> <span class="ecko">Theme by <a href="http://ecko.me">Ecko</a>.</span></p>
	</section>