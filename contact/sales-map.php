<?php
/*
 * Template Name: Sales Map模板
 * Template Post Type: post, page, product
 */
  
get_header(); 
?>

<?php get_template_part("template_parts/top"); ?> 

<div id="m-warp">
<div class="s-middle">
    <div class="s-left" id="conLeft" style="height: 1060px;">
  <ul>
      <li><a href="http://www.hengdapapermachine.com/contact-us">Contact Us</a></li>
      <?php $posts = get_posts( "category=39&numberposts=10&order=asc" ); ?>  
      <?php if( $posts ) : ?>  
        <ul><?php foreach( $posts as $post ) : setup_postdata( $post ); ?>  
        <li>  
          <a href="<?php the_permalink() ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>  
        </li>  
        <?php endforeach; ?>  
        </ul>  
      <?php endif; ?>
      <li class="conLeftLast"></li>
   </ul>
 <div class="clear"></div>
</div>        
<div class="s-right" id="conRight">
    <div class="rightTitle">
      <span class="guide">
      <a href="http://www.hengdapapermachine.com">Home</a> » <?php
      $get_cat        = get_the_category();
      $first_cat      = $get_cat[0];
      $category_name  = $first_cat->cat_name;
      $category_link  = get_category_link( $first_cat->cat_ID ); ?>
      <a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo esc_attr( ucfirst(strtolower($category_name)) ); ?>">
      <?php echo esc_html( ucfirst(strtolower($category_name)) ); ?></a> » Sales Map</span>
      <h1>Sales Map</h1>
    </div>
    
    <div class="about-info">
          <p class="aboutinfo">Hengda company professional engaged in the research, development and manufacture of the complete sets of waste paper pulp and paper production equipment for over decades of years. Hengda are commited to establish a world brand in paper and pulp industry with professional skill and positive innovation spirit.</p>
          <p>By taking science and technology as the guide, good product quality as assurance, with the sincere service at your back, Hengda provide high quality and low price complete sets of pulp and paper production equipment to our customers. Moreover, Hengda provide the perfect  pre-sale and after-sale service for the customer from factory design to producing line design, installation, commissioning and training. </p>
          <p>Thanks to the superior quality products and perfect services, our products has a huge market at home and aboard.</p>
          <p>Domestic service network includes: Xinjiang, Shanxi, Shannxi, Hebei, Henan, Hunan,  Anhui, Hubei, Liaoning, Jilin, Heilongjiang, Shandong, Guizhou, Sichuan, Yunnan, Jiangsu, Fujian, Jiangxi, Guangdong, etc. </p>
          <p style="text-align: center"><img alt="Sales map" src="http://www.hengdapapermachine.com/wp-content/themes/hengdapapermachine/images/contant6.jpg"></p>
          <p>International service network includes: India, Indonesia, Iran, Egypt, Malaysia, Saudi Arabian, South Africa, Syria, Vietnam, Zambia, etc.</p>
          <p style="text-align: center"><img alt="Sales map" src="http://www.hengdapapermachine.com/wp-content/themes/hengdapapermachine/images/contant7.jpg"></p>
          <p><img alt="Sales map" src="http://www.hengdapapermachine.com/wp-content/themes/hengdapapermachine/images/contant3.jpg"></p>
          <div style="width: 220px; float: right; height: 230px; clear: right"><img alt="Contact us" src="http://www.hengdapapermachine.com/wp-content/themes/hengdapapermachine/images/contant2.jpg"></div>
          <p>If you are interested in our products, welcome to our company or our local offices, you can also consult via telephone or email. We will offer you product details and working knowledge. You will not only get high quality equipment with competitive price but also intimate service.</p>
          <p>&nbsp;</p>
          <p><strong>Sales Hotline: +86-371-69277066</strong></p>
          <p>If you want to contact us for free immediately: please click <a rel="nofollow" target="_blank" href="" onclick="openZoosUrl('chatwin');" title="chat online"><strong>Free online service</strong></a>.</p>	
        <div class="clear"></div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
</div>