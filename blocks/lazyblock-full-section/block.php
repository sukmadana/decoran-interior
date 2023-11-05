<?php 
/**
 * 
 * Full Sections
 * 
 * @var $heading
 * @var $sections
 * @var $background
 * 
 * sections child :
 * @var $title
 * @var $description
 * 
 */

?>

<div class="full-section bg-light-taupe">
    <?php foreach($attributes["sections"] as $section): ?>
        <div class="full-section__item py-[120px] relative z-10 h-screen text-light-white <?= $section['background']; ?>">
            <div class="container h-full flex items-center">
                <div class="flex flex-wrap">
                    <div class="w-full md:w-6/12 mb-[60px] md:mb-0 flex items-center">
                        <h2><?= $attributes['heading'] ?></h2>
                    </div>
                    <div class="w-full md:w-6/12 flex items-center justify-end">
                        <div class="w-full md:w-10/12">
                            <h4 class="mb-[24px]"><?= $section['title'] ?></h4>
                            <div class="subtitle-text"><?= $section['description'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php endforeach;   ?>
</div>