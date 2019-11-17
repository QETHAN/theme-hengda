<?php $queriedObj = get_queried_object(); ?>
<div id="s-banner">
  <?php $cat = get_the_category(); ?>
  <img src="<?php echo z_taxonomy_image_url($queriedObj->category_parent); ?>" alt="<?php echo single_cat_title();?>">
</div>
 <div id="m-warp">
	<div class="s-middle">
    	<div class="s-left" id="conLeft">
        	<ul>
            <?php $args = "child_of=" . $queriedObj->category_parent . "&orderby=ID"; ?>
            <?php $categories = get_categories($args); ?>
            <?php foreach($categories as $cat): ?>
              <li><a href="<?php echo get_category_link($cat->cat_ID); ?>" class="arrow"><?php echo $cat->name; ?></a></li>
            <?php endforeach; ?>
            <li class="conLeftLast"> </li>
          </ul>
          <div class="clear"></div>
        </div>
        <div class="s-right" id="conRight">
        	<div class="rightTitle">
            <span class="guide">
              <a href="<?php echo home_url(); ?>">Home</a> » <a href="<?php echo get_category_link($queriedObj->category_parent); ?>"><?php echo ucwords(strtolower(get_cat_name($queriedObj->category_parent))); ?></a> » <?php echo ucwords(strtolower($queriedObj->cat_name)); ?>
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
            	<div class="rightTop">
                <p>
                  <?php echo category_description(); ?>
                </p>
              </div>
              <div class="mainBox">
                <?php if( have_posts() ): ?>
                  <?php while( have_posts() ): the_post(); ?>
                    <div class="eachBox">
                      <div class="eachImg">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                          <?php the_post_thumbnail(); ?>
                        </a>
                      </div>
                      <div class="eachText">
                        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                          <p><?php the_excerpt(); ?></p>
                          <p><i><a href="<?php the_permalink(); ?>" class="more">read more</a></i></p>
                      </div>
                      <div class="clear"></div>
                    </div>
                    
                  <?php endwhile; ?>
                <?php endif; ?>
                <?php if(function_exists('wp_pagenavi')) { wp_pagenavi(); } ?>
                
                <!-- <p class="wp-pagenavi">
                  <span class="pages">Page Links: </span>
                  <span class="current">1</span>
                  <a href="<?php echo home_url(); ?>/paper-machine/page/2/" class="page larger" rel="nofollow">2</a>
                  <a href="<?php echo home_url(); ?>/paper-machine/page/3/" class="page larger" rel="nofollow">3</a>
                  <a href="<?php echo home_url(); ?>/paper-machine/page/2/" rel="nofollow">Next</a>
                  <a href="<?php echo home_url(); ?>/paper-machine/page/3/" rel="nofollow">Last Page</a>
                </p>                 -->
              </div>
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
<form method="post" action="<?php echo home_url(); ?>/mail/leizhan/" onsubmit="return chkInquiry()" name="msgForm" target="msgFrame">
    <input type="hidden" name="pWin" id="pWin" value="<?php echo home_url(); ?>/paper-machine/">
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
        <![endif]-->     
        <!-- <div class="c-1"><a href="" onclick="openZoosUrl('chatwin');" target="_blank" rel="nofollow" style="color:#d00000;" title="chat online">Service Online</a></div> -->
    <div class="c-2">+86-371-69277066</div>
    <div class="c-3"><a href="mailto:zzhengdachina@gmail.com">zzhengdachina@gmail.com</a></div>
</div>            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>