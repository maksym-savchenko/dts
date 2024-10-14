<?php if($title || $desciption || $items): ?>
  <div class="<?php echo e($block->classes); ?> md:mt-110 md:mt-85 mt-55 mb-41" <?php echo e(isset($block->block->anchor) ? 'id=' . $block->block->anchor : ''); ?>>
    <div class="container">
      <?php if($title): ?>
        <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32 text-26 uppercase font-extrabold text-yellow-550 lg:mb-35 mb-32"><?php echo e($title); ?></h2>
      <?php endif; ?>
        <?php if($description): ?>
          <div class="text-center [&_br]:max-sm:hidden"><?php echo $description; ?></div>
        <?php endif; ?>
        <?php if($items): ?>
          <div class="mt-35 p-30 bg-emerald-950 rounded-10">
            <?php if($sub_title): ?>
              <h3 class="text-20 uppercase text-yellow-550 font-bold mb-25"><?php echo e($sub_title); ?></h3>
            <?php endif; ?>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-x-40 gap-y-15 vacancies-wrapper">
              <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-green-950 relative group rounded-10 py-10 px-14 flex justify-between gap-10 items-center cursor-pointer vacancies-item <?php echo e($index > 17 ? 'hidden' : ''); ?>">
                  <span class="inline-flex sm:w-auto w-full"><?php echo e($item['vacancy']); ?></span>
                  <?php if($button): ?>
                    <a href="<?php echo e($button['url']); ?>" class="btn btn--yellow btn--small opacity-0 group-hover:opacity-100 transition-opacity max-sm:hidden flex-shrink-0" title="<?php echo e($button['title'] ?: ''); ?>" data-vacancy="<?php echo e($item['vacancy']); ?>" <?php echo e(['target'] ? 'target="' . $button['target'] . '"' : ''); ?>><?php echo e($button['title'] ?: ''); ?></a>
                    <a href="<?php echo e($button['url']); ?>" class="opacity-0 absolute sm:hidden left-0 top-0 w-full h-full" title="<?php echo e($button['title'] ?: ''); ?>" data-vacancy="<?php echo e($item['vacancy']); ?>" <?php echo e(['target'] ? 'target="' . $button['target'] . '"' : ''); ?>><?php echo e($button['title'] ?: ''); ?></a>
                  <?php endif; ?>
                </div>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
            <?php if(count($items) > 18): ?>
              <button class="btn btn--white vacancies-btn lg:mt-48 mt-35 flex mb-15 mx-auto">
                <?php echo e($button_label ?: __('Завантажити ще', 'sage')); ?>

              </button>
            <?php endif; ?>
          </div>
        <?php else: ?>
        <?php endif; ?>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/blocks/vacancies.blade.php ENDPATH**/ ?>