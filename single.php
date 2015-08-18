<?php get_header(); ?>
<section class="left-blocks">
 	<?php while ( have_posts() ) : the_post(); ?>
	<!-- post -->
	<?php echo get_post_format() ?>
	<?php get_template_part('content','single'); ?>
	<?php if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif; ?>
 	<?php endwhile; ?>
 	<?php 
 	$args=array(
 		'cat'=>get_the_category()[0]->cate_ID,
 		'order'=>'DESC',
 		'posts_per_page'=>4,
 		'post__not_in'=>array($post->ID),

 		);
   	$relate=new WP_Query($args); ?>
   	<?php if ( $relate->have_posts() ) : ?>
   	<div class="row">
   		<h3 class="page-header">Relate Post</h3>
   	<?php while ( $relate->have_posts() ) : $relate->the_post(); ?>
   	<!-- post -->
   	<div class="col-xs-6 col-md-3">
   		<div class="thumbnail">
   			<?php if(has_post_thumbnail()) : ?>
   			<?php the_post_thumbnail(); ?>
   		<?php endif; ?>
   		<div class="caption">
   			<a href="<?php the_permalink(); ?>" title=""><?php the_title(); ?></a>   			
   		</div>
   		</div>
   	</div>
   	<?php endwhile; ?>
   </div>
    <?php endif; ?>
 	<?php wp_reset_postdata(); ?>
 </section>
<?php get_footer(); ?>