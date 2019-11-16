<?php
/*
 * Template Name: Hengda Service页面模板
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
        	<div class="rightTitle"><span class="guide"><a href="<?php site_url(); ?>">Home</a> » <a href="<?php echo get_category_link($cats[0]->cat_ID); ?>">About Us</a> » Our Service </span><h1>Our Service</h1></div>
            <div class="rightMain">
                <div class="about-info2">
                   <!-- 内容开始 -->
                    <div class="rightTop">We will contact our customers at the first time, get the detailed customer requirements, material component, pre-order the operation site, etc, help our customers analyze problems and solve them.</div>
                    <p><strong>Pre-sales Service</strong></p>
                    <p>Offering comprehensive technical and business consultation services;<br>
                    Proposing the most suitable scheme and equipment for our clients;<br>
                    Designing and fabricating targeted products according to the special requirements of clients;<br>
                    Training periodically high qualified service technician.</p>
                    
                    <p><strong>After-sales Service</strong></p>
                    <p>Highly inspecting equipments in every working procedure, quality comes first;<br>
                    Fast &amp; Safe Delivery; mulity-cylinder;<br>
                    Assisting our clients for foundation construction of equipments;<br>
                    Dispatching engineers to install and debug equipments;<br>
                    Training the first-line operators on site;<br>
                    Regularly visit clients to solve production problems;<br>
                    Providing life-long maintenance service;<br>
                    Providing technical exchanging.</p>
                    
                    <p><strong>Accessories On-line</strong></p>
                    <p>If you have any suggestions or opinions about our products, please leave a message, and we will immediately answer your questions.<br>
                    E-mail: <a href="mailto:zzhengdachina@gmail.com"><strong style="color: #f00">zzhengdachina@gmail.com</strong></a><br>
                    24 hours service hotline: <strong style="color: #f00">+86-371-69277066</strong>
                    </p><p>What we consider first is customer benefit when selling product.</p>
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
<form method="post" action="http://www.leizhanchina.com/mail/leizhan/" onsubmit="return chkInquiry()" name="msgForm" target="msgFrame">
    <input type="hidden" name="pWin" id="pWin" value="http://www.leizhanchina.com/about-us/service/">
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
    <div class="c-2">+86-371-69277066</div>
    <div class="c-3"><a href="mailto:zzhengdachina@gmail.com">zzhengdachina@gmail.com</a></div>
</div>            <div class="clear"></div>
        </div>
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
</div>

<?php get_footer(); ?>