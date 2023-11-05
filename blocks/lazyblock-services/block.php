<?php
/**
 * 
 * Services
 * 
 * Variable
 * @var $heading;
 * @var $subheading;
 * @var $image;
 * 
 * Repeater
 * @var $services; => repeater
 * child :
 * @var $title;
 * @var $description;
 * @var $image;
 */
?>
<div class="services">
    <div class="services-heading py-[80px] md:py-[240px] bg-terracotta text-light-white">
        <div class="container">
            <div class="flex flex-wrap relative">
                <div class="w-full md:w-6/12 relative md:pr-10 mb-[24px] md:mb-0">
                    <div class="services__image">
                        <?php if ($attributes["image"]["url"]): ?>
                                <div class="image-wrapper w-full md:w-7/12 image-reveal" data-scroll data-scroll-speed="-1" data-scroll-delay="0.05">
                                    <img src="<?= $attributes['image']['url'] ?>" alt="<?= $attributes['image']['alt'] ?>">
                                </div>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="w-full md:w-6/12 md:pl-14 ">
                    <div class="flex items-center">
                        <div class="">
                            <h2 class="mb-[16px]"><?= $attributes['heading'] ?></h2>
                            <div class="subtitle-text"><?= $attributes['subheading'] ?></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="py-[60px]">
        <?php foreach ($attributes['services'] as $service): ?>
            <div class="flex flex-wrap services__item md:mb-0 mb-[32px]">
                <div class="w-full md:w-6/12 flex items-center services__item--content">
                    <div class="w-full md:w-10/12">
                        <h4 class="mb-[16px] md:mb-[24px] text-warm-brown"><?= $service['title'] ?></h4>
                        <div class="text-base"><?= $service['description'] ?></div>
                    </div>
                </div>
                <div class="w-full flex md:w-6/12 services__item--image--wrapper mb-[24px] md:mb-0">
                    <?php if ($service['image']['url']): ?>
                        <div class="services__item--image image-reveal">
                            <img src="<?= $service['image']['url'] ?>" alt="<?= $service['image']['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    </div>
</div>