<?php
// Register Post thumbnails
add_theme_support( 'post-thumbnails' );

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
function as_pagination() {
    global $wp_query;
    $big = 999999999; // need an unlikely integer
    $pages = paginate_links( array(
        'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format' => '?paged=%#%',
        'current' => max( 1, get_query_var('paged') ),
        'total' => $wp_query->max_num_pages,
        'prev_next' => false,
        'type'  => 'array',
        'prev_next'   => TRUE,
        'prev_text' => __('« صفحه قبلی'),
        'next_text' => __('صفحه بعدی »')
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
function rashidnahal_files() {
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