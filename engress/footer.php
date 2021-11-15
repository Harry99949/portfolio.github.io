<div class="footer-color">
  <div class="footer-inner">
    <div class="footer-left">
      <?php
      if (has_nav_menu('nav')) {
        $mainMenu = array(
          'theme_location' => 'nav',
          'menu_id' => 'nav',
          'menu_class' => 'menu',
          'container' => false,
          'link_before' => '<span>',
          'link_after' => '</span>',
          'depth' => 0,
        );
        wp_nav_menu($mainMenu);
      };
      ?>
    </div>
    <div class="footer-right">
      <a href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo esc_url(get_theme_file_uri("img/logo1.jpg")); ?>" alt="logo" /></a>
      <div class="open-time">
        <div class="phone-number">
          <img src="<?php bloginfo("template_url") ?>/img/Path 16.png" alt="logo" />
          <p>0123-456-7890</p>
        </div>
        <div class="time">
          <p>平日08:00～20:00</p>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="copyright">
  <p><small>Copyright &copy;v2020 Engress.</small></p>
</div>
<?php wp_footer(); ?>