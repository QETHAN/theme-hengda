<?php
  get_header(); 
 ?>
 <style>
 </style>
 
 <?php get_template_part("template_parts/top"); ?> 

 <?php
  if (hengda_get_category_parent($parent) == false) {
    get_template_part("category", "parent");
  } else {
    get_template_part("category", "child");
  }
?>

 
 <?php get_footer(); ?>