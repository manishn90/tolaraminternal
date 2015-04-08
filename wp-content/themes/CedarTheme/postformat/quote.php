<?php

	/**
	 * QUOTE
	 */
?>

	<article id="post-<?php the_ID(); ?>" <?php post_class("postitem"); ?>>
		<div class="wrapper">
			<h2 class="title"><?php the_title(); ?></h2>
			<div class="content"><?php echo the_content(); ?></div>
		</div>
	</article>