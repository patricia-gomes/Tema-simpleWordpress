<aside>
	<div class="side_bar">
		<form role="search" method="GET" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="form">
		
		<input type="search" name="s" value="<?php the_search_query(); ?>" class="input" placeholder="Pesquisar...">

		<input type="submit" value="OK" class="button">
	</div>
</form>
		<div class="widget_bar"></div>

		<!--Ativa o sidebar-->
		<?php
		if(is_active_sidebar('ps_sidebar')) {
			dynamic_sidebar('ps_sidebar');
		}
		?>
	</div>
</aside>