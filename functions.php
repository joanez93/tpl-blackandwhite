<!--Local onde ficam algumas funções que adicionam mais capacidades aos temas
<!-- Widgets -->
<?php 
if (function_exists('register_sidebar')) {
		register_sidebar(array(
			'name'			=> 'Area-1',
			'before_widget'	=> '<div class="widget">',
			'after_widget'	=> '</div>',
			'before_title'	=> '<h3>',
			'after_title'	=> '</h3>',
		));
	}
?>


<!-- Funções nos posts -->
<?php 
	// add post-formats to post_type 'page'
	add_post_type_support( 'page', 'post-formats' );
	add_theme_support( $feature, $arguments );
	add_theme_support( 'post-formats', array( 'aside', 'gallery' ) );
	add_post_type_support( 'page', 'excerpt' ); // Suport para trechos
	add_theme_support( 'post-thumbnails' );
	add_theme_support( 'post-thumbnails', array( 'post' ) );          // Posts only
	add_theme_support( 'post-thumbnails', array( 'page' ) );          // Pages only
	add_theme_support( 'post-thumbnails', array( 'post', 'movie' ) ); // Posts and Movies
?>
