<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=no">
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset'); ?>" />
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<!--Imagem principal-->
		<a href="https://localhost/simpleWordpress/"><img src="https://localhost/simpleWordpress/wp-content/themes/simple/assets/images/header-simplewordpress.png" alt="Imagem colorida com nome do blog no meio"/></a>
		
		<?php
		//Verificando se tem logo
		if(has_custom_logo()) {
			the_custom_logo();
		}
		?>
	</header>