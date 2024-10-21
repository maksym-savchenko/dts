<?php $options = get_fields('options');
$contacts_title = $options['contacts_title'] ?: '';
$contacts = $options['contacts'] ?: '';
$messengers_title = $options['messengers_title'] ?: '';
$messengers = $options['messengers'] ?: '';
$social_title = $options['social_title'] ?: '';
$socials = $options['socials'] ?: '';
$copyright = $options['copyright'] ?: '';
$custom_logo_id = get_theme_mod('custom_logo');
$logo = wp_get_attachment_image($custom_logo_id, 'medium');
if ($copyright) {
  $copyright = str_replace('@year', date('Y'), $copyright);
}
?>

 <footer class="site-footer bg-emerald-950" id="site-footer">
  <?php if($contacts_title || $contacts || $messengers_title || $messengers || $social_title || $socials): ?>
    <div class="container">
      <div class="md:pt-51 pt-63 md:pb-43 mb-26 flex gap-30 justify-between flex-wrap">
        <?php if($logo): ?>
          <a href="<?php echo e(home_url('/')); ?>" title="<?php echo e(get_bloginfo('name')); ?>" class="block max-w-[106px] h-auto"><?php echo $logo; ?></a>
        <?php endif; ?>
        <?php if($messengers_title || $messengers): ?>
          <div class="max-xsm:w-full">
            <?php if( $messengers_title): ?>
              <p class="mb-10 sm:mb-30 font-bold">
                <?php echo $messengers_title; ?>

              </p>
            <?php endif; ?>
             <div class="flex items-center gap-15 flex-wrap">
               <?php if( $messengers): ?>
                 <?php $__currentLoopData = $messengers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $messenger): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                   <?php if($messenger['url'] && $messenger['icon']): ?>
                     <a href="<?php echo e($messenger['url']); ?>" target="_blank" title="social-link" class="flex justify-center items-center rounded-2 bg-yellow-550 w-30 h-30 transition-colors duration-300 hover:bg-white">
                       <img src="<?php echo e($messenger['icon']['url']); ?>" width="24" height="24" alt="social-icon" class="max-h-24">
                     </a>
                   <?php endif; ?>
                 <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
               <?php endif; ?>
             </div>
          </div>
        <?php endif; ?>
          <?php if($contacts_title || $contacts): ?>
            <div class="max-xsm:w-full">
              <?php if( $contacts_title): ?>
                <p class="mb-10 sm:mb-30 font-bold">
                  <?php echo $contacts_title; ?>

                </p>
              <?php endif; ?>
              <?php if( $contacts): ?>
                <ul class="list-none pl-0">
                  <?php $__currentLoopData = $contacts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $contact): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <?php if($contact['contact']): ?>
                      <li class="mb-15"><a class="flex items-center gap-10 hover:text-yellow-550 transition-colors" href="<?php echo e($contact['contact_type'] === 'phone' ? 'tel:' . str_replace(' ', '', $contact['contact']) : 'mailto:' . $contact['contact']); ?>">
                          <?php if($contact['contact_type'] === 'phone'): ?>
                            <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M14.7208 11.0087C13.7409 11.0087 12.7788 10.8554 11.8671 10.554C11.4203 10.4016 10.8711 10.5414 10.5984 10.8216L8.79879 12.1805C6.71175 11.0661 5.42618 9.78055 4.32733 7.70854L5.64587 5.95528C5.98844 5.61307 6.11131 5.11317 5.9641 4.64413C5.6615 3.72731 5.50779 2.76533 5.50779 1.78472C5.50783 1.07632 4.93169 0.5 4.22355 0.5H1.28428C0.576141 0.5 0 1.07632 0 1.78468C0 9.90433 6.60368 16.51 14.7208 16.51C15.429 16.51 16.0051 15.9337 16.0051 15.2253V12.2934C16.0051 11.585 15.4289 11.0087 14.7208 11.0087Z" fill="#FFEE00"/>
                            </svg>
                          <?php else: ?>
                            <svg width="19" height="14" viewBox="0 0 19 14" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <path d="M0.392303 1.54278C2.96897 3.5346 7.49021 7.03881 8.81907 8.13143C8.99745 8.2789 9.18879 8.35387 9.38742 8.35387C9.58565 8.35387 9.77665 8.2796 9.95464 8.13283C11.2846 7.03914 15.8059 3.5346 18.3826 1.54278C18.543 1.41901 18.5675 1.20146 18.4376 1.05014C18.1373 0.700483 17.6897 0.5 17.2099 0.5H1.56491C1.08518 0.5 0.637503 0.700484 0.337301 1.05018C0.207423 1.20146 0.231881 1.41901 0.392303 1.54278Z" fill="#FFEE00"/>
                              <path d="M18.5472 2.61922C18.4085 2.56031 18.2454 2.58086 18.1301 2.67083C15.2726 4.88191 11.6257 7.71605 10.4783 8.6598C9.83427 9.19043 8.94048 9.19043 8.29498 8.6591C7.07195 7.65326 2.97657 4.47538 0.643965 2.6708C0.527837 2.58083 0.364371 2.56098 0.226865 2.61919C0.0886267 2.67779 0 2.80401 0 2.94311V11.9214C0 12.709 0.701644 13.3494 1.56452 13.3494H17.2096C18.0724 13.3494 18.7741 12.709 18.7741 11.9214V2.94311C18.7741 2.80401 18.6854 2.67746 18.5472 2.61922Z" fill="#FFEE00"/>
                            </svg>

                          <?php endif; ?>
                          <?php echo e($contact['contact']); ?>

                        </a></li>
                    <?php endif; ?>
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </ul>
              <?php endif; ?>
            </div>
          <?php endif; ?>
            <div class="max-xsm:w-full">
              <?php if($social_title || $socials): ?>
                <?php if( $social_title): ?>
                  <p class="mb-10 sm:mb-30 font-bold">
                    <?php echo $social_title; ?>

                  </p>
                <?php endif; ?>
                <?php if( $socials): ?>
                  <div class="flex-wrap flex gap-15">
                    <?php $__currentLoopData = $socials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $social): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <?php if($social['socials_url'] && $social['icon']): ?>

                        <a href="<?php echo e($social['socials_url']); ?>" target="_blank" title="social-link" class="flex justify-center items-center rounded-2 bg-yellow-550 w-30 h-30 transition-colors duration-300 hover:bg-white">
                          <img src="<?php echo e($social['icon']['url']); ?>" width="24" height="24" alt="social-icon" class="max-h-24">
                        </a>
                      <?php endif; ?>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </div>
                <?php endif; ?>
              <?php endif; ?>
                <?php if(has_nav_menu('footer_navigation')): ?>
                  <nav class="nav-footer [&_ul]:list-none [&_ul]:pl-0 [&_ul]:mt-30 [&_ul]:text-18 [&_a]:underline [&_a]:text-yellow-550 hover:[&_a]:text-white hover:[&_a]:transition-colors" aria-label="<?php echo e(wp_get_nav_menu_name('footer_navigation')); ?>">
                    <?php echo wp_nav_menu(['theme_location' => 'footer_navigation', 'menu_class' => 'site-footer__nav', 'echo' => false, 'depth ' => 1]); ?>

                  </nav>
                <?php endif; ?>
            </div>
      </div>
    </div>
  <?php endif; ?>
  <?php if($copyright): ?>
      <div class="container">
        <div class="h-1 opacity-10 bg-gray-550"></div>
        <div class="text-14 leading-[1.2] text-gray-550 opacity-80 text-center py-30">
          <?php echo $copyright; ?>

        </div>
      </div>
  <?php endif; ?>
</footer>
<?php echo $__env->make('partials.form-popup', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/sections/footer.blade.php ENDPATH**/ ?>