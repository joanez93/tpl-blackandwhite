<!--Código do corpo do site -->
	<!-- Chamada do header -->
	<?php get_header(); ?>
	<header class="home-page">
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
				<p class="page-subtitle">Redes sociais</p>
				<a href="#" title="Nossa página no facebook" target="_blank"><li class="ico-facebook"></li></a>
				<a href="#" title="Nosso canal no youtube" target="_blank"><li class="ico-youtube"></li></a>
				<a href="#" title="Nosso twitter" target="_blank"><li class="ico-twiiter"></li></a>
			</ul>
		</nav>
		<!-- <div class="logo-header">
			<img src="http://localhost/mauricio/wp-content/themes/blackandwhite/img/logo.png" alt="Logo: Em Preto e Branco" title="Em Preto e Branco">	
		</div> -->
		<div class="apr-text">
			<h3 class="page-subtitle"><?php bloginfo('description') ?></h3>
			<button class="btn-main btn-share" title="Envie sua história" alt="Botão: Envie sua história">Conte pra nós!</button>
		</div> 
		<div class="efect-down">
			<a href="#posts"><p class="icon-arrow-down" title="Vídeos"></p></a>
		</div>
			
	<!-- 	<section class="grid-1 apresentation-section">
			<article class="colunm-3">
				<div class="block-text">
					<i class="icon-pleft"></i><h4>Title Exemple</h4>
					<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
				</div>
				</article>
			<article class="colunm-3">
				<div class="block-text">
					<i class="icon-pleft"></i><h4>Title Exemple</h4>
					<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
				</div>
			</article>
			<article class="colunm-3">
				<div class="block-text">
					<i class="icon-pleft"></i><h4>Title Exemple</h4>
					<p>Mussum ipsum cacilds, vidis litro abertis. Consetis adipiscings elitis. Pra lá , depois divoltis porris, paradis. Paisis, filhis, espiritis santis. Mé faiz elementum girarzis, nisi eros vermeio, in elementis mé pra quem é amistosis quis leo. Manduma pindureta quium dia nois paga. Sapien in monti palavris qui num significa nadis i pareci latim. Interessantiss quisso pudia ce receita de bolis, mais bolis eu num gostis.</p>
				</div>
			</article>
		</section> -->
	</header>
	<main class="content">
		<!-- Função que faz a chamada dos posts -->
				<!-- Dados do post -->
		<section id="posts" class="grid-1 posts">
			<div class="page-title-videos">
				<!-- <h4>Últimas histórias</h4> --><i class="ico-video"></i>
			</div>
			<!-- Início da seção de posts -->
			<article class="grid-1 post-box">
			<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="colunm-5 hoverzoom">
				<?php the_post_thumbnail('medium'); ?>
					<div class="description">
						<h4 class="post-thumb-title"><a href="<?php the_permalink() ?>"><?php the_title()?></a></h4>
						<a href="<?php the_permalink();  ?>"><i class="ico-play"></i></a>
						<div class="footer">
							<div><span class="ico-calendar"><?php the_time('d/M/Y') ?></span></div>
							<div><span class="ico-comments"><?php comments_popup_link('0', '1', '%', 'comments-link', ''); ?></span>	</div>
						</div>
					</div>			
				</div>
				<?php endwhile ?>
				<?php else: ?>
					<!-- Senão - Mostra quando não existem posts -->
					<article class="post">
						<h2>Nada encontrado</h2>
						<div class="description">
							<span>Erro 404</span>
							<span>Lamentamos mas não foram encontrados artigos</span>
						</div>
					</article>
				<?php endif; ?>
			</article> 

			<article class="">
				
			</article>
		</section>
			<div class="navegacao">
				<span class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></span>
				<span class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></span>
			</div>			
	</main>


	<!-- Javascripts -->
	<script type="text/javascript" src="http://izzyweb.com.br/public/js/jquery/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="http://localhost/mauricio/wp-content/themes/blackandwhite/js/events.js"></script>
	<!-- <script type="text/javascript" src="http://localhost/mauricio/wp-content/themes/blackandwhite/js/events.js"></script> -->

<!-- Corpo do site PS: a tag <body> já foi aberta no header -->

<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer() ?>

