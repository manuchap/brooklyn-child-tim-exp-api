<?php
/**
 * Template Name: Hotels List
 */
?>

<?php
get_header('search-hotel'); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main" role="main">

      <h1>Hello Hotels List Template</h1>

      <div class="widget-area">
        <?php dynamic_sidebar( 'tim_exp_api_list_one' ); ?>
      </div>

      <div class="widget-area">
        <?php dynamic_sidebar( 'tim_exp_api_list_two' ); ?>
      </div>

    </main><!-- .site-main -->
  </div><!-- .content-area -->

<?php get_footer('search-hotel'); ?>
