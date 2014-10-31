<?php
/**
 * Plugin Name: Excerpt
 * Description: Excerpt with settings on per-function basis.
 */

/**
 * Excerpt with custom length, more link and possibly content
 *
 * @param int $length The length of the excerpt (in words)
 * @param int $more The more text in case there's more to read
 * @param int $content Custom content you may want to shorten
 */
function tp_the_excerpt( $length = 55, $more = '&hellip;', $content = '' ) {
	$func = array();
	
	$func['more'] = create_function( '', 'return "' . $more . '";' );
	add_filter( 'excerpt_more', $func['more'] );
	
	$func['length'] = create_function( '', 'return ' . $length . ';' );
	add_filter( 'excerpt_length', $func['length'] );
	
	if( $content ) 
		$excerpt = wp_trim_words( $content, $length, $more );
	else
		$excerpt = get_the_excerpt();
	
	remove_filter( 'excerpt_more', $func['more'] );
	remove_filter( 'excerpt_length', $func['length'] );
	
	echo $excerpt;
}
