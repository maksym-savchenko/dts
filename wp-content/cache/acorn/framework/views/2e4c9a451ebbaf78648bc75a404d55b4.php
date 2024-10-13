<?php if((count($items) > 0 && isset($items[0]['answer']) && isset($items[0]['question'])) || $title): ?>
  <div class="<?php echo e($block->classes); ?> md:my-[110px] my-55" <?php echo e(isset($block->block->anchor) ? 'id="' . $block->block->anchor . '"' : ''); ?>>
    <div class="container">
      <?php if($title): ?>
        <h2 class="text-center leading-[1.25] lg:text-48 md:text-36 sm:text-32 text-26 uppercase font-extrabold text-yellow-550 lg:mb-64 mb-32"><?php echo e($title); ?></h2>
      <?php endif; ?>
      <div class="accordion flex flex-col gap-20">
        <?php $__currentLoopData = $items; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <?php if($item['question'] && ($item['answer'] || $item['link'])): ?>
            <div class="accordion-item">
              <p class="accordion-item__title"><?php echo e($item['question']); ?><span class="pointer-events-none"></span></p>
              <div class="accordion-item__text text-neutral-100 text-opacity-70">
                <div class="h-8"></div>
                <?php if($item['answer']): ?>
                  <?php echo $item['answer']; ?>

                <?php endif; ?>
                <?php if($item['link']): ?>
                  <a href="<?php echo e($item['link']['url']); ?>" class="btn btn--yellow mt-20" title="<?php echo e($item['link']['title'] ?: ''); ?>" <?php echo e(['target'] ? 'target="' . $item['link']['target'] . '"' : ''); ?>><?php echo e($item['link']['title'] ?: ''); ?></a>
                <?php endif; ?>
              </div>
            </div>
          <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/blocks/accordion.blade.php ENDPATH**/ ?>