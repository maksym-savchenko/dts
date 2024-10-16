<?php if(($title || $image || $text || $link) && !$hide_section): ?>
  <div class="<?php echo e($block->classes); ?> md:my-[110px] my-55" <?php echo e(isset($block->block->anchor) ? 'id=' . $block->block->anchor : ''); ?>>
    <div class="container">
      <div class="flex flex-col-reverse items-center lg:gap-70 gap-30 md:flex-row">
        <div class="md:w-1/2 aspect-577/515 overflow-hidden rounded-5 max-w-[577px]">
          <?php if($image): ?>
            <img class="w-full h-full object-cover" src="<?php echo e($image['url']); ?>" alt="column-image" width="<?php echo e($image['sizes']['large-width']); ?>" height="<?php echo e($image['sizes']['large-height']); ?>">
          <?php endif; ?>
        </div>
        <?php if($title || $text || $link ): ?>
          <div class="md:w-1/2">
            <?php if($title): ?>
              <h2 class="leading-[1.25] lg:text-48 md:text-36 sm:text-32 text-26 mb-30 uppercase font-extrabold text-yellow-550"><?php echo e($title); ?></h2>
            <?php endif; ?>
            <?php if($text): ?>
              <div><?php echo $text; ?></div>
            <?php endif; ?>
              <?php if($link): ?>
                <a href="<?php echo e($link['url']); ?>" class="btn btn--yellow mt-15" title="<?php echo e($link['title'] ?: ''); ?>" <?php echo e(['target'] ? 'target="' . $link['target'] . '"' : ''); ?>><?php echo e($link['title'] ?: ''); ?></a>
              <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
<?php endif; ?>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/blocks/image-text-column.blade.php ENDPATH**/ ?>