<?php
  get_header(); 
 ?>
<style>
.hd-post h1 {
  font-size: 18px !important;
}
.hd-post strong {
  font-weight: 600;
  font-size: 16px;
}
.hd-post p {
  margin: 15px 0;
  font-size: 14px;
}
.hd-post img {
  max-width: 100%;
}
</style>
 
<?php get_template_part("template_parts/top"); ?> 
<div id="s-banner">
  <?php $cat = get_the_category(); ?>
  <img src="<?php echo z_taxonomy_image_url($cat[0]->term_id); ?>" alt="<?php echo single_cat_title();?>">
</div>
 
 <div id="m-warp" class="hd-post">
	<div class="s-middle">
        <div class="s-left" id="conLeft" style="height: 1060px;">
        <?php $cats = get_the_category(); ?>
        
            <?php $args = "child_of=" . $cats[0]->term_id . "&orderby=ID"; ?>
            <?php $categories = get_categories($args); ?>
            <ul>
            <?php foreach($categories as $cat): ?>
              <li><a href="<?php echo get_category_link($cat->cat_ID); ?>" class="arrow"><?php echo $cat->name; ?></a></li>
            <?php endforeach; ?>
            <li class="conLeftLast"> </li>
          </ul>
          <div class="clear"></div>
        </div>
        <?php if ( have_posts() ): ?>
          <?php while ( have_posts() ): the_post(); ?>
            <div class="s-right" id="conRight">
              <div class="rightTitle">
                <span class="guide">
                  <a href="<?php echo home_url(); ?>">Home</a> » <a href="<?php echo get_category_link(get_the_category()[0]->cat_ID); ?>"><?php echo ucwords(strtolower(get_the_category()[0]->cat_name)); ?></a> »  <?php the_title();?> 
                </span>
                  <h1><?php the_title(); ?></h1>
                </div>
                
                <!--[if lte IE 10]>
                <style>
                #m-warp .s-middle .s-right .rightMain{ width:78%; margin-right:1%;}
                #m-warp .s-middle .s-right .rightContact{ width:21%; }
                </style>
                <![endif]-->
                <div class="p-i">
                  <?php the_content(); ?>
                </div>
                <div class="clear"></div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>


 <?php get_footer(); ?>