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
		<div id="main" class="site-main">
      <div id="top">
        <div id="header">
          <div class="hl">
              <div class="logo">
                <a href="http://www.leizhanchina.com"><img src="http://www.leizhanchina.com/wp-content/themes/leizhanchina/images/index-en_09.jpg" alt="Zhengzhou Leizhan Machine"></a>
                <div class="search">
                  <form action="http://www.leizhanchina.com/google-custom-search" method="get" name="frmsearch" id="frmsearch">
                          <label><input type="hidden" name="cx" value="007027674981923064640:crfx14xd58k"></label>
                          <label><input type="hidden" name="cof" value="FORID:11"></label>
                          <label><input type="hidden" name="ie" value="UTF-8"></label>
                          <label><input type="hidden" name="sitesearch" value="www.leizhanchina.com"></label>
                          <label><input name="q" type="text" id="keyword" value="Search" class="sl" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue"></label>
                          <label><input name="submit" type="submit" id="button" value="" class="sr"></label>
                          <div class="clear"></div>
                  </form>
                  <div class="hs">Hot Search:<a href="http://www.leizhanchina.com/paper-machine/" class="fontshrink">Paper Machine</a>,<a href="http://www.leizhanchina.com/pulper/zdsd-series-d-type-hydrapulper/" class="fontshrink">Hydrapulper</a>,<a href="http://www.leizhanchina.com/pulper/zg-series-drum-pulper/" class="fontshrink">Drum Pulper</a>,<a href="http://www.leizhanchina.com/screening/zns-series-mid-consistency-pressure-screen/" class="fontshrink">Pressure Screen</a></div>
                </div>
                <script>
                  $(function(){
                  //alert('1');	
                  $('#header .navlist ul').css('display','none');
                  $('#header .menu').click(function(){
                      $(this).hide();
                      $('#header .navlist ul').toggle(1000);
                  });
                  $('#header .close').click(function(){
                      $('.menu').show();
                      $('#header .navlist ul').toggle(1000);
                  });	
                  });
                </script>
                <div class="navlist">
                    <div class="menu">Menu</div>
                <div class="close">Closed</div>
                    <ul style="display: none;">
                      <li><a href="http://www.leizhanchina.com">Home</a></li>
                      <li><a href="http://www.leizhanchina.com/paper-machine/">PAPER MACHINE</a></li>
                      <li><a href="http://www.leizhanchina.com/pulp-machine/">PULP MACHINE</a></li>
                      <li><a href="http://www.leizhanchina.com/solution/">SOLUTION</a></li>
                      <li><a href="http://www.leizhanchina.com/case/">CASE</a></li>
                      <li><a href="http://www.leizhanchina.com/delivery/">Delivery</a></li>
                      <li><a href="http://www.leizhanchina.com/faq/">FAQ</a></li>
                      <li><a href="http://www.leizhanchina.com/contact-us/inquiry">INQUIRY</a></li>
                      <li><a href="http://www.leizhanchina.com/about-us/">ABOUT</a></li>
                      <li><a href="http://www.leizhanchina.com/contact-us/">CONTACT</a></li>
                      <li><a href="http://www.leizhanchina.com/about-us/service">Service</a></li>
                    </ul>
                </div>
              </div>
              <div class="clear"></div>
          </div>
          <div class="hr">
            <p><a href="" onclick="openZoosUrl('chatwin');" target="_blank" title="chat online">[ 24Hours Online ]</a></p>
          </div>
          <div class="clear"></div>
        </div>
      </div>

      <div id="menu">
        <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/menu.js"></script>
        <ul id="nav">
          <li class="spa"></li>
      
            <li class="long"><a href="http://www.leizhanchina.com/paper-machine/">PAPER MACHINE</a></li>
            <li class="long"><a href="http://www.leizhanchina.com/pulp-machine/">PULP MACHINE</a>
                <ul>
                    <li><a href="http://www.leizhanchina.com/pulper/">Pulper Equipment</a></li>
                    <li><a href="http://www.leizhanchina.com/screening/">Screening Equipment</a></li>
                    <li><a href="http://www.leizhanchina.com/refiner/">Refiner Equipment</a></li>
                    <li><a href="http://www.leizhanchina.com/cleaner/">Cleaner Equipment</a></li>
                    <li><a href="http://www.leizhanchina.com/conveyor-agitator/">Conveyor &amp; Agitator</a></li>
                    <li><a href="http://www.leizhanchina.com/thickener/">Thickener Equipment</a></li>
                </ul>
            </li>
            <li class="short"><a href="http://www.leizhanchina.com/solution/">SOLUTION</a>
              <ul>
                  <li><a href="http://www.leizhanchina.com/tissue-paper-making-line/">Tissue Paper Making Line</a></li>
                  <li><a href="http://www.leizhanchina.com/kraft-liner-paper-making-line/">Kraft Liner Paper Making Line</a></li>
                  <li><a href="http://www.leizhanchina.com/cultural-paper-making-line/">Cultural Paper Making Line</a></li>
                  <li><a href="http://www.leizhanchina.com/coating-board-paper-making-line/">Coating Board Paper Making</a></li>
                  <li><a href="http://www.leizhanchina.com/solution/corrugated-paper-making-line/">Corrugated Paper Making</a></li>
                </ul>
            </li>
            <li class="short"><a href="http://www.leizhanchina.com/case/">CASE</a>
              <ul>
                    <li><a href="http://www.leizhanchina.com/tissue-paper-making-line-case/">Tissue Paper Making Line</a></li>
                    <li><a href="http://www.leizhanchina.com/kraft-liner-paper-making-line-case/">Kraft Liner Paper Making Line</a></li>
                    <li><a href="http://www.leizhanchina.com/cultural-paper-making-line-case/">Culture Paper Making Line</a></li>
                    <li><a href="http://www.leizhanchina.com/coating-board-paper-making-line-case/">Coating Board Paper Making</a></li>
                    <li><a href="http://www.leizhanchina.com/corrugated-paper-making-line-case/">Corrugated Paper Making</a></li>
                </ul>
            </li>
            <li class="short"><a href="http://www.leizhanchina.com/delivery/">DELIVERY</a></li>
            <li class="short"><a href="http://www.leizhanchina.com/faq/">FAQ</a>
              <ul>
                    <li><a href="http://www.leizhanchina.com/tissue-paper-making-line-faq/">Tissue Paper Making Line</a></li>
                    <li><a href="http://www.leizhanchina.com/kraft-liner-paper-making-line-faq/">Kraft Liner Paper Making Line</a></li>
                    <li><a href="http://www.leizhanchina.com/cultural-paper-making-line-faq/">Cultural Paper Making Line</a></li>
                    <li><a href="http://www.leizhanchina.com/coating-board-paper-making-line-faq/">Coating Board Paper Making</a></li>
                    <li><a href="http://www.leizhanchina.com/corrugated-paper-making-line-faq/">Corrugated Paper Making</a></li>
                </ul>
            </li>
            <li class="short"><a href="http://www.leizhanchina.com/contact-us/inquiry">INQUIRY</a></li>
            <li class="short"><a href="http://www.leizhanchina.com/about-us/">ABOUT US</a>
              <ul>
                  <li class=""><a href="http://www.leizhanchina.com/about-us/company-profile">Company Profile</a></li>
                  <li><a href="http://www.leizhanchina.com/about-us/impression">Leizhan Impression</a></li>
                  <li><a href="http://www.leizhanchina.com/about-us/culture">Leizhan Culture</a></li>
                  <li><a href="http://www.leizhanchina.com/about-us/client">Production Market</a></li>
                  <li><a href="http://www.leizhanchina.com/about-us/technology">Leizhan Technology</a></li>
                  <li><a href="http://www.leizhanchina.com/about-us/honors">Leizhan Honors</a></li>
                  <li><a href="http://www.leizhanchina.com/about-us/service">Leizhan Service</a></li>
                  <li><a href="http://www.leizhanchina.com/news/">Leizhan News</a></li>
                </ul>
            </li>
            <li class="short"><a href="http://www.leizhanchina.com/contact-us">CONTACT</a>
              <ul>
                    <li><a href="http://www.leizhanchina.com/contact-us/location">Our Location</a></li>
                    <li><a href="http://www.leizhanchina.com/contact-us/feedback">Feedback</a></li>
                    <li><a href="http://www.leizhanchina.com/contact-us/inquiry">Inquiry</a></li>
                    <li><a href="http://www.leizhanchina.com/contact-us/parts-order">Spare Parts Order</a></li>
                    <li><a href="http://www.leizhanchina.com/contact-us/sales-map">Sales Map</a></li>
                    <li><a href="http://www.leizhanchina.com/contact-us/after-sale">After Sale Service</a></li>
                </ul>
            </li>
        </ul>
        <div class="clear"></div>
      </div>
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
              <li class="cur" style="display: block;"><a href="http://www.leizhanchina.com/pulp-machine/"><img alt="paper pulp equipment" src="http://www.leizhanchina.com/wp-content/themes/leizhanchina/images/banner1.jpg"></a></li>
              <li class="" style="display: none;"><a href="http://www.leizhanchina.com/about-us/"><img alt="About Leizhan" src="http://www.leizhanchina.com/wp-content/themes/leizhanchina/images/banner7.jpg"></a></li>
              <li class="" style="display: none;"><a href="http://www.leizhanchina.com/screening/"><img alt="Screening Equipment" src="http://www.leizhanchina.com/wp-content/themes/leizhanchina/images/banner6.jpg"></a></li>
              <li class="" style="display: none;"><a href="http://www.leizhanchina.com/corrugated-paper-making-line/"><img alt="" src="http://www.leizhanchina.com/wp-content/themes/leizhanchina/images/banner4.jpg"></a></li>
          </ul>
          <ul class="slide-li op">
              <li class="cur"></li>
              <li class=""></li>
              <li class=""></li>
              <li class=""></li>
          </ul>
          <ul class="slide-li slide-txt">
              <li class="cur"><a href="#"></a></li>
              <li class=""><a href="#"></a></li>
              <li class=""><a href="#"></a></li>
              <li class=""><a href="#"></a></li>
          </ul>
        </div>
      </div>
      <ul class="padding-top:500px">  
          <?php while (have_posts()) : the_post(); ?>  
          <li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>  
          <?php endwhile;?>  
      </ul>  
		</div><!-- .site-main -->

<?php
get_footer();
