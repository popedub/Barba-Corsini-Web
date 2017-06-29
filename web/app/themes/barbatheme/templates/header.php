<header class="banner sticky-top">
  <div class="container-fluid d-flex justify-content-between">
      <div id="nav-icon">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
      </div>
      <a class="brand display-4" href="<?= esc_url(home_url('/')); ?>"><?php bloginfo('name'); ?></a>
      <div class="der"> lorem </div>
  </div>
  <div class="container d-flex justify-content-around">
    <nav id="nav-primary-id" class="nav-primary menu-horizontal  menu-push">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav nav-pills nav-fill']);
      endif;
      ?>
    </nav>
    
  </div>
</header>
