<?php
  get_header(); 
 ?>
 <style>
 </style>
 
 <?php get_template_part("template_parts/top"); ?> 
<?php $obj = get_queried_object(); ?>
<?php $categoryParent = get_cat_name($obj->category_parent); ?>
 <?php
  if (hengda_get_category_parent($parent) == false) {
    if (strtolower($obj->cat_name) == "delivery") {
      get_template_part("category", "parent-delivery");
    } else {
      get_template_part("category", "parent");
    }
    
  } else {
    if (strtolower($categoryParent) == "case") {
      get_template_part("category", "child-case");
    } else {
      get_template_part("category", "child");
    }
  }
?>
 
 <?php get_footer(); ?>