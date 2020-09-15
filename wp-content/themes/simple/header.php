<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="<?php bloginfo('charset'); ?>" />

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
	<header>
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