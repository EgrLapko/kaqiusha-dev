<? //include "admin/config.php"; 
 include_once("analyticstracking.php");
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/jquery.rollbar.css" rel="stylesheet" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script src="java/jquery.effects.core.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.blind.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.bounce.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.clip.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.drop.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.fold.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.scale.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.slide.min.js" type="text/javascript"></script>
<link rel="stylesheet" type="text/css" href="font.css" />
<script src="java/wb.slideshow.js" type="text/javascript"></script>
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="js/jquery.rollbar.min.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.validate.pack.js"></script>
<script type="text/javascript">
      $(document).ready(function(){
      $("#contactform").validate();
      });
  </script>
<style type="text/css">
.auto-style1 {
	font-size: 24px;
	color: black;
}
</style>
</head>

<body>
	<div class="header">
</div>

<div class="contentall" name="content">
<div class="nav_l" style="padding-top:350px;">  
	
			<p class="cn" style="font-family:'cn'"><a href="about.php">关于我们</a></p>
	<p1>О нас</p1>
		<p class="cn" style="font-family:'cn'"><a href="noviny.php">新闻</a></p>
	<p1>новости</p1>
		<p class="cn" style="font-family:'cn'"><a href="contact.php">联系我们</a></p>
	<p1>контакты</p1>
	</div>

	<div class="centerall" name="center">
		<a href="index.php">
		<img alt="" class="logo" height="206" src="img/Logo.png" width="832" /> </a>
	<p class="headcn"> 联系我们 </p>
	<p class="headru">
	<p1>контакты</p1>
	</p>

	<div class="center_t">
	<p style="  font-size: 32px;  font-weight: 900;  color: white;">
	<a href="http://www.kaqiusha.net.cn">www.kaqiusha.net.cn</a></p>
		<p style="  font-size: 32px;  font-weight: 900;  color: white;">
		<a href="mailto:info@kaqiusha.net.cn"><span class="auto-style1">EMAIL:</span><span style="font-family:red_octoberregular; font-size:24px;color:black"></span>
		info@kaqiusha.net.cn</a></p>
		<p style="  font-size: 32px;  font-weight: 900;  color: white;">
		<span style=" font-size:24px;color:black">
		TEL:</span> 
13366263263 – 赵真</p>
		<p style="  font-size: 32px;  font-weight: 900;  color: white;">
		<span style=" font-size:24px;color:black">
		TEL:</span>
18401762408 – 卡佳</p>
<p style="  font-size: 32px;  font-weight: 900;  color: white;">
		<span style=" font-size:24px;color:black">
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
		TEL:</span>
18800022706 – 李树苹</p>

	<div class="textdiv" >
<div id="contact-wrapper">
  <form method="post" action="mail.php" id="contactform">
  <div>
  <label for="name"><strong>Name:</strong></label>
  <input type="text" size="50" name="contactname" id="contactname" value="" />
  </div>
 <div>
  <label for="email"><strong>Email:</strong></label>
  <input type="text" size="50" name="email" id="email" value="" class="required email" />
  </div>
 <div>
  <label for="message"><strong>Message:</strong></label>
  <textarea rows="5" cols="50" name="message" id="message"></textarea>
  </div>

  <input type="submit" value="Send Message" name="submit" />
  </form>
  </div>

</div>
		</div>
		<div class="footer">
				<p><span>
				<img alt="" height="2" src="img/lineblack.png" width="181"  /></span></p>
				<p class="cn_f" >联系我们</p>
				<p class="cont">контакты</p>
				<p class="email"><strong>info@kaqiusha.net.cn</strong></p>
				<p class="tel"><strong>13366263263</strong></p>
			</div>
		
	</div>
</div>

</body>

</html>
