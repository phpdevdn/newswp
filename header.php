<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php wp_title('|',true,'right'); ?></title>
	<meta name="description" content="<?php bloginfo('description') ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
	<header id="header" class="">
		<div class="container-fluid">
			<div class"row">
				<div class="logo col-xs-6">
					<h1><a href="<?php echo home_url() ?>" title="<?php bloginfo('name') ?>"><?php bloginfo('name') ?></a></h1>
					<p><?php bloginfo('description'); ?></p>
 	 			</div>
	 			<div class="col-xs-6">
	 				<div class="banner" style="max-width:100%;max-height:120px;overflow:hidden;margin:0">
	 					<?php echo of_get_option('top_banner') ?>
	 				</div>
	 			</div>
 			</div>
		</div>
	</header><!-- /header -->
	<?php    /**
		* Displays a navigation menu
		* @param array $args Arguments
		*/
		$args = array(
			'theme_location' => 'primary',
			'menu' => '',
			'container' => '',
			'container_class' => '',
			'container_id' => '',
			'menu_class' => 'nav navbar-nav navbar-left',
			'menu_id' => '',
			'echo' => true,
			'fallback_cb' => 'wp_page_menu',
			'before' => '',
			'after' => '',
			'link_before' => '',
			'link_after' => '',
			'items_wrap' => '<ul id = "%1$s" class = "%2$s">%3$s</ul>',
			'depth' => 0,
			'walker' => ''
		); ?>
	<nav class="navbar navbar-default navbar-top" role="navigation">
		<div class="container-fluid">
 			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
 			</div>		
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse">
				<?php wp_nav_menu($args); ?>
				<?php echo get_search_form(); ?>				
			</div><!-- /.navbar-collapse -->		</div>
	</nav>
	<div id="main" class="container-fluid">
		<div class="left-block">