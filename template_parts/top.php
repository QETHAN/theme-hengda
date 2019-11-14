<div id="main" class="site-main">
<div id="top">
  <div id="header">
    <div class="hl">
        <div class="logo">
          <a href="<?php site_url(); ?>"><img src="<?php echo get_theme_file_uri(); ?>/images/logo.jpg" alt="Zhengzhou Hengda Paper Machine"></a>
          <div class="search">
            <form action="http://www.hengdapapermachine.com/google-custom-search" method="get" name="frmsearch" id="frmsearch">
                    <label><input type="hidden" name="cx" value="007027674981923064640:crfx14xd58k"></label>
                    <label><input type="hidden" name="cof" value="FORID:11"></label>
                    <label><input type="hidden" name="ie" value="UTF-8"></label>
                    <label><input type="hidden" name="sitesearch" value="www.hengdapapermachine.com"></label>
                    <label><input name="q" type="text" id="keyword" value="Search" class="sl" onfocus="if(this.value==this.defaultValue)this.value=''" onblur="if(this.value=='')this.value=this.defaultValue"></label>
                    <label><input name="submit" type="submit" id="button" value="" class="sr"></label>
                    <div class="clear"></div>
            </form>
            <div class="hs">Hot Search:<a href="http://www.hengdapapermachine.com/paper-machine/" class="fontshrink">Paper Machine</a>,<a href="http://www.hengdapapermachine.com/pulper/zdsd-series-d-type-hydrapulper/" class="fontshrink">Hydrapulper</a>,<a href="http://www.hengdapapermachine.com/pulper/zg-series-drum-pulper/" class="fontshrink">Drum Pulper</a>,<a href="http://www.hengdapapermachine.com/screening/zns-series-mid-consistency-pressure-screen/" class="fontshrink">Pressure Screen</a></div>
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
                  <li><a href="http://www.hengdapapermachine.com">Home</a></li>
                  <li><a href="http://www.hengdapapermachine.com/paper-machine/">PAPER MACHINE</a></li>
                  <li><a href="http://www.hengdapapermachine.com/pulp-machine/">PULP MACHINE</a></li>
                  <li><a href="http://www.hengdapapermachine.com/solution/">SOLUTION</a></li>
                  <li><a href="http://www.hengdapapermachine.com/case/">CASE</a></li>
                  <li><a href="http://www.hengdapapermachine.com/delivery/">Delivery</a></li>
                  <li><a href="http://www.hengdapapermachine.com/faq/">FAQ</a></li>
                  <li><a href="http://www.hengdapapermachine.com/contact-us/inquiry">INQUIRY</a></li>
                  <li><a href="http://www.hengdapapermachine.com/about-us/">ABOUT</a></li>
                  <li><a href="http://www.hengdapapermachine.com/contact-us/">CONTACT</a></li>
                  <li><a href="http://www.hengdapapermachine.com/about-us/service">Service</a></li>
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
  <script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/js/menu.js"></script>
  <?php 
    wp_nav_menu(array(
      // 调取和哪个位置关联菜单下的项目
      'theme_location' => 'nav-1',
      // 菜单项目列表外层容器的元素
      'container'       => '',
      // 菜单项目列表外层容器的class属性值
      'container_class' => '',
      // 菜单项目列表外层容器的ID属性值
      'container_id'    => '',
      // 菜单项目列表本身这个元素的class属性值
      'menu_class'      => '',
      // 菜单项目列表本身这个元素的class属性值
      'menu_id'         => 'nav',
      'echo'            => true,
      // 当没有设置过菜单项目时，直接获取页面的信息当做菜单项目
      'fallback_cb'     => 'wp_page_menu',
      'walker'    => new Nav_menu_walker()
    ));
  ?>
  <div class="clear"></div>
</div>