<?php get_header(); ?>
<section class="left-blocks">
 	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<?php get_template_part('content',get_post_format()); ?>
	<?php endwhile; ?>
	<!-- post navigation -->
	<?php echo paginate_links(); ?>
	<?php else: ?>
	<!-- no posts found -->
	<p>no post</p>
	<?php endif; ?> 
 </section>
<?php get_footer(); ?>