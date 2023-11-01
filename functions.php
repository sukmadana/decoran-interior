<?php
define( 'DISALLOW_FILE_EDIT', true );
define('DISALLOW_FILE_MODS', true);

use MyTheme\AutoLoader;
use MyTheme\View;
use MyTheme\Admin;

use MyTheme\CustomPostTypes;
use MyTheme\CustomTaxonomies;
use MyTheme\Menus;

/*
 * Set up our auto loading class and mapping our namespace to the app directory.
 *
 * The autoloader follows PSR4 autoloading standards so, provided StudlyCaps are used for class, file, and directory
 * names, any class placed within the app directory will be autoloaded.
 *
 * i.e; If a class named SomeClass is stored in app/SomeDir/SomeClass.php, there is no need to include/require that file
 * as the autoloader will handle that for you.
 */
require get_stylesheet_directory() . '/app/AutoLoader.php';
$loader = new AutoLoader();
$loader->register();
$loader->addNamespace('MyTheme', get_stylesheet_directory() . '/app');

View::$view_dir = get_stylesheet_directory() . '/templates/views';

require get_stylesheet_directory() . '/includes/scripts-and-styles.php';

new Admin;

CustomPostTypes::register();
CustomTaxonomies::register();
Menus::register();

if (!function_exists('lazyblocks')) {
    // Define path and URL to the LZB plugin.
    $my_lzb_path = get_stylesheet_directory() . '/inc/lzb/';
    $my_lzb_url = get_stylesheet_directory_uri() . '/inc/lzb/';

    // Include the LZB plugin.
    require_once $my_lzb_path . 'lazy-blocks.php';

    lazyblocks()->include_within($my_lzb_url);
}