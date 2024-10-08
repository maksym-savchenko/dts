<?php if($title || $description || $link): ?>
  <div class="<?php echo e($block->classes); ?> md:mt-100 md:mb-82 mt-50 mb-41" <?php echo e(isset($block->block->anchor) ? 'id="' . $block->block->anchor . '"' : ''); ?>>
    <div class="container">
      <div class="rounded-10 bg-emerald-950 text-center lg:py-77 md:py-50 py-40 px-20">
        <?php if($title): ?>
          <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32  text-26 uppercase font-extrabold text-yellow-550 mb-15"><?php echo e($title); ?></h2>
        <?php endif; ?>
        <?php if($description): ?>
          <div class="text-center [&_br]:max-sm:hidden"><?php echo $description; ?></div>
        <?php endif; ?>
          <?php if($link): ?>
            <a href="<?php echo e($link['url']); ?>" class="btn btn--white lg:mt-45 mt-20" title="<?php echo e($link['title'] ?: ''); ?>" <?php echo e(['target'] ? 'target="' . $link['target'] . '"' : ''); ?>><?php echo e($link['title'] ?: ''); ?></a>
          <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/blocks/cta.blade.php ENDPATH**/ ?>