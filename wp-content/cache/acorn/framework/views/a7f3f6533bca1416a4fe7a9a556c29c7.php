<?php if($image || $title || $description || $link): ?>
  <div class="<?php echo e($block->classes); ?> xsm:min-h-[790px] py-[150px] relative flex justify-center items-center before:content-[''] before:h-full before:w-full before:absolute before:left-0 before:top-0 before:bg-custom-gradient before:z-[1]">
    <?php if($image): ?>
      <img src="<?php echo e($image['url']); ?>" alt="hero-image" width="<?php echo e($image['sizes']['1536x1536-width']); ?>" height="<?php echo e($image['sizes']['1536x1536-height']); ?>"
      class="absolute h-full w-full l-0 top-0 object-cover">
    <?php endif; ?>
    <?php if($title || $description || $link): ?>
        <div class="container min-h-full text-center">
          <div class="relative z-[1]">
            <?php if($title): ?>
              <h1 class="lg:text-66 lg:leading-[1.52] sm:text-40 text-28 leading:-[1.2] uppercase font-extrabold mb-15"><?php echo e($title); ?></h1>
            <?php endif; ?>
            <?php if($description): ?>
              <div class="font-medium lg:text-22 lg:leading-[1.46] leading-[1.3] -tracking-[0.5px] sm:text-18 text-14 opacity-80 [&_br]:max-sm:hidden">
                <?php echo $description; ?>

              </div>
            <?php endif; ?>
              <?php if($link): ?>
                <a href="<?php echo e($link['url']); ?>" class="btn btn--yellow lg:mt-45 mt-20" title="<?php echo e($link['title'] ?: ''); ?>" <?php echo e(['target'] ? 'target="' . $link['target'] . '"' : ''); ?>><?php echo e($link['title'] ?: ''); ?></a>
              <?php endif; ?>
          </div>
        </div>
    <?php endif; ?>
  </div>
<?php endif; ?>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/blocks/hero.blade.php ENDPATH**/ ?>