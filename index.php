<!--Código do corpo do site -->
	<!-- Chamada do header -->
	<?php get_header(); ?>
	<main class="content">
		<!-- Função que faz a chamada dos posts -->
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?> 
		<!-- Dados do post -->
		<article class="post">
			<h2 class="post-title"><a href="<?php the_permalink() ?>"><?php the_title()?></a></h2>
			<div>
				<?php if ( has_post_thumbnail() ) {
					the_post_thumbnail();
				} //Mostra a imagem no post ?>
				<p><?php the_content(); //Conteúdo do post ?></p>
			</div>
			<div class="description">
				<span>Postado por: <?php the_author() ?> em <?php the_time('d/M/Y') ?></span>
				<span><?php comments_popup_link('Sem comentários', '1 Comentário', '% Comentários', 'comments-link', ''); ?></span>
				<span><?php edit_post_link(('Editar')); ?></span>	
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
		<div class="navegacao">
			<span class="recentes"><?php next_posts_link('&laquo; Artigos Anteriores') ?></span>
			<span class="anteriores"><?php previous_posts_link('Artigos Recentes &raquo;') ?></span>
		</div>
	</main>


	<!-- Javascripts -->
	<script type="text/javascript" src="http://localhost/mauricio/wp-content/themes/blackandwhite/js/jquery/jquery-2.2.0.min.js"></script>
	<script type="text/javascript" src="http://localhost/mauricio/wp-content/themes/blackandwhite/js/events.js"></script>

<!-- Corpo do site PS: a tag <body> já foi aberta no header -->

<!-- Chamada da sidebar e footer -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>

