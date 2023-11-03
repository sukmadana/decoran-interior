<?php
/**
 * Portfolio
 * 
 * @var $heading;
 * @var $description;
 * @var $button;
 * 
 * @var $image-main
 * @var $image-second
 * @var $image-third
 */
?>

<div class="portfolio py-[240px]">
    <div class="container">
        <div class="flex flex-wrap">
            <div class="w-full md:w-6/12 flex order-2 md:order-1 py-[120px]">
                <div class="w-full md:w-10/12">
                    <h2 class="mb-[32px] text-warm-brown"><?= $attributes['heading']?></h2>
                    <div class="mb-[58px] subtitle-text text-dark-grey"><?= $attributes['description'] ?></div>
                    <a href="<?= $attributes['button'] ?>" class="btn btn-outline-brown">View More</a>
                </div>
            </div>
            <div class="w-full md:w-6/12 flex order-1 md:order-2">
                <div class="portfolio__image">
                    <?php if ($attributes['image-main']['url']): ?>
                        <div class="image-main image-reveal" data-scroll data-scroll-speed="-1" data-scroll-delay="0.03">
                            <img src="<?= $attributes['image-main']['url'] ?>" alt="<?= $attributes['image-main']['alt'] ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ($attributes['image-second']['url']): ?>
                        <div class="image-second image-reveal" data-scroll data-scroll-speed="1" data-scroll-delay="0.03">
                            <img src="<?= $attributes['image-second']['url'] ?>" alt="<?= $attributes['image-second']['alt'] ?>">
                        </div>
                    <?php endif; ?>

                    <?php if ($attributes['image-third']['url']): ?>
                        <div class="image-third image-reveal" data-scroll data-scroll-speed="3" data-scroll-delay="0.03">
                            <img src="<?= $attributes['image-third']['url'] ?>" alt="<?= $attributes['image-third']['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>