<?php
  $options = get_fields('options');
  $title = $options['404_title'] ?: __('404', 'sage');
  $subtitle = $options['404_subtitle'] ?: __('Сторінка не знайдена', 'sage');
  $text = $options['404_description'] ?: __('На жаль, сторінка, яку ви шукаєте, не існує. Можливо, вона була видалена, переміщена або посилання було введене неправильно.', 'sage');
?>



<?php $__env->startSection('content'); ?>
  <div class="container">
    <div class="mt-32 mb-48 rounded-20 py-83 px-30 bg-emerald-950 text-center">
      <h1 class="lg:text-[160px] sm:text-[120px] text-[80px] font-extrabold uppercase text-yellow-550 leading-[1]"><?php echo e($title); ?></h1>
      <h2 class="lg:text-48 sm:text-36 text-30 font-extrabold uppercase text-yellow-550 leading-[1.25] mt-20"><?php echo e($subtitle); ?></h2>
      <p class="max-w-[720px] mt-28 mx-auto"><?php echo $text; ?></p>
      <a href="<?php echo e(home_url('/')); ?>" title="<?php echo e(get_bloginfo('name')); ?>" class="btn btn--yellow lg:mt-45 mt-20"><?php echo e(__('На головну', 'sage')); ?></a>

    </div>
  </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/404.blade.php ENDPATH**/ ?>