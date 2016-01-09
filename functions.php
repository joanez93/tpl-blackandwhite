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