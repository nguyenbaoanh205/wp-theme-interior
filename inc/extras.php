<?php
/**
 * Register widget area.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_sidebar
 */
function itc_theme_widgets_init() {
	register_sidebar( array(
		'name'          => __( 'Right Sidebar', 'itcthemes' ),
		'id'            => 'primary-sidebar',
		'description'   => __( 'This is the right sidebar if you are using a two or three column site layout option. KeyWord:primary-sidebar', 'itcthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	register_sidebar( array(
		'name'          => __( 'Left Sidebar', 'itcthemes' ),
		'id'            => 'secondary-sidebar',
		'description'   => __( 'This is the left sidebar if you are using a two or three column site layout option. KeyWord:secondary-sidebar', 'itcthemes' ),
		'before_widget' => '<aside id="%1$s" class="widget %2$s">',
		'after_widget'  => '</aside>',
		'before_title'  => '<h3 class="widget-title">',
		'after_title'   => '</h3>',
	) );

	for ( $i = 1; $i <= 3; $i++ ) {
		register_sidebar( array(
			'name'          => sprintf( __( 'Bottom %s', 'itcthemes' ), $i ),
			'id'            => 'bottom-' . $i,
			'description'   => sprintf( __( 'Bottom sidebar number %s, used in the header area.', 'itcthemes' ), $i ),
			'before_widget' => '<div id="%1$s" class="widget-base %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h4 class="widget-title">',
			'after_title'   => '</h4>',
		) );
	}

	register_sidebar( array(
		'name'          => sprintf( __( 'Social', 'itcthemes' )),
		'id'            => 'socialacf',
		'description'   => sprintf( __( 'Social, used in the header area. KeyWord:socialacf', 'itcthemes' ) ),
		'before_widget' => '',
		'after_widget'  => '',
		'before_title'  => '',
		'after_title'   => '',
	) );
}
add_action( 'widgets_init', 'itc_theme_widgets_init' );


/**
 * Add class boostrap in main content
 *
 */
if ( ! function_exists( 'main_bootstrap_class' ) ) :
	function main_bootstrap_class() {
		$sidebar_width = get_field( 'acf_sidebar_width', 'option' );
		$page_layout = get_field( 'acf_page_layout', 'option' );
		if( !$sidebar_width ) {
			$sidebar_width = 4;
		}

		if( $page_layout == 'left-main-right' ) {
			$classes = 12 - ($sidebar_width*2);
		} else {
			$classes = 12 - $sidebar_width;
		}

		$classes = 'col-md-' . $classes;

		return $classes;
	}
endif;


/**
 * Display navigation to next/previous set of posts when applicable.
 *
 * @since  1.0
 * @return array
 */
if ( ! function_exists( 'itcthemes_pagination' ) ) :
	function itcthemes_pagination( $nav_query = false ) {

		global $wp_query, $wp_rewrite;

		// Don't print empty markup if there's only one page.
		if ( $GLOBALS['wp_query']->max_num_pages < 2 ) {
			return;
		}

		// Prepare variables
		$query        = $nav_query ? $nav_query : $wp_query;
		$max          = $query->max_num_pages;
		$current_page = max( 1, get_query_var( 'paged' ) );
		$big          = 999999;

		?>
		<div class="page-navigation clearfix" role="navigation">
			<nav class="page-nav">
				<?php
				echo '' . paginate_links(
					array(
						'base'      => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
						'format'    => '?paged=%#%',
						'current'   => $current_page,
						'total'     => $max,
						'type'      => 'plain',
						'prev_text' => '<i class="fa fa-angle-left"></i>',
						'next_text' => '<i class="fa fa-angle-right"></i>'
					)
				) . ' ';
				?>
			</nav><!-- .page-nav -->
		</div><!-- .page-navigation -->
		<?php
	}
endif;

/**
 * Prints HTML with meta information for the current post-date/time, author, categories and comments.
 *
 * @since  1.0
 * @return array
 */
if ( ! function_exists( 'itc_post_meta' ) ) :
	function itc_post_meta() {
	?>
	<div class="post-meta">
			<span class="post-date"><i class="fa fa-calendar"></i> <?php the_date( 'd/m/Y' ); ?></span>
			<span class="post-cat"><i class="fa fa-folder"></i> 
				<?php 
					$categories_list = get_the_category_list( __( ', ', 'itcthemes' ) );
					if ( $categories_list ) :
						printf( __( '%1$s', 'itcthemes' ), $categories_list );
					endif;
				?>
			</span>
		</div>
	<?php

	}
endif;

/**
 * Print URL image with params by BFI thumb
 *
 * @since  1.0
 * @return string (url)
 */
function get_BFI_thumbnail( $att, $width, $height, $classes ) {
	global $post;
	if( is_numeric( $att ) == true ) {
		$att_id = $att;
	} else {
		$att_id = get_post_thumbnail_id( $post->ID );
	}
	if( $classes ) {
		$classes = $classes;
	} else {
		$classes = '';
	}
	$params = array( 'width' => $width, 'height' => $height );
	$url = wp_get_attachment_image_src($att_id, 'full');
	$image = bfi_thumb( $url[0], $params );
	$alt = basename($image);
	return '<img class="bfi_thumb' . $classes . '" src="' . $image . '" alt="' . $alt . '" />';
}

function get_BFI_thumbnail_url( $att, $width, $height) {
	global $post;
	if( is_numeric( $att ) == true ) {
		$att_id = $att;
	} else {
		$att_id = get_post_thumbnail_id( $post->ID );
	}
	if( $classes ) {
		$classes = $classes;
	} else {
		$classes = '';
	}
	$params = array( 'width' => $width, 'height' => $height );
	$url = wp_get_attachment_image_src($att_id, 'full');
	$image = bfi_thumb( $url[0], $params );
	return $image;
}
?>