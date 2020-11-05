<?php
/*Esse  primeiro if é para verificar se um determinado post exige senha, assim não exibe comentários de posts protegidos.*/
if(post_password_required()) {
	return;
}

//Exibe os comentário se eles existirem
if(have_comments()) {
	foreach($comments as $comment) {
		?>
			<div class="comment">
				<div class="author_photo">
					<?php echo get_avatar($comment, 50); ?>
				</div>
				<div class="comment_area">
					<!----Nome do autor do comentario---->
					<strong><?php comment_author(); ?></strong>
					<!---Data do comentario--->
					<p class="comment_date"><?php comment_date();  ?></p>
					<!--Texto do comentario-->
					<p class="comment_text"><?php comment_text(); ?></p>
				</div>
			</div>
		<?php
	}
	// Paginação dos comentários
	the_comments_pagination();
}
?>
<div class="separator"></div>
<?php
comment_form( array(
	'title_reply' => 'Deixe um comentário',
	'comment_field' => '<textarea name="comment" class="comment_form"></textarea>',
	'label_submit' => 'Publicar'
));
?>