<?php get_header(); ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<?php echo get_post_format() ?>
	<?php get_template_part('content','single'); ?>
	<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
 	<?php endwhile; ?>
<?php get_footer(); ?>