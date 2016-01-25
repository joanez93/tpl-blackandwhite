<!--Linhas importantes -->
<?php  
	if(!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die('Por favor, não carregue essa page diretamente. Vida longa e próspera!');
	if(post_password_required() ) { ?>
		<p class="no-comments">Este artigo está protegido por senha. Faça login para ver os comentários.</p>
<?php 
	return;
	}
?>
<section class="comments-content">
	<header class="comments">
		<h4 class="title-comments">Comentários<span class="number-of-comments"><?php comments_number('0', '1', '%'); ?></span></h4>
		
	</header>

	<!-- Se tiver comentários -->
	<?php if ( have_comments() ) : ?>

	<!-- Lista de comentários -->
	<ul class="comment-list">
		<?php wp_list_comments('avatar_size=64&type=comment'); ?>
	</ul>

	<!-- se houver paginação -->
	<?php if($wp_query->max_num_pages > 1) : ?>	
		<div class="pagination">
			<ul>
				<li class="older"><?php previous_comments_link('Anteriores'); ?></li>
				<li class="newer"><?php next_comments_link('Recentes'); ?></li>
			</ul>
		</div>

		<?php endif; ?>

	<?php endif; ?>

	<!-- Adicionar Comentario -->
	<?php if( comments_open() ) : ?>
		<div class="response">
			<h3>Deixe o seu comentário!</h3>
			<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="comment-form">
				<fieldset>
					<!-- Identificação do usuário e logout -->
					<?php if ( $user_ID ) : ?>
						<div class="user">
							<p>Logado como <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?>.</a></p>
							<p><a href="<?php echo wp_logout_url(); ?>" title="Sair dessa conta">Sair dessa conta &raquo;</a></p>
						</div>

					<?php else : ?>

						<label for="author">Nome:</label>
						<input type="text" name="author" id="author" value="<?php echo $comment_author; ?>" />

						<label for="email">Email:</label>
						<input type="text" name="email" id="email" value="<?php echo $comment_author_email; ?>" />

						<label for="Website">Website:</label>
						<input type="text" name="url" id="url" value="<?php echo $comment_author_url; ?>" />

					<?php endif; ?>

						<label for="comment">Comentário:</label>
						<textarea name="comment" id="comment" rows="10" cols="10"></textarea>

						<button type="submit" class="btn-submit">Enviar Comentário</button>

						<?php comment_id_fields(); ?>
						<?php do_action('comment_form', $post->ID); ?>
				</fieldset>
			</form> <!-- Fim do form -->
			<p class="cancel"><?php cancel_comment_reply_link('Cancelar Resposta') ?></p>
		</div>
	<?php else : ?>
		<h3>Comentários não permitidos.</h3>
	<?php endif; ?>
</section>