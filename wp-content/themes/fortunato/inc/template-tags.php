<?php
/**
 * Custom template tags for this theme.
 *
 * Eventually, some of the functionality here could be replaced by core features.
 *
 * @package fortunato
 */

if ( ! function_exists( 'fortunato_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post-date/time and author.
 */
function fortunato_posted_on() {
	$time_string = '<time class="entry-date published updated" datetime="%1$s">%2$s</time>';
	if ( get_the_time( 'U' ) !== get_the_modified_time( 'U' ) ) {
		$time_string = '<time class="entry-date published" datetime="%1$s">%2$s</time><time class="updated" datetime="%3$s">%4$s</time>';
	}

	$time_string = sprintf( $time_string,
		esc_attr( get_the_date( 'c' ) ),
		esc_html( get_the_date() ),
		esc_attr( get_the_modified_date( 'c' ) ),
		esc_html( get_the_modified_date() )
	);
	
	$posted_on = '<a href="' . esc_url( get_permalink() ) . '" rel="bookmark">' . $time_string . '</a>';
	$byline = '<span class="author vcard"><a class="url fn n" href="' . esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) ) ) . '">' . esc_html( get_the_author() ) . '</a></span>';

	echo '<span class="posted-on"><i class="fa fa-clock-o spaceRight" aria-hidden="true"></i>' . $posted_on . '</span><span class="byline"><i class="fa fa-user spaceLeftRight" aria-hidden="true"></i>' . $byline . '</span>'; // WPCS: XSS OK.
	
	if ( ! post_password_required() && ( comments_open() || '0' != get_comments_number() ) ) {
		echo '<span class="comments-link"><i class="fa fa-comments-o spaceLeftRight" aria-hidden="true"></i>';
		comments_popup_link( esc_html__( 'Leave a comment', 'fortunato' ), esc_html__( '1 Comment', 'fortunato' ), esc_html__( '% Comments', 'fortunato' ) );
		echo '</span>';
	}

}
endif;

if ( ! function_exists( 'fortunato_entry_footer' ) ) :
function fortunato_entry_footer() {
	if ( 'post' == get_post_type() ) {
		/* translators: used between list items, there is a space after the comma */
		$tags_list = get_the_tag_list( '', esc_html__( ', ', 'fortunato' ) );
		if ( $tags_list ) {
			echo '<span class="tags-links"><i class="fa fa-tags spaceRight" aria-hidden="true"></i>' . $tags_list . '</span>';
		}
	}

	edit_post_link( esc_html__( 'Edit', 'fortunato' ), '<span class="edit-link"><i class="fa fa-wrench spaceRight" aria-hidden="true"></i>', '</span>' );
}
endif;

if ( ! function_exists( 'fortunato_single_category' ) ) :
function fortunato_single_category() {
	if ( 'post' == get_post_type() ) {
		$categories_list = get_the_category_list(' ');
		if ( $categories_list && fortunato_categorized_blog() ) {
			echo '<span class="cat-links smallPart">' . $categories_list . '</span>';
		}
	}
}
endif;

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function fortunato_categorized_blog() {
	$all_the_cool_cats = get_transient( 'fortunato_categories' );
	
	if ( false === $all_the_cool_cats ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories( array(
			'fields'     => 'ids',
			'hide_empty' => 1,
			// We only need to know if there is more than one category.
			'number'     => 2,
		) );

		// Count the number of categories that are attached to the posts.
		$all_the_cool_cats = count( $categories );

		set_transient( 'fortunato_categories', $all_the_cool_cats );
	}
	
	return $all_the_cool_cats > 1;
}

/**
 * Flush out the transients used in fortunato_categorized_blog.
 */
function fortunato_category_transient_flusher() {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	// Like, beat it. Dig?
	delete_transient( 'fortunato_categories' );
}
add_action( 'edit_category', 'fortunato_category_transient_flusher' );
add_action( 'save_post',     'fortunato_category_transient_flusher' );
