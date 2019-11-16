<?php
  get_header(); 
 ?>
 <style>
 </style>
 
 <?php get_template_part("template_parts/top"); ?> 
 <div id="s-banner">
  <img src="<?php if (function_exists('z_taxonomy_image_url')) echo z_taxonomy_image_url(); ?>" alt="<?php echo single_cat_title();?>">
</div>
<div id="m-warp">
  <div class="s-middle">
				<div class="single-nav"><span class="guide"><a href="http://www.leizhanchina.com">Home</a> » <a></a><a href="http://www.leizhanchina.com/news/">News</a> » Hengda News </span><h1>Hengda News</h1></div>
				<div class="newslist">
                	<ul>
                    <?php if (have_posts()): ?>
                        <?php while(have_posts()): the_post(); ?>

                    	  <li>                        
                          <span>[ <?php the_time('Y-m-d'); ?> ]</span><br>
                          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a><br>
                          <p><?php the_excerpt() ?></p>
                        </li> 
                        <?php endwhile; ?>
                    <?php endif; ?>
                    </ul>
                    <!--分页-->                    
                    <div class="page"><p class="wp-pagenavi"><span class="pages">Page Links: </span><span class="current">1</span><a href="http://www.leizhanchina.com/company-news/page/2/" class="page larger" rel="nofollow">2</a><a href="http://www.leizhanchina.com/company-news/page/3/" class="page larger" rel="nofollow">3</a><a href="http://www.leizhanchina.com/company-news/page/4/" class="page larger" rel="nofollow">4</a><a href="http://www.leizhanchina.com/company-news/page/5/" class="page larger" rel="nofollow">5</a><a href="http://www.leizhanchina.com/company-news/page/2/" rel="nofollow">Next</a><a href="http://www.leizhanchina.com/company-news/page/5/" rel="nofollow">Last Page</a></p></div>
                </div>
                
                       
                    </div>
                </div>
                <div class="clear"></div>
  </div>
</div>
<?php get_footer(); ?>