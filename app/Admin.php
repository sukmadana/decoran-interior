<?php 
namespace MyTheme;

class Admin {
    public function __construct(){
        add_action( 'wp_before_admin_bar_render', [$this, 'remove_wp_logo_bar'], 0 );
        add_filter( 'admin_footer_text', '__return_empty_string', 11 );
        add_filter( 'update_footer',     '__return_empty_string', 11 );
        

        // Uncomment to hide the lazyblock menu
        // add_filter( 'lzb/show_admin_menu', '__return_false' );
    }

    public function remove_wp_logo_bar() {
        global $wp_admin_bar;
        $wp_admin_bar->remove_menu( 'wp-logo' );
    }
}