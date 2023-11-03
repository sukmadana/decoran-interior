<footer class="footer bg-terracotta text-light-white py-[120px]">
    <div class="container pb-[34px]">
        <div class="flex flex-wrap -mx-[15px]">
            <div class="w-full md:w-8/12 px-[15px]">
                <div>
                    <img src="<?=get_template_directory_uri()?>/assets/img/footer-logo.svg" alt="Decoran logo footer">
                </div>
            </div>
            <div class="w-full md:w-4/12 px-[15px]">
                <div>
                <?php 
                    wp_nav_menu( array( 
                        'theme_location' => 'footer_menu', 
                        'container_class' => 'footer-menu',
                        'menu_class' => 'footer-menu__nav'
                    ));
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="container py-[52px] border-t border-light-white">
        <div class="flex flex-wrap -mx-[15px] justify-between items-center">
            <div class="text-copy">
                <p>&copy; Copyright <?php echo date('Y'); ?>, Decoran Interior Design, Allright reserved.</p>
            </div>
            <?php 
                wp_nav_menu( array( 
                    'theme_location' => 'legal_menu', 
                    'container_class' => 'legal-menu',
                    'menu_class' => 'legal-menu__nav'
                ));
            ?>
        </div>
    </div>
</footer>