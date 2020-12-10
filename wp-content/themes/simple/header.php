<!DOCTYPE html>
<html lang="pt-br">
<head>
	<?php wp_head(); ?>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<!--- Biblioteca de icones --->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body <?php body_class(); ?>>
	<header class="header">
		<?php
		//Verificando se tem logo
		if(has_custom_logo()) {
			the_custom_logo();
		}
		?>
		
		
		<?php
		if(has_nav_menu('primary')) {
			wp_nav_menu(array(
				'theme_location' => 'primary',
				'container' => 'nav',
				'container_class' => 'main_menu',
				'fallback_cb' => false
			));
		}
		?>
	</header>