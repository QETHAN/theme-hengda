<?php
/*
 * Template Name: 联系反馈模板
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
<div class="rightTitle"><span class="guide"><a href="http://www.hengdapapermachine.com">Home</a> » <?php
$get_cat        = get_the_category();
$first_cat      = $get_cat[0];
$category_name  = $first_cat->cat_name;
$category_link  = get_category_link( $first_cat->cat_ID ); ?>
<a href="<?php echo esc_url( $category_link ); ?>" title="<?php echo esc_attr( ucfirst(strtolower($category_name)) ); ?>"><?php echo esc_html( ucfirst(strtolower($category_name)) ); ?></a> » Feedback</span><h1>Feedback</h1></div>
    
<div class="about-info">
                <p class="aboutinfo">Zhengzhou Hengda can offer customers complete paper pulp equipment service with rich experience. We are aiming at building a world brand in paper making &amp; pulping field with professional skill and positive innovation spirit.</p>
                <p>If you have any requirements or questions, please leave a message, we will reply you as soon as possible!</p>
                <p>You can call us directly:<font style="font-size: 14px; color: rgb(255,0,0)">+86-371-5512 9198</font>.</p>
                <p>&nbsp;</p>
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
        <input type="hidden" name="pWin" id="pWin" value="http://www.hengdapapermachine.com/contact-us/feedback/">
        <input type="hidden" name="Act" value="Inquiry">
        <input type="hidden" name="iLang" value="en">
        <table cellspacing="0" cellpadding="0" width="450" border="0">
            <tbody>
                <tr>
                    <td colspan="3">
                    <div class="form-top">&nbsp;My location: <input size="45" name="uCountry" onmouseover="this.focus();" onfocus="if(this.value=='* Country') this.value='';" placeholder="Please fill out your country or region" type="text"></div>
                    </td>
                </tr>
                <tr>
                    <td style="height: 10px" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td>*Name:</td>
                    <td><input name="userName" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* Name') this.value='';" placeholder="Name (required)" required="required" oninvalid="setCustomValidity('Please input your Name!');" oninput="setCustomValidity('');"></td>
                </tr>
                <tr>
                    <td>Tel:</td>
                    <td><input name="userTel" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* Tel') this.value='';" placeholder="Tel"></td>
                </tr>
                <tr>
                    <td>*E-mail:</td>
                    <td><input name="userEMail" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* E-mail') this.value='';" placeholder="Email (required)" required="required" oninvalid="setCustomValidity('Please input your E-mail!');" oninput="setCustomValidity('');"></td>
                </tr>
                <tr>
                    <td>Company:</td>
                    <td><input name="Company" type="text" onmouseover="this.focus();" onfocus="if(this.value=='* Company') this.value='';" placeholder="Company"></td>
                </tr>
                <tr>
                    <td>*Message:</td>
                    <td rowspan="3"><textarea name="Message" cols="48" onfocus="if(this.value=='*Please leave your message') this.value='';" placeholder="Message (required)" required="required" oninvalid="setCustomValidity('Please input your Message!');" oninput="setCustomValidity('');"></textarea></td>
                </tr>
                <tr>
                    <td style="height: 20px" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td style="height: 20px" colspan="3">&nbsp;</td>
                </tr>
                <tr>
                    <td valign="middle" colspan="2"><input style="height: 25px; width: 80px; color: rgb(255,255,255); text-align: center; line-height: 25px; background-color: rgb(0,112,204)" type="submit" name="submit" value="Submit">&nbsp;&nbsp;<input style="height: 25px; width: 80px; color: rgb(68,68,68); text-align: center; line-height: 25px; background-color: rgb(203,203,203)" type="reset" name="reset" value="Reset"></td>
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
        <p><img onload="size(this)" alt="Feedback" src="http://www.hengdapapermachine.com/wp-content/themes/hengdapapermachine/images/contant3.jpg"></p>
        <div style="height: 230px; width: 220px; float: right; clear: right"><img onload="size(this)" alt="Contact" src="http://www.hengdapapermachine.com/wp-content/themes/hengdapapermachine/images/contant2.jpg"></div>
        <p>If you are interested in our products, welcome to our company or our local offices, you can also consult via telephone or email. We will offer you product details and working knowledge. You will not only get high quality equipment with competitive price but also intimate service.</p>
        <p>&nbsp;</p>
        <p><strong>Sales Hotline: +86-371-69277066</strong></p>
        <p>If you want to contact us for free immediately: please click <a rel="nofollow" target="_blank" onclick="openZoosUrl('chatwin');" href="" title="chat online"><strong>Free online service</strong></a>.</p>	
        <div class="clear"></div>
    </div>
    <div class="clear"></div>
  </div>
  <div class="clear"></div>
</div>
<div class="clear"></div>
</div>