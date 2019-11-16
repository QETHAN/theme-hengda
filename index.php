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
              <li class="cur" style="display: block;"><a href="http://www.hengdapapermachine.com/pulp-machine/"><img alt="paper pulp equipment" src="<?php echo get_theme_file_uri(); ?>/images/banner1.jpg"></a></li>
              <li class="" style="display: none;"><a href="http://www.hengdapapermachine.com/about-us/"><img alt="About Hengda" src="<?php echo get_theme_file_uri(); ?>/images/banner7.jpg"></a></li>
              <li class="" style="display: none;"><a href="http://www.hengdapapermachine.com/screening/"><img alt="Screening Equipment" src="<?php echo get_theme_file_uri(); ?>/images/banner6.jpg"></a></li>
              <li class="" style="display: none;"><a href="http://www.hengdapapermachine.com/corrugated-paper-making-line/"><img alt="" src="<?php echo get_theme_file_uri(); ?>/images/banner4.jpg"></a></li>
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
      
      <div id="m-warp">
        <div class="middle">
              <div class="m-n">
                  <div class="title">LATEST NEWS</div>
                  
                  <div class="top-n">         	
                                      <a href="http://www.hengdapapermachine.com/industry-news/leizhan-attend-iran-pack-print-show/" style="line-height:16px;"><img src="http://www.hengdapapermachine.com/wp-content/uploads/2018/12/Hengda-Attend-Iran-Pack-Print-Show-.jpg" alt=""></a>
                      <div class="top-text">
                          <p><a href="http://www.hengdapapermachine.com/industry-news/leizhan-attend-iran-pack-print-show/" title="Hengda Attend Iran Pack &amp; Print Show" style="line-height:16px;">Hengda Attend Iran Pack &amp; Print Show</a></p>
                          <div class="date">
                              <font>Dec.04</font>
                              <span>2018</span>
                              <div class="clear"></div>
                          </div>
                          <div class="clear"></div>
                      </div>
                          
                      <div class="clear"></div>
                  </div>
                  <ul>
                                      <li>
                          <span><font size="+1">Aug.28</font><br>2019</span>
                          <p><a href="http://www.hengdapapermachine.com/company-news/2019-envirpro-paper-exhibition-in-indonesia/" title="2019 Envirpro Paper Exhibition In Indonesia">2019 Envirpro Paper Exhibition In Indonesia</a>
                          <!--<br /><font color="d00000">Hits:</font> <script src="/plus/count/js.asp?id=270" language="javascript"></script>--></p>
                      </li>
                              <li>
                          <span><font size="+1">Apr.11</font><br>2019</span>
                          <p><a href="http://www.hengdapapermachine.com/company-news/4th-papertech-expo-2019-dhakabangladesh/" title="4th PaperTech Expo 2019 Dhaka,Bangladesh">4th PaperTech Expo 2019 Dhaka,Bangladesh</a>
                          <!--<br /><font color="d00000">Hits:</font> <script src="/plus/count/js.asp?id=270" language="javascript"></script>--></p>
                      </li>
                          </ul>
                  <div class="clear"></div>
              </div>
              <div class="m-a">
                  <div class="title">SOLUTION</div>
                  <div class="m-app">
                      <div class="app"><a href="http://www.hengdapapermachine.com/kraft-liner-paper-making-line/"><img src="<?php echo get_theme_file_uri(); ?>/images/index-en_25.jpg"></a><p><a href="http://www.hengdapapermachine.com/kraft-liner-paper-making-line/">Kraft Paper</a></p></div>
                      <div class="app"><a href="http://www.hengdapapermachine.com/coating-board-paper-making-line/"><img src="<?php echo get_theme_file_uri(); ?>/images/index-en_27.jpg"></a><p><a href="http://www.hengdapapermachine.com/coating-board-paper-making-line/">Coating Board Paper</a></p></div>
                      <div class="app" style="margin-right:0;"><a href="http://www.hengdapapermachine.com/corrugated-paper-making-line/"><img src="<?php echo get_theme_file_uri(); ?>/images/index-en_29.jpg"></a><p><a href="http://www.hengdapapermachine.com/corrugated-paper-making-line/">Corrugated Paper</a></p></div>
                      <div class="clear"></div>
                  </div>
                  <div class="m-about">
                      <div class="title" style=" margin-bottom:10px;">FAQ</div>
                      <p>FAQ is mainly about Living Paper Making Line, Kraft/Testliner Paper Making Line, High-grade Cultural Paper Making Line, Fluting/Corrugated Paper Making Line, Coating Board Paper Making Line...</p>
                      <p><i><a href="http://www.hengdapapermachine.com/faq/" class="more">read more</a></i></p>
                  </div>
                  <div class="clear"></div>
              </div>
              <div class="m-r">
                  <div class="m-p">
                      <div class="title">SUCCESSFUL CASE</div>
                      <p>A great many plants designed by Hengda are built in countries and lots of them have become the classical ones in local market.</p>
                      <p><i><a href="http://www.hengdapapermachine.com/case/" class="more">read more</a></i></p>
                      <div class="clear"></div>
                  </div>
                  
                  <div class="m-s">
                      <ul>
                          <li><span>Service</span><a href="http://www.hengdapapermachine.com/contact-us/parts-order" target="_blank" rel="nofollow">Parts</a> | <a href="http://www.hengdapapermachine.com/contact-us/after-sale" target="_blank" rel="nofollow">After-sale</a> | <a href="" onclick="openZoosUrl('chatwin');" title="chat online for free" target="_blank" rel="nofollow" style="color:#d00000;">Live Chat</a></li>
                          <li><span>Hotline</span><font style="color:#d00000;">+86-371-5512 9198</font></li>
                          <li><span>E-mail</span><a href="mailto:zzhengdachina@gmail.com">zzhengdachina@gmail.com</a></li>
                      </ul>
                  </div>
                  <div class="clear"></div>
              </div>
              <div class="clear"></div>
          </div>
      </div>
		</div><!-- .site-main -->

<?php
get_footer();
