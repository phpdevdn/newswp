<?php
	// admin option theme
	 define( 'OPTIONS_FRAMEWORK_DIRECTORY', get_template_directory_uri() . '/inc/' );
	require_once dirname( __FILE__ ) . '/inc/options-framework.php';

	// Loads options.php from child or parent theme
	$optionsfile = locate_template( 'options.php' );
	load_template( $optionsfile );

	/*
	 * This is an example of how to add custom scripts to the options panel.
	 * This one shows/hides the an option when a checkbox is clicked.
	 *
	 * You can delete it if you not using that option
	 */
	add_action( 'optionsframework_custom_scripts', 'optionsframework_custom_scripts' );

	function optionsframework_custom_scripts() { ?>

	<script type="text/javascript">
	jQuery(document).ready(function() {

		jQuery('#example_showhidden').click(function() {
	  		jQuery('#section-example_text_hidden').fadeToggle(400);
		});

		if (jQuery('#example_showhidden:checked').val() !== undefined) {
			jQuery('#section-example_text_hidden').show();
		}

	});
	</script>

	<?php
	}	
	register_nav_menus( array(
		'primary' => __( 'Primary Menu'),
 	) );
 	//
 	function Mytheme_sidebar_init() {
	register_sidebar( array(
		'name'          => __( 'Widget Area'),
		'id'            => 'sidebar-1',
		'class'			=>'sidebar',
		'description'   => __( 'Add widgets here to appear in your sidebar.'),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );
	}
	add_action( 'widgets_init', 'Mytheme_sidebar_init' );
	// add theme support
 	function custom_theme_setup() {
	add_theme_support( 'post-thumbnails',array('post','page') );
	set_post_thumbnail_size( 640, 425, true );
	//
	add_theme_support( 'post-formats', array(
		'aside', 'image', 'video', 'quote', 'link', 'gallery', 'status', 'audio', 'chat'
	) );
	//
	$defaults = array(
	'default-color'          => '#fff',
	'default-image'          => '',
	'default-repeat'         => '',
	'default-position-x'     => '',
	'default-attachment'     => '',
	'wp-head-callback'       => '_custom_background_cb',
	'admin-head-callback'    => '',
	'admin-preview-callback' => ''
	);
	add_theme_support( 'custom-background', $defaults );
	//
	$args = array(
	'search-form',
	'comment-form',
	'comment-list',
	'gallery',
	'caption'
	);
	add_theme_support( 'html5', $args );
	//
 	}
	add_action( 'after_setup_theme', 'custom_theme_setup' );
	//
	function mytheme_script(){
		wp_deregister_script( 'jquery' );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '3.3.4' );
		wp_enqueue_style( 'bootstrap-theme', get_template_directory_uri().'/css/bootstrap-theme.min.css', array(), '3.3.4' );
		wp_enqueue_style( 'mystyle', get_template_directory_uri().'/style.css', array(), null );
		wp_enqueue_script('jquery',get_template_directory_uri().'/js/jquery-1.11.3.min.js',array(),'1.11.3',false);	
		wp_enqueue_script('source',get_template_directory_uri().'/js/bootstrap.min.js',array(),null,true);	
		wp_enqueue_script('main',get_template_directory_uri().'/js/main.js',array(),null,true);	

	}
	add_action( 'wp_enqueue_scripts', 'mytheme_script' );
	function title_custom($title,$sep){
		$title .= get_bloginfo('name');
 		$des=get_bloginfo('description');
		if(is_home() || is_front_page()){
			$title="$title $sep $des";			
		}
		return $title;
	}
	add_filter('wp_title','title_custom',10,2);
	function my_post_queries( $query ) {
	  // do not alter the query on wp-admin pages and only alter it if it's the main query
	  if (!is_admin() && $query->is_main_query()){

	    // alter the query for the home and category pages 

	    if(is_home()){
	      $query->set('posts_per_page', 4);
	    }

	    if(is_category() || is_archive() || is_tag() || is_search()){
	      $query->set('posts_per_page', 3);
	    }

	  }
	}
	add_action( 'pre_get_posts', 'my_post_queries' );

