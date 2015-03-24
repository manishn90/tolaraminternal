<?php 

	/**
	 * COVER - BLOG TITLE
	 */


	if(!get_theme_mod('blogcover_disable', false)){

		$cover_logo = "";
		if(get_theme_mod('blogcover_logo', false)){
			$cover_logo = get_theme_mod('blogcover_logo');
		}elseif(get_theme_mod('general_blog_image', false)){
			$cover_logo = get_theme_mod('general_blog_image');
		}

?>

	<section class="cover front">
		<div class="background" style="background-image:url('<?php echo esc_url(get_theme_mod('blogcover_background')); ?>');"></div>
		<?php get_template_part('layouts/header_bloginfo'); ?>
		<section class="blogtitle wrapper">
			<?php if($cover_logo != ""){ ?>
				<a href="<?php echo esc_url(home_url()); ?>" class="logo"><img src="<?php echo esc_url($cover_logo); ?>" alt="<?php esc_attr(bloginfo('name')); ?>"></a>
			<?php }else{ ?>
				<a href="<?php echo esc_url(home_url()); ?>"><h1 itemprop="headline"><?php esc_html(bloginfo('name')); ?></h1></a>
			<?php } ?>
			<p class="description" itemprop="description"><?php echo esc_html(get_theme_mod('general_blog_description')); ?></p>
			<hr>
		</section>
		<div class="mouse">
			<div class="scroll"></div>
		</div>
	</section>

<?php }else{ ?>

	<section class="headerspace"></section>

<?php } ?>