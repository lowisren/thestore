<?php
/**
 * The template for displaying comments.
 *
 * The area of the page that contains both current comments
 * and the comment form.
 *
 * @package fortunato
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password we will
 * return early without loading the comments.
 */
if ( post_password_required() ) {
	return;
}
?>

<div id="comments" class="comments-area">

	<?php // You can start editing here -- including this comment! ?>

	<?php if ( have_comments() ) : ?>
		<div class="sepHentry comments-title"><h2><i class="fa fa-comments spaceRight" aria-hidden="true"></i>
			<?php
				$comments_number = get_comments_number();
				if ( '1' === $comments_number ) {
					printf( esc_html__( '1 Comment', 'fortunato' ), $comments_number );
				} else {
					/* translators: %s: number of comments */
					printf( esc_html( _n( '%d Comment', '%d Comments', $comments_number, 'fortunato' ) ), $comments_number );
				}
			?>
		</h2></div>

		<ol class="comment-list">
			<?php
				wp_list_comments( array(
					'style'      => 'ol',
					'short_ping' => true,
					'avatar_size' => '60',
					'reply_text'        =>  '<span>' .esc_html__( 'Reply'  , 'fortunato' ) . '<i class="fa fa-reply spaceLeft" aria-hidden="true"></i></span>',
				) );
			?>
		</ol><!-- .comment-list -->

		<?php if ( get_comment_pages_count() > 1 && get_option( 'page_comments' ) ) : // Are there comments to navigate through? ?>
		<nav class="navigation comment-navigation" role="navigation">
			<h2 class="screen-reader-text"><?php esc_html_e( 'Comment navigation', 'fortunato' ); ?></h2>
			<div class="nav-links">
				<div class="nav-previous"><?php previous_comments_link( '<i class="fa fa-lg fa-angle-double-left spaceRight" aria-hidden="true"></i>' . esc_html__( 'Older Comments', 'fortunato' ) ); ?></div>
				<div class="nav-next"><?php next_comments_link( esc_html__( 'Newer Comments', 'fortunato' ) . '<i class="fa fa-lg fa-angle-double-right spaceLeft" aria-hidden="true"></i>' ); ?></div>
			</div><!-- .nav-links -->
		</nav><!-- .comment-navigation -->
		<?php
		endif; // Check for comment navigation.

	endif; // Check for have_comments().

	// If comments are closed and there are comments, let's leave a little note, shall we?
	if ( ! comments_open() && '0' != get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) : ?>
		<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'fortunato' ); ?></p>
	<?php endif; ?>

	<?php
	$commenter = wp_get_current_commenter();
	$req = get_option( 'require_name_email' );
	$aria_req = ( $req ? " aria-required='true'" : '' );

	$fields =  array(
		'author' => '<div class="blockCommentLeft"><p class="comment-form-author"><label for="author"><span class="screen-reader-text">' . __( 'Name *'  , 'fortunato' ) . '</span></label><input id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) . '" ' . $aria_req . ' placeholder="' . esc_attr__( 'Name *'  , 'fortunato' ) . '"/></p>',
		'email'  => '<p class="comment-form-email"><label for="email"><span class="screen-reader-text">' . __( 'Email *'  , 'fortunato' ) . '</span></label><input id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) . '" ' . $aria_req . ' placeholder="' . esc_attr__( 'Email *'  , 'fortunato' ) . '"/></p>',
		'url'    => '<p class="comment-form-url"><label for="url"><span class="screen-reader-text">' . __( 'Website *'  , 'fortunato' ) . '</span></label><input id="url" name="url" type="text" value="' . esc_attr( $commenter['comment_author_url'] ) . '" placeholder="' . esc_attr__( 'Website'  , 'fortunato' ) . '"/></p></div>',
	);
	$required_text = __(' Required fields are marked ', 'fortunato').' <span class="required">*</span>';
	?>
	<?php comment_form( array(
		'fields' => apply_filters( 'comment_form_default_fields', $fields ),
		/* translators: %s: wordpress login url */
		'must_log_in' => '<p class="must-log-in">' .  sprintf( __( 'You must be <a href="%s">logged in</a> to post a comment.' , 'fortunato' ), wp_login_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p>',
		/* translators: 1: profile user link, 2: username, 3: logout link */
		'logged_in_as' => '<p class="logged-in-as smallPart">' . sprintf( __( 'Logged in as <a href="%1$s">%2$s</a>. <a href="%3$s" title="Log out of this account">Log out?</a>'  , 'fortunato' ), admin_url( 'profile.php' ), $user_identity, wp_logout_url( apply_filters( 'the_permalink', get_permalink( ) ) ) ) . '</p><div class="blockComment">',
		'comment_notes_before' => '<p class="comment-notes smallPart">' . __( 'Your email address will not be published.'  , 'fortunato' ) . ( $req ? $required_text : '' ) . '</p><div class="blockComment double">',
		'title_reply' => __( 'Leave a Reply'  , 'fortunato' ),
		/* translators: %s: name of person to reply */
		'title_reply_to' => __( 'Leave a Reply to %s'  , 'fortunato' ),
		'cancel_reply_link' => __( 'Cancel reply'  , 'fortunato' ) . '<i class="fa fa-times spaceLeft"></i>',
		'label_submit' => __( 'Post Comment'  , 'fortunato' ),
		'comment_field' => '<div class="blockCommentRight"><p class="comment-form-comment"><label for="comment"><span class="screen-reader-text">' . __( 'Comment *'  , 'fortunato' ) . '</span></label><textarea id="comment" name="comment" rows="8" aria-required="true" placeholder="' . esc_attr__( 'Comment *'  , 'fortunato' ) . '"></textarea></p></div>',
	));
	?>

</div><!-- #comments -->
