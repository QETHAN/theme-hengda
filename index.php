<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Hengda
 * @since 1.0.0
 */

get_header();
?>
		
      <?php get_template_part("template_parts/top"); ?>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/banner.js"></script>
      
      <style>
        #banner{}
        .slides { margin: 0px auto; width:100%; height: auto; overflow: hidden; position: relative; }
        .slide-pic { margin: 0px; padding: 0px; width:100%; overflow: hidden; list-style: none; }
        .slide-pic img {width:100%; }
        .slide-pic li { display: none; }
        .slide-pic li.cur { display: block; }
        .slide-li { margin: 0px auto; padding: 0px; right: 120px; bottom: 5px; position: absolute; width:350px;}
        .slide-li li { margin: 0px; padding: 0px; width:50px; height: 15px; float: left; overflow: hidden; list-style: none;margin-left:1px; }
        .slide-li a {width:50px; height: 15px; color: #000; font-size: 12px; display: block;  margin: 0px; padding: 0px;margin-left:1px;}
        .slide-li a:hover { color: #F00; text-decoration: none; }
        .op li { background: #666; filter: alpha(opacity=60); opacity: 0.6;}
        .op li.cur { margin: 0px; padding: 0px; background: #d00000;  width:50px;margin-left:1px; }
        .slide-txt span { display: none; }
        .slide-txt li{ text-align:center;}
        .slide-txt li a{ color:#fff;}
      </style>

      <div id="banner">
        <div class="slides">
          <ul class="slide-pic">
              <li class="cur" style="display: block;"><a href="<?php echo home_url(); ?>/pulp-machine"><img alt="Paper Pulp Equipment" src="<?php echo get_theme_file_uri(); ?>/images/banner1.jpg"></a></li>
              <li class="" style="display: none;"><a href="<?php echo home_url(); ?>/about-us"><img alt="About Hengda" src="<?php echo get_theme_file_uri(); ?>/images/banner7.jpg"></a></li>
              <li class="" style="display: none;"><a href="<?php echo home_url(); ?>/screening"><img alt="Screening Equipment" src="<?php echo get_theme_file_uri(); ?>/images/banner6.jpg"></a></li>
              <li class="" style="display: none;"><a href="<?php echo home_url(); ?>/corrugated-paper-making-line"><img alt="corrugated-paper-making-line" src="<?php echo get_theme_file_uri(); ?>/images/banner4.jpg"></a></li>
              <div class="clear"></div>
            </ul>
          <ul class="slide-li op">
              <li class="cur"></li>
              <li class=""></li>
              <li class=""></li>
              <li class=""></li>
              <div class="clear"></div>
          </ul>
          <ul class="slide-li slide-txt">
              <li class="cur"><a href="#"></a></li>
              <li class=""><a href="#"></a></li>
              <li class=""><a href="#"></a></li>
              <li class=""><a href="#"></a></li>
              <div class="clear"></div>
          </ul>
        </div>
      </div>
      
      <div id="m-warp">
        <div class="middle">
              <div class="m-n">
                  <div class="title">LATEST NEWS</div>
                    <?php $posts = get_posts( "category=51&numberposts=3&order=DESC" ); ?>  
                    <?php if( $posts ) : ?>  
                      <ul>
                        <?php foreach( $posts as $post ) : setup_postdata( $post ); ?>  
                        <li>
                            <span><font size="+1"><?php echo $months[(int)get_the_time('m')-1];?>.<?php the_time('d'); ?></font><br><?php the_time('Y'); ?></span>
                            <p><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                            <!--<br /><font color="d00000">Hits:</font> <script src="/plus/count/js.asp?id=270" language="javascript"></script>--></p>
                        </li>
                      <?php endforeach; ?>  
                      </ul>  
                    <?php endif; ?>
                      
                  <div class="clear"></div>
              </div>
              <div class="m-a">
                  <div class="title">SOLUTION</div>
                  <div class="m-app">
                    <?php $args = "child_of=10&orderby=ID&number=3"; ?>
                    <?php $categories = get_categories($args); ?>
                    <?php foreach($categories as $cat): ?>
                      <div class="app">
                        <a href="<?php echo get_category_link($cat->cat_ID); ?>">
                        <img src="<?php echo z_taxonomy_image_url($cat->term_id); ?>">
                        </a>
                        <p>
                          <a href="<?php echo get_category_link($cat->cat_ID); ?>"><?php echo $cat->name; ?></a>
                        </p>
                      </div>
                    <?php endforeach; ?>
                    <div class="clear"></div>
                  </div>
                  <div class="m-about">
                      <div class="title" style=" margin-bottom:10px;">FAQ</div>
                      <p>FAQ is mainly about Living Paper Making Line, Kraft/Testliner Paper Making Line, High-grade Cultural Paper Making Line, Fluting/Corrugated Paper Making Line, Coating Board Paper Making Line...</p>
                      <p><i><a href="<?php echo home_url(); ?>/faq" class="more">read more</a></i></p>
                  </div>
                  <div class="clear"></div>
              </div>
              <div class="m-r">
                  <div class="m-p">
                      <div class="title">SUCCESSFUL CASE</div>
                      <p>A great many plants designed by Hengda are built in countries and lots of them have become the classical ones in local market.</p>
                      <p><i><a href="<?php echo home_url(); ?>/case" class="more">read more</a></i></p>
                      <div class="clear"></div>
                  </div>
                  
                  <div class="m-s">
                      <ul>
                          <li><span>Service</span><a href="<?php echo home_url(); ?>/contact/spare-parts-order" target="_blank" rel="nofollow">Parts</a> | <a href="<?php echo home_url(); ?>/contact/after-sale-service" target="_blank" rel="nofollow">After-sale</a></li>
                          <li><span>Hotline</span><font style="color:#d00000;">+86-371-69277066</font></li>
                          <li><span>E-mail</span><a href="mailto:zzhengdachina@gmail.com">zzhengdachina@gmail.com</a></li>
                      </ul>
                  </div>
                  <div class="clear"></div>
              </div>
              <div class="clear"></div>
          </div>
      </div>
		</div><!-- .site-main -->
<!-- <div style="margin:0 auto;">

</div> -->


<?php
get_footer();
