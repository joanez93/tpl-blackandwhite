<!--Código do corpo do post -->
	<!-- Chamada do header -->
	<?php get_header(); ?>
	<main class="content">
		<!-- Dados do post -->
		<section class="grid-1 page-post">
		<!-- Função que faz a chamada dos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<!-- Cabeçalho do Post - #SinglePage -->
			<header class="banner-post">
				<div class="box-header">
					<?php if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
						the_post_thumbnail('large');
					} ?>
				</div>
				<h2 class="post-title"><?php the_title()?></h2>
				<span class="ico-clock date colunm-1"><?php the_time('d/M/Y'); ?></span>
				<!-- <div class="efect-down">
					<a href=".the-post-content"><i class="icon-arrow-down"></i></a>
				</div> -->
				<nav class="menu-fixed colunm-1">
					<ul class="colunm-3 mid">
						<a href="#" id="gotohome">
							<li class="ico-gotohome" title="Voltar ao inicio">
								<span class="menu-description">Voltar pro inicio</span>
							</li>
						</a>
					</ul>
					
					<ul class="colunm-3 mid">
					<!-- <span class="ico-comment"><?php comments_popup_link('0', '1', '%', ''); ?></span> -->
						<a href="p:first-child" id="gotovideo">
							<li class="ico-gotovideo" title="Gostaria de assistir ao vídeo">
								<span class="menu-description">Ver o video</span>
							</li>
						</a>
						<a href="#" id="gotohistory">
							<li id="" class="ico-gotohistory" title="Gostaria de ler a história">
								<span class="menu-description">Ler a história</span>
							</li>
						</a>
						<a href="#" id="gotocomments">
							<li class="ico-gotocomments" title="Gostaria de comentar">
								<span class="menu-description">Comentar</span>
							</li>
						</a>
					</ul>
					<ul class="colunm-3 mid">
						<a href="#" id="gotomail">
							<li class="ico-gotomail" title="Tenho uma história! :)">
								<span class="menu-description">Enviar minha história</span>
							</li>
						</a>
					</ul>
				</nav>
			</header>
			<article class="the-post-content">
					<?php the_content(); ?>
			</article>
			<div class="comments">
				<?php comments_template(); ?>
			</div>
			<!-- Chamada dos comentários ao final do post -->
			

			<?php endwhile; else: ?>
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
		<div class="navegacao">
			<span class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></span>
			<span class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></span>
		</div>
		</section class="post">

	</main>
	<!-- Javascripts -->
	<script type="text/javascript" src="http://izzyweb.com.br/public/js/jquery/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="http://localhost/mauricio/wp-content/themes/blackandwhite/js/events.js"></script>
	<!-- <script type="text/javascript" src="http://localhost/mauricio/wp-content/themes/blackandwhite/js/events.js"></script> -->
<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
