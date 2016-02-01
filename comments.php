<?php function reverie_comments($comment, $args, $depth) {
	$GLOBALS['comment'] = $comment; ?>
	<li <?php comment_class(); ?>>
		<article id="comment-<?php comment_ID(); ?>">
			<header class="comment-author">
				<?php // echo get_avatar($comment,$size='48'); ?>
				<div class="author-meta">
					<h6 class="author"><?php printf(__('%s', 'reverie'), get_comment_author_link()) ?><span> •  
					<?php
if ( get_comment_time('U') > date('U') - 7*60*60*24 ) {
echo human_time_diff( get_comment_time('U'), current_time('timestamp') ) . ' ago';
} elseif ( get_comment_date('Y') == date('Y') ) {
comment_date('F j');
} else {
comment_date('F j, Y');
} ?></span><?php edit_comment_link(__(' • Edit', 'reverie'), '', '') ?></h6>
					<h6 class="reply"><?php comment_reply_link(array_merge( $args, array('depth' => $depth, 'max_depth' => $args['max_depth']))) ?></h6>
				</div>
			</header>
			
			<?php if ($comment->comment_approved == '0') : ?>
       			<div class="notice">
					<h6><?php _e('Your comment is awaiting moderation.', 'reverie') ?><h6>
          		</div>
			<?php endif; ?>
			
			<section class="comment-text">
				<?php comment_text() ?>
			</section>

		</article>
<?php } ?>

<?php
// Do not delete these lines
	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die (__('Please do not load this page directly. Thanks!', 'reverie'));

	if ( post_password_required() ) { ?>
	<section id="comments">
		<div class="notice">
			<p class="bottom"><?php _e('This post is password protected. Enter the password to view comments.', 'reverie'); ?></p>
		</div>
	</section>
	<?php
		return;
	}
?>
<?php // You can start editing here. Customize the respond form below ?>
<?php if ( have_comments() ) : ?>
	<section id="comments">
  <div class="comment-count">
		<h6 class="count left">Comments<span><?php comments_number(__('0', 'reverie'), __('1', 'reverie'), __('%', 'reverie') ); ?></span></h6>
<!--     <h6 class="showhide right">Hide Comments</h6>
 -->  </div>
		<ul class="commentlist">
		<?php wp_list_comments('type=comment&callback=reverie_comments&max_depth=3'); ?>
		
		</ul>
		<footer>
			<nav id="comments-nav">
				<div class="comments-previous"><?php previous_comments_link( __( '&larr; Older comments', 'reverie' ) ); ?></div>
				<div class="comments-next"><?php next_comments_link( __( 'Newer comments &rarr;', 'reverie' ) ); ?></div>
			</nav>
		</footer>
	</section>
<?php else : // this is displayed if there are no comments so far ?>
	<?php if ( comments_open() ) : ?>
	<?php else : // comments are closed ?>
	<section id="comments">
		<div class="notice">
			<p class="bottom"><?php _e('Comments are closed.', 'reverie') ?></p>
		</div>
	</section>
	<?php endif; ?>
<?php endif; ?>
<?php if ( comments_open() ) : ?>
<section id="respond" class="comments-respond">
	
	<h6 class="cancel-comment-reply"><?php cancel_comment_reply_link(); ?></h6>
	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
	<p><?php printf( __('You must be <a href="%s">logged in</a> to post a comment.', 'reverie'), wp_login_url( get_permalink() ) ); ?></p>
	<?php else : ?>
	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
		<?php if ( is_user_logged_in() ) : ?>
		<h6><?php printf(__('Logged in as <a href="%s/wp-admin/profile.php">%s</a>.', 'reverie'), get_option('siteurl'), $user_identity); ?> <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="<?php __('Log out of this account', 'reverie'); ?>"><?php _e('Log out', 'reverie'); ?></a></p>
		<?php else : ?>
		</h6>
    <div class="input">
			<input type="text" class="five" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" placeholder="<?php _e('Name', 'reverie'); ?>" size="22" tabindex="1" <?php if ($req) echo "aria-required='true'"; ?>>
      </div>
      <div class="input">
			<input type="text" class="five" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" placeholder="<?php _e('Email (will not be published)', 'reverie'); ?>" size="22" tabindex="2" <?php if ($req) echo "aria-required='true'"; ?>>
      </div>
		<?php endif; ?>
		<div class="input">
			<textarea name="comment" id="comment" placeholder="<?php _e('Comment', 'reverie'); ?>" tabindex="4"></textarea>
		</div>
		<input name="submit" class="button small button-teal text-white" type="submit" id="submit" tabindex="5" value="<?php esc_attr_e('Submit Comment', 'reverie'); ?>">
		<?php comment_id_fields(); ?>
		<?php do_action('comment_form', $post->ID); ?>
	</form>
	<?php endif; // If registration required and not logged in ?>
</section>
<?php endif; // if you delete this the sky will fall on your head ?>