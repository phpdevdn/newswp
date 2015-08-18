<?php get_header(); ?>
	<div class="page-header">
		<h2> search result for : <?php echo get_search_query(); ?></h2>		
	</div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	 <?php get_template_part('content') ?>
	<?php endwhile; ?>
	<?php echo paginate_links(); ?>
	<!-- post navigation -->
	<?php else: ?>
	<!-- no posts found -->
	<?php endif; ?>
<?php get_footer(); ?>