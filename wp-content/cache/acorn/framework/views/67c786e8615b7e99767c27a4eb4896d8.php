<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="lg:mt-[130px] mt-100 mb-84 rounded-20 py-70 px-30 bg-emerald-950 [&_p]:mb-20">
      <?php while(have_posts()): ?> <?php (the_post()); ?>
      <?php echo $__env->make('partials.page-header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('partials.content-page', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php endwhile; ?>
    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/template-custom.blade.php ENDPATH**/ ?>