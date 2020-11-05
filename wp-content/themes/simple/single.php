
<?php get_header(); ?>
	
<section>
	<div class="container">
		<div class="article">
			<!--Verificando se existe post cadastrado-->
			<?php if(have_posts()): ?>
				<?php while(have_posts()): ?>
					<?php the_post(); ?>
					<!--Exibe o titulo-->
					<h2 class="widget_title"><?php the_title(); ?></h2>
					<!--Exibe a data-->
					<div class="article_date"><?php echo get_the_date(); ?></div>
					<!--Verificando se existe uma imagem nesse post-->
					<?php if(has_post_thumbnail()): ?>
							<!--Exibe a imagem em tamanho original (full)-->
							<?php the_post_thumbnail('full'); ?>
					<?php endif; ?>
					<!--Exibe o texto do artigo-->
					<div class="article_text">
						<p><?php the_content(); ?></p>
					</div>
					<!--Exibe a quantidade de comentarios-->
					<p class="comments_number">
						<?php comments_number('0 comentário', '1 comentário', '% comentários'); ?>
					</p>
					<br/><br/>
					<!---Area Comentarios---->
					<!---Antes de exibir tem de verificar se para aquele determinado post foi liberado os comentarios--->
					<?php 
						if(comments_open()) {
							comments_template();/*vai chamar o arquivo responsavel pelos comentarios(comments.php)*/
						}
					?>
				<?php endwhile; ?>
			<?php endif; ?>
			<!---Post anterior e o proximo post-->
			<div class="pagination">
				<div class="container_pagination">
					<div class="previous_page"><?php previous_post_link(); ?></div>
					<div class="next_page"><?php next_post_link(); ?></div>
				</div>
			</div>
		</div><!--Fim article-->
		<?php get_sidebar(); ?>
	</div>
</section>

<?php get_footer(); ?>