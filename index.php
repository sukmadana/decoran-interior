<?php

get_header(); ?>
<div class="smooth-scroll">
    <?= the_content(); ?>
    <?php get_template_part("templates/partials/footer"); ?>
</div>
<?php get_template_part("templates/partials/menubar"); ?>
<?php
get_footer(); 
?>
