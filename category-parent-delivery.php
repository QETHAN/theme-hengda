<?php $queriedObj = get_queried_object(); ?>
<div id="s-banner">
  <?php $cat = get_the_category(); ?>
  <img src="<?php echo z_taxonomy_image_url($queriedObj->category_parent); ?>" alt="<?php echo single_cat_title();?>">
</div>

 <div id="m-warp">
	<div class="s-middle">
  <div class="s-left" id="conLeft" style="height: 1149px;">
        	<ul>
            	<li>Latest Case</li>
                <li class="second  lis_cur">
                	<ul>
                    <?php query_posts('cat=16&posts_per_page=10'); while(have_posts()): the_post(); ?>   
                      <li><a href="<?php the_permalink(); ?>" target="_blank"><?php the_title();?></a></li>   
                    <?php endwhile; wp_reset_query(); ?>
                  </ul>
                </li>
                <li class="conLeftLast"> </li>
            </ul>
            <div class="clear"></div>
        </div>
        <div class="s-right" id="conRight">
        	<div class="rightTitle">
            <span class="guide">
              <a href="<?php site_url(); ?>">Home</a> » <a href="<?php echo get_category_link($queriedObj->category_parent); ?>"><?php echo ucwords(strtolower(get_cat_name($queriedObj->category_parent))); ?></a> » <?php echo ucwords(strtolower($queriedObj->cat_name)); ?>
            </span>
            <h1><?php echo ucwords(strtolower($queriedObj->cat_name)); ?></h1>
          </div>
            <!--[if lte IE 10]>
            <style>
            #m-warp .s-middle .s-right .rightMain{ width:72%;}
            #m-warp .s-middle .s-right .rightContact{ width:26%; }
            </style>
            </head>
            <![endif]-->
            <div class="rightMain">
              <div class="mainBox">
                <?php if( have_posts() ): ?>
                <?php while( have_posts() ): the_post(); ?>
                  <div class="eachBox2">
                      <div class="eachImg">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                          <?php the_post_thumbnail(array(179, 78)); ?>
                        </a>
                      </div>
                      <p><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></p>
                  </div>
                <?php endwhile; ?>
              <?php endif; ?>
            <div class="clear"></div>
          </div>
          <!--分页-->                    
          <div class="page"><p class="wp-pagenavi"><span class="pages">Page Links: </span><span class="current">1</span><a href="http://www.leizhanchina.com/delivery/page/2/" class="page larger" rel="nofollow">2</a><a href="http://www.leizhanchina.com/delivery/page/2/" rel="nofollow">Next</a><a href="http://www.leizhanchina.com/delivery/page/2/" rel="nofollow">Last Page</a></p></div>
          <div class="clear"></div>
      </div>
<div class="rightContact">
    <div class="contact-t">CONTACT US</div>
    <p>If you have any requirements or questions, please leave a message, we will reply you as soon as possible!</p>
    <script type="text/javascript">
		function $g(obj){return document.getElementById(obj);}
		
		function chkInquiry(){
			if($g("userName").value==""){alert("Please input your Name ! ");$g("userName").focus();return false;}
			if($g("Message").value==""){alert("Please input your Message ! ");$g("Message").focus();return false;}
			if($g("userEMail").value==""){alert("Please input your E-Mail ! ");$g("userEMail").focus();return false;}else{if(!isEmail($g("userEMail").value)){alert("Your E-Mail is error ! ");$g("userEMail").focus();return false;}}
		}
		
		function isEmail(strEmail) {
			if (strEmail.search(/^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/) != -1)
				return true;
			else
				return false;
		}
		</script>
<form method="post" action="http://www.hengdapapermachine.com/mail/leizhan/" onsubmit="return chkInquiry()" name="msgForm" target="msgFrame">
    <input type="hidden" name="pWin" id="pWin" value="http://www.hengdapapermachine.com/paper-machine/">
    <input type="hidden" name="Act" value="Inquiry">
    <input type="hidden" name="iLang" value="en">
    <table border="0" cellspacing="0" cellpadding="0" width="90%">
        <tbody>
            <tr>
                <td><input name="userName" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* Name') this.value='';" placeholder="Name (required)" required="required" oninvalid="setCustomValidity('Please input your Name!');" oninput="setCustomValidity('');"></td>
            </tr>
            <tr>
                <td style="height:5px; overflow:hidden;"></td>
            </tr>
            <tr>
                <td><input name="userTel" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* Tel') this.value='';" placeholder="Tel"></td>
            </tr>
            <tr>
                <td style="height:5px; overflow:hidden;"></td>
            </tr>
            <tr>
                <td><input name="userEMail" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* E-mail') this.value='';" placeholder="Email (required)" required="required" oninvalid="setCustomValidity('Please input your E-mail!');" oninput="setCustomValidity('');"></td>
            </tr>
            <tr>
                <td style="height:5px; overflow:hidden;"></td>
            </tr>
            <tr>
                <td><input name="uCountry" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* Country') this.value='';" placeholder="Country"></td>
            </tr>
            <tr>
                <td style="height:5px; overflow:hidden;"></td>
            </tr>
            <tr>
                <td><input name="Company" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* Company') this.value='';" placeholder="Company"></td>
            </tr>
            <tr>
                <td style="height:5px; overflow:hidden;"></td>
            </tr>
            <tr>
                <td><textarea name="Message" onmouseover="this.focus();" onfocus="if(this.value=='*Please leave your message') this.value='';" placeholder="Message (required)" required="required" oninvalid="setCustomValidity('Please input your Message!');" oninput="setCustomValidity('');">*Please leave your message</textarea></td>
            </tr>
            <tr>
                <td style="height:5px; overflow:hidden;"></td>
            </tr>
            <tr>
                <td valign="middle" colspan="2"><input border="0" class="botn" name="submit" type="submit" value=""></td>
            </tr>
        </tbody>
    </table>
</form>
<script language="javascript">
			var cUrl=document.URL;
			var fUrl=cUrl.split("?w=")[0];
			$g("pWin").value=fUrl;
			//msgForm.pWin.value=window.location.href;
			//alert($g("pWin").value);
			//alert(window.location.href);
			</script>
      <!--[if lt IE 8]>
        <script type="text/javascript">
        var input = document.getElementsByTagName("input");
        for(i=0;i<input.length;i++){
          (function(inp){
            var place = inp.getAttribute("placeholder");
            inp.value=place;
            inp.onfocus=function(){if(this.value==place){this.value=""}};
            inp.onblur=function(){if(this.value==""){this.value=place}}
          })(input[i])
        }
        
        </script>
        <![endif]-->     <div class="c-1"><a href="" onclick="openZoosUrl('chatwin');" target="_blank" rel="nofollow" style="color:#d00000;" title="chat online">Service Online</a></div>
    <div class="c-2">+86-371-5512 9198</div>
    <div class="c-3"><a href="mailto:zzhengdachina@gmail.com">zzhengdachina@gmail.com</a></div>
</div>            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>