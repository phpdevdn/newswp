<article class="post-ele">	
	<header>		
		<h2><?php the_title(); ?></h2>				
	</header><!-- /header -->	
	<div class="meta-pos">		
			<p>		
				<span class="glyphicon glyphicon-bell"></span><?php echo get_the_date(); ?></a>		
				<span class="glyphicon glyphicon-user"></span><a href="<?php the_author_link(); ?>" title=""><?php the_author(); ?></a>  		
				<span class="glyphicon glyphicon-certificate"></span><?php the_category('|'); ?>		
 				<span class="glyphicon glyphicon-heart"></span><?php comments_number(); ?>		
			</p>		
		</div>	
		<div class="content-pos">
		<?php the_content(); ?>		
 	</div>		

</article>		