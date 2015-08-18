<?php if ( post_password_required() ) {
	return;
} ?>
<div id="comments" class="comments-area">

	<?php if ( have_comments() ) : ?>
		<h3 class="comments-title">
			<?php
				printf( '%1$s thoughts on &ldquo;%2$s&rdquo;',number_format_i18n( get_comments_number() ), get_the_title() );
			?>
		</h3>
		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'       => 'ol',
					'short_ping'  => true,
					'avatar_size' => 56,
				) );
			?>
		</ol><!-- .comment-list -->
	<?php 
		paginate_comments_links(array(
			'prev_text'=>'&laquo;',
			'next_text'=>'&raquo;'
		));
	 ?>
	<?php endif; // have_comments() ?>

	<?php
		// If comments are closed and there are comments, let's leave a little note, shall we?
		if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
	?>
		<p class="no-comments"><?php echo 'Comments are closed.'; ?></p>
	<?php endif; ?>

	<?php 
	$fields=array(
		'author'=>"<div class='form-group'>
			<label  for='author' class='col-sm-2 control-label' >". __( 'Name', 'domainreference' ) ."</label>
			<div class='col-sm-10'><input id='author' name='author' type='text' value='". esc_attr( $commenter['comment_author'] ) ."'class='form-control'></div>			
		</div>",
		'email'=>"<div class='form-group'>
			<label  for='email' class='col-sm-2 control-label' >". __( 'Email', 'domainreference' ) ."</label>
			<div class='col-sm-10'><input id='email' name='email' type='text' value='". esc_attr( $commenter['comment_author_email'] ) ."'class='form-control'>
			<p>Example: account@example.com</p>
			</div>				
		</div>"
		);
	$args=array(
		'fields'=>apply_filters('comment_form_default_fields',$fields),
		'comment_field'=>"<div class='form-group'><label for='comment' class='control-label col-sm-2'>". _x( 'Comment', 'noun' ) ."</label>
		<div class='col-sm-10'><textarea id='comment' name='comment' class='form-control' cols='45' rows='8' aria-required='true'></textarea>
		</div></div>",
		'class_submit'=>'btn btn-default'
		);
	comment_form($args); ?>

</div><!-- .comments-area -->