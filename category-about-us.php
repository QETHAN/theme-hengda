<?php get_header(); ?>
<?php get_template_part("template_parts/top"); ?> 
<?php $queriedObj = get_queried_object(); ?>
<div id="s-banner">
  <?php $cat = get_the_category(); ?>
  <img src="<?php echo z_taxonomy_image_url($cat->cat_ID); ?>" alt="<?php echo single_cat_title();?>">
</div>

<div id="m-warp">
<div class="s-middle">
        <div class="about-memos"><strong style="font-size: 18px;">Hengda Profile</strong><br>
        Zhengzhou Hengda Technology Paper Machinery Co., Ltd. is one of the leading and professional paper pulp equipment manufacturer in China.<br>
        Hengda is a manufacturer specializing in making complete sets of waste paper pulp equipment which combines research and development with producing and sales. 
        This company has processing and testing equipment like CNC cutting machine, sand blasting system, vertical and horizontal CNC lathe, planer milling machine, automatic continuous welding machine,...<br>
		<a href="<?php site_url(); ?>/about-us/company-profile/" style="color:#008cd7;"> &gt;&gt; See More</a>
        </div>
		<div class="about-list">
            <ul>
                <li>
                   <h2 style="margin-bottom: 5px;">
                     <a href="<?php site_url(); ?>/about-us/hengda-impression">
                      <!-- <img src="<?php echo get_theme_file_uri(); ?>/images/about_06.jpg" alt="Hengda Impression"> -->
                      <strong style="font-size: 18px;">Hengda Impression</strong>
                    </a>
                  </h2>
                   <a href="<?php site_url(); ?>/about-us/hengda-impression"><img src="<?php echo get_theme_file_uri(); ?>/images/about_12.jpg" width="306" height="118" alt="Hengda Impression"></a>
                   <p><a href="<?php site_url(); ?>/about-us/hengda-impression">Hengda is founded in the year 1980. It is a manufacturer specializing in making complete sets of waste paper pulp equipment which combines research and development...</a></p>
                </li>
                <li>
                    <h2 style="margin-bottom: 5px;">
                    <a href="<?php site_url(); ?>/about-us/hengda-culture">
                      <strong style="font-size: 18px;">Hengda Culture</strong>
                    </a>
                    </h2>
                    <a href="<?php site_url(); ?>/about-us/hengda-culture"><img src="<?php echo get_theme_file_uri(); ?>/images/about_14.jpg" width="306" height="118" alt="Hengda Culture"></a>
                    <p><a href="<?php site_url(); ?>/about-us/hengda-culture">Hengda has formed unique, rich cultural connotations after over 30 years develpment.  Hengda takes first-class technology, high quality products, competitive price...</a></p>
                </li>
                <li style="margin-right:0">
                    <h2 style="margin-bottom: 5px;"><a href="<?php site_url(); ?>/about-us/product-market"><strong style="font-size: 18px;">Hengda Client</strong></a></h2>
                    <a href="<?php site_url(); ?>/about-us/product-market"><img src="<?php echo get_theme_file_uri(); ?>/images/about_16.jpg" width="306" height="118" alt="Hengda's product-markets"></a>
                    <p><a href="<?php site_url(); ?>/about-us/product-market">Hengda high quality pulp and paper machine quick-wear parts adopt superior wear-resistant material and advanced processing technology, which makes...</a></p>
                </li>
                <li>
                    <h2 style="margin-bottom: 5px;"><a href="<?php site_url(); ?>/about-us/hengda-technology"><strong style="font-size: 18px;">Technology R&D</strong></a></h2>
                    <a href="<?php site_url(); ?>/about-us/hengda-technology"> <img src="<?php echo get_theme_file_uri(); ?>/images/about_29.jpg" width="306" height="118" alt="Hengda Technology"></a>
                    <p><a href="<?php site_url(); ?>/about-us/hengda-technology">Hengda, as the leading manufacturer of paper pulp equipment, with German quality management system and standard, we devote to build a world brand...</a></p>
                </li>
                <li>
                    <h2 style="margin-bottom: 5px;"><a href="<?php site_url(); ?>/about-us/hengda-honors"><strong style="font-size: 18px;">Hengda Honor</strong></a></h2>
                    <a href="<?php site_url(); ?>/about-us/hengda-honors"><img src="<?php echo get_theme_file_uri(); ?>/images/about_30.jpg" width="306" height="118" alt="Hengda Honors"></a>
                    <p><a href="<?php site_url(); ?>/about-us/hengda-honors">Hengda products employ world advanced technology, pass ISO9001 international quality system certification and BV certification...</a></p>
                </li>
                <li style="margin-right:0">
                    <h2 style="margin-bottom: 5px;"><a href="<?php site_url(); ?>/about-us/hengda-service"><strong style="font-size: 18px;">Our Service</strong></a></h2>
                    <a href="<?php site_url(); ?>/about-us/hengda-service"><img src="<?php echo get_theme_file_uri(); ?>/images/about_31.jpg" width="306" height="118" alt="Hengda Service"></a>
                    <p><a href="<?php site_url(); ?>/about-us/hengda-service">We will contact our customers at the first time, get the detailed customer requirements, material component, pre-order the operation site, etc ...</a></p>
                </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="clear"></div>
	</div>  
</div>

<?php get_footer(); ?>