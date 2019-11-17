<?php
/*
 * Template Name: Company Profile页面模板
 * Template Post Type: post, page, product
 */
?>
<?php
  get_header(); 
 ?>
 <style>
 </style>
 
 <?php get_template_part("template_parts/top"); ?> 
 <?php $queriedObj = get_queried_object(); ?>
 
<div id="s-banner">
  <?php $cats = get_the_category(); ?>
  <img src="<?php echo z_taxonomy_image_url($cats[0]->cat_ID); ?>" alt="<?php echo single_cat_title();?>">
</div>
<div id="m-warp">
	<div class="s-middle">
    	<div class="s-left" id="conLeft">
      <?php get_template_part( "template_parts/about-nav-sider" ); ?>
    <div class="clear"></div>
</div>        <div class="s-right" id="conRight">
        	<div class="rightTitle"><span class="guide"><a href="<?php echo home_url(); ?>">Home</a> » <a href="<?php echo get_category_link($cats[0]->cat_ID); ?>">About Us</a> » Company Profile </span><h1>Company Profile</h1></div>
          <div class="rightMain">
                <div class="about-info2">
                   <!-- 内容开始 -->
                    <div class="rightTop">Zhengzhou Hengda Technology Paper Machinery Co., Ltd. is one of the leading and professional paper pulp equipment manufacturer in China.</div>
                    <div class="about-right"><img onload="size(this)" alt="Hengda Profile" src="<?php echo get_theme_file_uri(); ?>/images/about2_03.jpg"></div>
                    <p>Zhengzhou Hengda Technology Paper Machinery Co., LTD. (Formerly Hongda Papermaking Machine Construction Company) is founded in the year 1980. 
                      It is a manufacturer specializing in making complete sets of waste paper pulp equipment which combines research and development with producing and sales.</p>
                    <p>This company has processing and testing equipment like CNC cutting machine, sand blasting system, 
                      vertical and horizontal CNC lathe, planer milling machine, vertical boring machine, automatic continuous welding machine, 
                      CNC bending machine, CNC shearing machine, veneer reeling machine, 1200 tons of press machine, 
                      high speed dynamic balance correction machine, assembly test table etc. With sophisticated processing machinery and professional technical personnel, 
                      this company can produce super waste paper pulping equipment.</p>
                    <p>The main series of the products are waste paper delivery, waste paper bale breaking and screening, 
                      waste paper pulping, heavy slag cleaning, screening, deinking, concentration, heat dispersion, 
                      pulping, mixing and pulp conveying etc. This company provides customers high efficiency and practical pulp making production line with low carbon environmental protection thought.
                       At present, their products have been sold to more than twenty provinces, cities and autonomous regions in domestic region and exported to Vietnam, 
                       Israel, Malaysia, Indonesia, Cambodia and other countries.</p>
                    <p><strong>Customers mean everything! Everything we do, we do it for your benefit!</strong></p>
                                    <!-- 内容结束 -->
                    <div class="clear"></div>
            	</div>
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
    <input type="hidden" name="pWin" id="pWin" value="<?php echo home_url(); ?>/about-us/service/">
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

<?php get_footer(); ?>