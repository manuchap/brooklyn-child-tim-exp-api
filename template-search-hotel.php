<?php
/**
 * Template Name: Search Hotel
 */

$ut_page_skin = get_post_meta( $post->ID , 'ut_section_skin' , true);
$ut_page_class = get_post_meta( $post->ID , 'ut_section_class' , true);

get_header(); ?>
    
<div class="grid-container">
  
  <?php $grid = is_active_sidebar('page-widget-area') ? 'grid-75 tablet-grid-75 mobile-grid-100' : 'grid-100 tablet-grid-100 mobile-grid-100'; ?>
    
  <div id="primary" class="grid-parent <?php echo $grid; ?> <?php echo $ut_page_skin; ?> <?php echo $ut_page_class; ?>">
    
    <ul class="sidebar widget-area">
      <?php dynamic_sidebar( 'tim_exp_api_search_one' ); ?>
    </ul>

    <ul class="sidebar widget-area">
      <?php dynamic_sidebar( 'tim_exp_api_search_two' ); ?>
    </ul>

  </div><!-- close #primary -->
</div><!-- close grid-container -->
    
        
<?php get_footer(); ?>
