<div class="internal-banner relative py-[80px] md:py-[120px]">
    <div class="absolute w-full md:w-9/12 h-full top-0 left-0 z-0 <?= $attributes['background'] ? $attributes['background'] : 'bg-sage-green' ?>"></div>
    <div class="container relative z-10">
        <div class="flex flex-wrap">
            <div class="w-full md:w-8/12 flex items-center text-white internal-banner__content">
                <div class="mb-[24px] md:mb-0">
                    <div class="label-text"><?= $attributes['label'] ?></div>
                    <h1 class="title-text"><?= $attributes['heading'] ?></h1>
                </div>
            </div>
            <div class="w-full md:w-4/12 internal-banner__image">
                <div class="relative">
                <?php if ($attributes['image-bottom']['url']): ?>
                        <div class="image-bottom image-reveal">
                            <img src="<?= $attributes['image-bottom']['url'] ?>" alt="<?= $attributes['image-bottom']['alt'] ?>">
                        </div>
                    <?php endif; ?>
    
                    <?php if ($attributes['image-front']['url']): ?>
                        <div class="image-front image-reveal">
                            <img src="<?= $attributes['image-front']['url'] ?>" alt="<?= $attributes['image-front']['alt'] ?>">
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</div>