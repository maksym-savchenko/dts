<?php if($title || $description || $items): ?>
  <div class="<?php echo e($block->classes); ?> md:my-[110px] my-55" <?php echo e(isset($block->block->anchor) ? 'id="' . $block->block->anchor . '"' : ''); ?>>
    <div class="container">
      <?php if($title): ?>
        <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32  text-26 uppercase font-extrabold text-yellow-550 lg:mb-64 mb-32 mb-20"><?php echo e($title); ?></h2>
      <?php endif; ?>
      <?php if($description): ?>
        <div class="text-center [&_br]:max-sm:hidden"><?php echo $description; ?></div>
      <?php endif; ?>
        <?php if($items): ?>
          <div class="grid lg:grid-cols-3 md:grid-cols-2 grid-cols-1 gap-30 lg:mt-60 md:mt-40 mt-20">
            <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <?php if($item['title'] || $item['$description']): ?> <?php endif; ?>
              <div class="p-40 bg-emerald-950 rounded-10">
                <?php if($item['title']): ?>
                  <h3 class="font-bold text-20 text-neutral-100 mb-20"><?php echo e($item['title']); ?></h3>
                <?php endif; ?>
                <?php if( $item['description']): ?>
                  <div class="opacity-70">
                    <?php echo $item['description']; ?>

                  </div>
                <?php endif; ?>
              </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/blocks/advantages.blade.php ENDPATH**/ ?>