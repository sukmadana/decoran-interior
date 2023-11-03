<div class="menubar ">
    <div class="container h-full w-full">
        <div class="w-full h-full flex justify-end items-start md:items-center">
            <div class="menubar__inner w-full md:w-6/12">
            <?php 
                    wp_nav_menu( array( 
                        'theme_location' => 'header_menu', 
                        'container_class' => 'header-menu',
                        'menu_class' => 'header-menu__nav'
                    ));
                ?>
            </div>
        </div>
    </div>
</div>