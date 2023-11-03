<?php
namespace MyTheme;

class CustomBlocks
{
    public function __construct()
    {
        // Uncomment to hide the lazyblock menu
        // add_filter( 'lzb/show_admin_menu', '__return_false' );

        $this->import_block();
    }

    public function import_block()
    {
        // Define the directory path of your theme
        $theme_directory = get_template_directory();

        // Specify the directory within your theme where the PHP files are located
        $php_files_directory = $theme_directory . '/app/CustomBlocks/';

        // Get a list of PHP files in the specified directory
        $php_files = glob($php_files_directory . '*.php');

        // Include each PHP file found in the directory
        foreach ($php_files as $php_file) {
            include $php_file;
        }
    }
}
