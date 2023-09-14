<?php
// Register Title tag
add_theme_support( "title-tag" );

// Register Automatic feed links
add_theme_support( 'automatic-feed-links' );

// Register Post thumbnails
add_theme_support( 'post-thumbnails' );

// Register Custom background color.
add_theme_support(
	'custom-background',
	array(
		'default-color' => 'd1e4dd',
	)
);

// Editor color palette.
$black     = '#000000';
$dark_gray = '#28303D';
$gray      = '#39414D';
$green     = '#D1E4DD';
$blue      = '#D1DFE4';
$purple    = '#D1D1E4';
$red       = '#E4D1D1';
$orange    = '#E4DAD1';
$yellow    = '#EEEADD';
$white     = '#FFFFFF';

add_theme_support(
	'editor-color-palette',
	array(
		array(
			'name'  => esc_html__( 'Black', 'rashidnahal' ),
			'slug'  => 'black',
			'color' => $black,
		),
		array(
			'name'  => esc_html__( 'Dark gray', 'rashidnahal' ),
			'slug'  => 'dark-gray',
			'color' => $dark_gray,
		),
		array(
			'name'  => esc_html__( 'Gray', 'rashidnahal' ),
			'slug'  => 'gray',
			'color' => $gray,
		),
		array(
			'name'  => esc_html__( 'Green', 'rashidnahal' ),
			'slug'  => 'green',
			'color' => $green,
		),
		array(
			'name'  => esc_html__( 'Blue', 'rashidnahal' ),
			'slug'  => 'blue',
			'color' => $blue,
		),
		array(
			'name'  => esc_html__( 'Purple', 'rashidnahal' ),
			'slug'  => 'purple',
			'color' => $purple,
		),
		array(
			'name'  => esc_html__( 'Red', 'rashidnahal' ),
			'slug'  => 'red',
			'color' => $red,
		),
		array(
			'name'  => esc_html__( 'Orange', 'rashidnahal' ),
			'slug'  => 'orange',
			'color' => $orange,
		),
		array(
			'name'  => esc_html__( 'Yellow', 'rashidnahal' ),
			'slug'  => 'yellow',
			'color' => $yellow,
		),
		array(
			'name'  => esc_html__( 'White', 'rashidnahal' ),
			'slug'  => 'white',
			'color' => $white,
		),
	)
);

add_theme_support(
	'editor-gradient-presets',
	array(
		array(
			'name'     => esc_html__( 'Purple to yellow', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $yellow . ' 100%)',
			'slug'     => 'purple-to-yellow',
		),
		array(
			'name'     => esc_html__( 'Yellow to purple', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $purple . ' 100%)',
			'slug'     => 'yellow-to-purple',
		),
		array(
			'name'     => esc_html__( 'Green to yellow', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $green . ' 0%, ' . $yellow . ' 100%)',
			'slug'     => 'green-to-yellow',
		),
		array(
			'name'     => esc_html__( 'Yellow to green', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $green . ' 100%)',
			'slug'     => 'yellow-to-green',
		),
		array(
			'name'     => esc_html__( 'Red to yellow', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $yellow . ' 100%)',
			'slug'     => 'red-to-yellow',
		),
		array(
			'name'     => esc_html__( 'Yellow to red', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $yellow . ' 0%, ' . $red . ' 100%)',
			'slug'     => 'yellow-to-red',
		),
		array(
			'name'     => esc_html__( 'Purple to red', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $purple . ' 0%, ' . $red . ' 100%)',
			'slug'     => 'purple-to-red',
		),
		array(
			'name'     => esc_html__( 'Red to purple', 'rashidnahal' ),
			'gradient' => 'linear-gradient(160deg, ' . $red . ' 0%, ' . $purple . ' 100%)',
			'slug'     => 'red-to-purple',
		),
	)
);

// Register Post Views
function setAndViewPostViews( $postID ) {
    $count_key = 'views';
    $count = get_post_meta( $postID, $count_key, true );
    if ( $count == '' ) {
        $count = 0;
        delete_post_meta( $postID, $count_key );
        add_post_meta( $postID, $count_key, '0' );
    } else {
        $count++;
        update_post_meta( $postID, $count_key, $count );
    }
    return $count;
}

// Add Pagination with bootstrap class
function as_pagination(): void {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'type'  => 'array',
        'prev_next'   => true,
        'prev_text' => esc_html__( '« صفحه قبلی', 'rashidnahal' ),
        'next_text' => esc_html__( 'صفحه بعدی »', 'rashidnahal' )
    ) );
    if( is_array( $pages ) ) {
        $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
        echo '<nav aria-label="Page navigation">';
        echo '<ul class="pagination justify-content-center page-item">';
        foreach ( $pages as $page ) {
            echo "<li class=\"page-item\">$page</li>";
        }
        echo '</ul>';
        echo '</div>';
    }
}

// Register All CSS and JS Files
function rashidnahal_files(): void {
    wp_enqueue_script('rn_mainjs_min', get_stylesheet_directory_uri() . '/assets/main.js', NULL, '', true);
    //add async attribute to the <script> and delete type from it
    add_filter( 'script_loader_tag', 'main_js', 10, 3 );
    function main_js( $tag, $handle, $src ) {
        if ( $handle !== 'rn_mainjs_min' ) {return $tag;}
        return "<script src='$src'></script>";
    }
	wp_enqueue_style('rn_bootstrap_min', get_theme_file_uri('/assets/font-awesome.min.css'), NULL, '4.7.0');
    wp_enqueue_style('rn-style', get_stylesheet_uri());
    wp_enqueue_style('rn_darkmode', get_theme_file_uri('/assets/css/white-theme.css'), NULL, '');

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action('wp_enqueue_scripts', 'rashidnahal_files');