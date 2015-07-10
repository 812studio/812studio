<?php

// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		<p class="nocomments">This post is password protected. Enter the password to view comments.</p>
	<?php
		return;
	}
?>

<!-- You can start editing here. -->

<?php if ( have_comments() ) : ?>
	<h6 id="comments"><?php comments_number('0 Comments', '1 Comment', '% Comments' );?> <!--to &#8220;<?php //the_title(); ?>&#8221;--></h6>


	<ol class="commentlist">
	<?php wp_list_comments('type=comment&callback=custom_comment&avatar_size=118'); ?>
	</ol>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<!-- If comments are closed. -->
		<p class="nocomments">Comments are closed.</p>

	<?php endif; ?>
<?php endif; ?>


<?php if ( comments_open() ) : ?>

	<div id="respond">
	
		<h6 class="largeText"><?php comment_form_title( 'Post a Comment', 'Leave a Reply to %s' ); ?></h6>
		
		<div class="cancel-comment-reply">
			<small><?php cancel_comment_reply_link(); ?></small>
		</div>
		
		<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>You must be <a href="<?php echo wp_login_url( get_permalink() ); ?>">logged in</a> to post a comment.</p>
		<?php else : ?>
		
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
			
			<?php if ( is_user_logged_in() ) : ?>
			
				<p>Logged in as <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Log out &raquo;</a></p>
			
			<?php else : ?>
			<div id="commentData">

				<p><!-- NAME -->
					<label class="inField" for="author">Name <?php if ($req) echo "(required)"; ?></label>
					<input autocomplete="off" class="required" id="author"  minlength="2" name="author" tabindex="1" title="Name, please" type="text" value="<?php echo esc_attr($comment_author); ?>"  <?php if ($req) echo "aria-required='true'"; ?> />
					
				</p>
				
				<p><!-- EMAIL -->
					<label class="inField" for="email">E-mail <?php if ($req) echo "(required)"; ?></label>
					<input autocomplete="off" class="required email" id="email" name="email" tabindex="2" title="Valid e-mail address, please" type="text" value="<?php echo esc_attr($comment_author_email); ?>" <?php if ($req) echo "aria-required='true'"; ?> />
					
				</p>
				
				<p><!-- URL -->
					<label class="inField" for="url">Website</label>
					<input autocomplete="off" class="url" id="url" name="url" tabindex="3" type="text" value="<?php echo esc_attr($comment_author_url); ?>" />
				
				</p>
				
				<div class="error"> </div>
			</div>
			
			<?php endif; ?>
			
			<div id="commentText">
				<!--<p>XHTML: You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->
				
				<p><!-- COMMENT -->
					<label  class="inField" for="comment">Translate thoughts into words here...</label>
					<textarea class="required" id="comment" minlength="2" maxlength="1000" name="comment" tabindex="4" title="Comment, please"></textarea>
				</p>
				
				
			</div>
			<?php do_action('comment_form', $post->ID); ?>
			
			<div class="submitCol">
				<p>
					<input id="submit" name="submit" tabindex="5" type="submit" value="Submit" />
					<?php comment_id_fields(); ?>
				</p>
			</div>
		</form>
		
		<?php endif; // If registration required and not logged in ?>
	</div>

<?php endif; // if you delete this the sky will fall on your head ?>
