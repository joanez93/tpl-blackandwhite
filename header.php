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

	<link rel="EditURI" type="application/rsd+xml" title="RSD" href="http://izzyweb.com.br/wp/mauricio/xmlrpc.php?rsd">

	<title><?php bloginfo('name'); ?></title>

	<?php if ( is_singular() && get_option( 'thread_comments' ) ) wp_enqueue_script( 'comment-reply' );  wp_head(); ?>
</head>
<body>
	<header>
		<!-- Background -->
		<div class="bg-video">
			<video autoplay loop muted>
				<source src="http://izzyweb.com.br/public/videos/mauricio/bg-blackandwhite.mp4" type="video/mp4">
				<source src="http://izzyweb.com.br/public/videos/mauricio/bg-blackandwhite.webm" type="video/webm"> 
			</video>
		</div>

		<!-- Botão de chamada -->
		<i id="get-menu" class="ico-menu" title="Abrir o menu" alt="Abrir o menu"></i>

				<!-- Menu -->
		<nav id="menu">
			<i id="close-menu" class="ico-cross" title="Fechar o menu" alt="Fechar o menu"></i>
			<?php wp_nav_menu(); ?>
			<ul class="social-network">
				<a href="#"><li class="ico-facebook"></li></a>
				<a href="#"><li class="ico-youtube"></li></a>
				<a href="#"><li class="ico-twiiter"></li></a>
			</ul>
		</nav>
		<!-- <div class="logo-header">
			<img src="http://localhost/mauricio/wp-content/themes/blackandwhite/img/logo.png" alt="Logo: Em Preto e Branco" title="Em Preto e Branco">	
		</div> -->
		<div class="apr-text">
			<h4 class="page-subtitle"><?php bloginfo('description') ?></h4>
			<button class="btn-main btn-share" title="Envie sua história" alt="Botão: Envie sua história">Minha história</button>
		</div>
			
		<div class="posts-section">
			<?php the_content( $more_link_text, $stripteaser ); ?>
		</div>
	</header>