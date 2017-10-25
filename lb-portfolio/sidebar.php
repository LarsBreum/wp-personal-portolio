<aside class="wrap-sidebar col col-md-3">
  <?php if ( is_active_sidebar( 'sidebar-main' ) ) { ?>
    <div id="secondary" class="widget-area" role="complementary">
      <?php dynamic_sidebar( 'sidebar-main' ); ?>
    </div>
  <?php } ?>
</aside>
