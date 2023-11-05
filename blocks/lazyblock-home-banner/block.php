<?php
/**
 * Home Banner
 * 
 * Meta variable
 * @var $heading;
 * @var $description;
 * @var $bottom-image;
 * @var $front-image;
 * 
 */

?>

<div class="homepage-banner py-[60px] md:py-[120px] relative">
    <div class="absolute top-0 left-0 h-full w-full md:w-9/12 bg-sage-green z-0"></div>
    <div class="container relative z-10">
        <div class="flex flex-wrap">
            <div class="w-full mb-[32px] md:mb-0 md:w-7/12 text-light-white" data-scroll data-scroll-delay="0.03" data-scroll-speed="2" data-scroll-call="dynamicColor" data-scroll-repeat>
                <div class="text-anim-wrapper mb-[24px] md:mb-[42px] relative">
                    <h1 class="title-text  text-anim " ><?= $attributes['heading'] ?></h1>
                </div>
                <div class="relative">
                    <div class="subtitle-text"><?= $attributes['description'] ?></div>
                </div>
            </div>
            <div class="w-full md:w-5/12 md:pl-7 homepage-banner__image">
                <!-- Image 1 -->
                <?php if ( isset( $attributes['bottom-image']['url'] ) ) : ?>
                    <div class="image-bottom image-reveal" data-scroll data-scroll-delay="0.03" data-scroll-speed="2" data-scroll-call="dynamicColor" data-scroll-repeat>
                        <img src="<?= $attributes['bottom-image']['url'] ?>" alt="<?= $attributes['bottom-image']['alt'] ?>">
                    </div>
                <?php endif; ?>

                <!-- Image 2 -->
                <?php if ( isset( $attributes['front-image']['url'] ) ) : ?>
                    <div class="image-front image-reveal" data-scroll data-scroll-delay="0.05" data-scroll-speed="6" data-scroll-call="dynamicColor" data-scroll-repeat>
                        <img src="<?= $attributes['front-image']['url'] ?>" alt="<?= $attributes['front-image']['alt'] ?>">
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>