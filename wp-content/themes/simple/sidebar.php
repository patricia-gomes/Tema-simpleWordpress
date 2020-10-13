<aside>
	<div class="side_bar">
		<div class="widget_bar"></div>

		<!--Ativa o sidebar-->
		<?php
		if(is_active_sidebar('ps_sidebar')) {
			dynamic_sidebar('ps_sidebar');
		}
		?>
	</div>
</aside>