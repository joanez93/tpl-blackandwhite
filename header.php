<!--Local onde fica o código do cabeçalho -->
<?php
/**
 * The Header for our theme
 * @package trololo
 * @since 1.0.0
 */
?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>" charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width,initial-scale=1">

	<!-- Folhas de estilos -->
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo('stylesheet_url') ?>" />
	<link rel="stylesheet" href="<?php bloginfo( 'pingback_url' ); ?>">

	<!-- Javascripts -->
	<script type="text/javascript" src=""></script>


	<title><?php bloginfo('name'); ?></title>

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );  wp_head(); ?>
</head>
<body>
	<header>
		<div class="bg-video">
			<video autoplay loop no-controls>
				<source src="http://izzyweb.com.br/public/videos/people-bg.mp4" type="video/mp4">
				<source src="http://izzyweb.com.br/public/videos/people-bg.webm" type="video/webm"> 
			</video>
		</div>
		<div class="">
			
		</div>
		<i id="menu-top" class="ico-menu"></i>
		<h1 class="title"><?php bloginfo('name') ?><a href="<?php bloginfo('url'); ?>"></a></h1>
		<h2 class="subtitle"><?php bloginfo('description') ?></h2>

		<nav class="main-menu">
			<ul>
				<?php wp_nav_menu(); ?>
			</ul>
		</nav>
		<!-- <input class="search-top" placeholder="O que você procura?" <?php the_search_query(); ?> /> 
		<button type="submit">Procurar</button>-->
	</header>