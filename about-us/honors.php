<?php
/*
 * Template Name: Hengda Honors页面模板
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
        	<div class="rightTitle"><span class="guide"><a href="<?php site_url(); ?>">Home</a> » <a href="<?php echo get_category_link($cats[0]->cat_ID); ?>">About Us</a> » Hengda Honors </span><h1>Hengda Honors</h1></div>
          <div class="rightMain">
                <div class="about-info2">
                   <!-- 内容开始 -->
                    <div class="rightTop">Hengda products employs advanced technology, pass ISO9001:2008 International Quality System Certification and BVCertificate and many patents.</div>
                    <div class="about-rongyu4">
                        <p>On Dec.27-30, Hengda attended the 21th Int’l. Exhibition of Pack &amp; Print Machinery  at Tehran, Iran.<br>
                        On October.22-24, Hengda attended PAPER-ME 2014 Exhibition at Cairo International Center in Egypt.<br>
                        During July.30-August.1, Hengda attended the 11th International Pulp &amp; Paper Industry Expo-China in Guangzhou, China.<br>
                        &nbsp;</p>
                    </div>
                    <div class="about-rongyu3">
                        <p>On October.17, Hengda obtained CQC-ISO9001:2008 GB/T19001-2008 Certification of Quality Management System.<br>
                        On Sep.23-25, Hengda attented the CIPTE 2013-China International  Paper Technology Exhibition and Conference at Beijing, China.<br>
                        On August.21-23, Hengda attended the 10th International Pulp &amp; Paper Industry Expo-China in Guangzhou, China.<br>
                        On June.6-8, Hengda attened the Vietnam paper 2013.<br>
                        In June.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Rotary Drum Type Rotor of Mid Consistency Pressure Screen patent certificate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Inflow Perssure Screen Rotor Adjusting Structure patent certificate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained High Density Cleaner  patent certificate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Slag Tank of High Density Cleaner  patent certificate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Inner Cone of High Density Cleaner patent certicate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Fiber Separator patent certificate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Cutter of Fiber Separator patent certicate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Agitator patent certificate.<br>
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hengda obtained Sieve Plate of Hydrapulper patent certificate.<br>
                        On March.18-20, Hengda participated the Shandong (International) Technique and Equipment Exhibition of Pulp &amp; Paper Industry.<br>
                        On March.13-15, Hengda participated in the 2nd Western China (Chengdu) Pulp and Paper Technology and Equipment, Paper, Tissue trade fair.<br>
                        On Feb.1, Hengda obtained BV Certification.<br>
                        
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
                    </div>

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