<?php
  $options = get_fields('options');
  $custom_logo_id = get_theme_mod('custom_logo');
  $link = $options['header_link'] ?: '';
  $phone = $options['header_phone'] ? : '';
  $logo = wp_get_attachment_image($custom_logo_id, 'medium');
//  str_replace(' ', '', $contact['contact'])
?>

<header class="header">
  <div class="header-overlay transition-opacity duration-400 xlg:hidden fixed left-0 top-0 right-0 bottom-0 bg-black opacity-0 pointer-events-none touch-none"></div>
  <div class="container">
    <div class="header-wrapper">
      <a class="brand transition-none text-white" href="<?php echo e(home_url('/')); ?>">
        <?php echo $logo; ?> <?php echo $siteName; ?>

      </a>
      <button id="menu-toggle" class="menu-toggle xlg:hidden fixed top-26 h-24 w-24 right-15 z-10 p-5 flex items-center justify-center">
        <span class="inline-block h-1 w-14 bg-yellow-550 absolute left-1/2 -translate-x-1/2 top-8 transition-opacity duration-300"></span>
        <span class="inline-block h-1 w-14 bg-yellow-550 absolute left-1/2 -translate-x-1/2 duration-500 transition-transform"></span>
        <span class="inline-block h-1 w-14 bg-yellow-550 absolute left-1/2 -translate-x-1/2 duration-500 transition-transform"></span>
        <span class="inline-block h-1 w-14 bg-yellow-550 absolute left-1/2 -translate-x-1/2 top-16 transition-opacity duration-300"></span>
      </button>
      <div class="header-nav no-scrollbar">
        <?php if(has_nav_menu('primary_navigation')): ?>
          <nav class="nav-primary" aria-label="<?php echo e(wp_get_nav_menu_name('primary_navigation')); ?>">
            <?php echo wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav', 'echo' => false]); ?>

          </nav>
        <?php endif; ?>
        <?php if($phone || $link): ?>
            <div class="flex gap-30 max-xlg:flex-col xlg:items-center max-xlg:w-full">
              <?php if($phone): ?>
                <a class="text-yellow-550 transition-colors duration-300 hover:text-white" href="tel:<?php echo e(str_replace(' ', '', $phone)); ?>"> <?php echo e($phone); ?></a>
              <?php endif; ?>
              <?php if($link): ?>
                <a href="<?php echo e($link['url']); ?>" class="btn btn--yellow xsm:min-w-[200px] min-h-[50px] p-10" title="<?php echo e($link['title'] ?: ''); ?>" <?php echo e(['target'] ? 'target="' . $link['target'] . '"' : ''); ?>><?php echo e($link['title'] ?: ''); ?></a>
              <?php endif; ?>
            </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
<?php /**PATH /Users/maksym/Local Sites/donbas/app/public/wp-content/themes/bspd/resources/views/sections/header.blade.php ENDPATH**/ ?>