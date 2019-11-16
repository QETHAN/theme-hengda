<?php
/*
 * Template Name: News详情页面模板
 * Template Post Type: post, page, product
 */
?>
<?php
  get_header(); 
 ?>
 <style>
 </style>
 
 <?php get_template_part("template_parts/top"); ?> 
 <div id="s-banner">
 <?php $cats = get_the_category(); ?>
  <img src="<?php echo z_taxonomy_image_url($cats[0]->cat_ID); ?>" alt="<?php echo single_cat_title();?>">
</div>
<div id="m-warp">
  <div class="s-middle">
    <div class="single-nav"><h1><?php the_title(); ?></h1></div>

    <div class="newsinfo">
    <?php if (have_posts()): ?>
    <?php while(have_posts()): the_post(); ?>
      <div style="padding-bottom:10px;">
          <span style="float:left; padding-right:20px; padding-top:6px;">Date: <?php the_time('Y-m-d'); ?></span>
          <span style="float:left; padding-right:20px;padding-top:6px;"><a href="JavaScript:window.print();" class="print">Print</a></span>
          <div class="clear"></div>
      </div>

      <?php the_content(); ?>
      <?php endwhile; ?>
    <?php endif; ?>
    
    </div>
		
  </div>
</div>
    </div>
<?php get_footer(); ?>