<article class="post-ele">	
	<header>		
		<h2><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>		
	</header><!-- /header -->		
		<div class="content-pos">
		<?php if(has_post_thumbnail()){
			the_post_thumbnail($post->ID,'thumbnail');
		} ?>
		<?php the_content('read more >>'); ?>		
 	</div>		
	<footer>		
		<div class="meta-pos">		
			<p>		
				<span class="glyphicon glyphicon-bell"></span><?php echo get_the_date(); ?></a>		
				<span class="glyphicon glyphicon-user"></span><a href="<?php the_author_link(); ?>" title=""><?php the_author(); ?></a>  		
				<span class="glyphicon glyphicon-certificate"></span><?php the_category('|'); ?>		
 				<span class="glyphicon glyphicon-heart"></span><?php comments_number(); ?>		
			</p>		
		</div>									
	</footer>
</article>		