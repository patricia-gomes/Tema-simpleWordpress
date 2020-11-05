<?php get_header(); ?>
	
<section>
	<div class="container">
		<div class="article">
			<!--Verificando se existe post cadastrado-->
			<?php if(have_posts()): ?>
				<?php while(have_posts()): ?>
					<?php the_post(); ?>
					<!--Exibe o titulo-->
					<h2 class="widget_title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
					<!--Exibe a data-->
					<div class="article_date"><?php echo get_the_date(); ?></div>
					<!--Verificando se existe uma imagem nesse post-->
					<?php if(has_post_thumbnail()): ?>
						<!--Link do post na tag <a>-->
						<a href="<?php the_permalink(); ?>">
							<!--Exibe a imagem em tamanho original (full)-->
							<?php the_post_thumbnail('full'); ?>
						</a>
					<?php endif; ?>
					<!--Exibe o texto do artigo-->
					<div class="article_text">
						<p><?php the_excerpt(); ?></p>
						<a href="<?php the_permalink(); ?>">Leia mais...</a>
					</div>
					<!--Exibe a quantidade de comentarios-->
					<p class="comments_number">
						<?php comments_number('0 comentário', '1 comentário', '% comentários'); ?>
					</p>
				<?php endwhile; ?>
			<?php endif; ?>
			<!---Pagination-->
			<div class="pagination">
				<div class="container_pagination">
					<div class="previous_page"><?php previous_posts_link('< Página Anterior'); ?></div>
					<div class="next_page"><?php next_posts_link('Próxima Página >'); ?></div>
				</div>
			</div>
		</div><!--Fim article-->
		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>