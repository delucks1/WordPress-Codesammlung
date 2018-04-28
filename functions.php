//* 1. Remove query strings from static resources

function _remove_script_version( $src ){
$parts = explode( '?ver', $src );
return $parts[0];
}
add_filter( 'script_loader_src', '_remove_script_version', 15, 1 );
add_filter( 'style_loader_src', '_remove_script_version', 15, 1 );


//* 2. Remove WP emoji code

remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
remove_action( 'wp_print_styles', 'print_emoji_styles' );


//* 3. Remove WP embed script

function speed_stop_loading_wp_embed() {
if (!is_admin()) {
wp_deregister_script('wp-embed');
}
}
add_action('init', 'speed_stop_loading_wp_embed');


//* 4. Remove Gravatar

function __default_local_avatar()
{
    // this assumes default_avatar.png is in wp-content/themes/active-theme/images
    return get_bloginfo('template_directory') . '/images/default_avatar.png';
}
add_filter( 'pre_option_avatar_default', '__default_local_avatar' );


//* Replace WordPress feed through Feedburner
//* Please change the feedburner URL

function appthemes_custom_rss_feed( $output, $feed ) {
    if ( strpos( $output, 'comments' ) )
        return $output;

    return esc_url( 'http://feeds.feedburner.com/yourfeedname' );
}
add_action( 'feed_link', 'appthemes_custom_rss_feed', 10, 2 );
add_filter( 'feed_links_show_comments_feed', '__return_false' ); // Comment feeds removed
remove_action( 'wp_head', 'feed_links_extra', 3 ); // Extra feeds such as category feeds removed
