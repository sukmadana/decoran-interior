<div class="service-block relative py-[80px] md:py-[120px]">
    <div class="absolute top-0 left-0 w-full h-1/2 bg-light-taupe z-0"></div>
    <div class="container relative z-10">
        <div class="w-full">
            <?php foreach($attributes['services'] as $service): ?>
            <div class="service-block__item mb-[32px] md:mb-0 w-full md:w-6/12 " data-scroll data-scroll-delay="0.03" data-scroll-speed="2" data-scroll-call="dynamicColor" data-scroll-repeat>
                <div class="service-block__item--image">
                    <?php if($service['image']['url']):?>
                        <div class="image-wrapper image-reveal">
                            <img src="<?= $service['image']['url'] ?>" alt="<?= $service['image']['alt'] ?>">
                        </div>
                    <?php endif;?>
                </div>
                <div class="service-block__content md:pl-10">
                    <div class="label-text"><?= $service['label'] ?></div>
                    <h2 class="mb-[24px] text-dark-grey md:mb-[32px]"><?= $service['title'] ?></h2>
                    <div class="text-dark-grey">
                        <?= $service['description'] ?>
                    </div>
                </div>
            </div>
            <?php endforeach;?>
        </div>
    </div>
</div>