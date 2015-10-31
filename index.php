<?  ///header("Location: http://www.kaqiusha.net.cn/contact.php");
include "admin/config.php";
 include_once("analyticstracking.php");


$query =  "SELECT * FROM  `new` ORDER BY id DESC LIMIT 10 ";
$new = mysql_query ( $query );

            $music = $_COOKIE['music'];
            if (!$music) {
            $m = "<audio src='audio/kaqiu.mp3'  autoplay  type='audio/mp3'></audio>";
            setcookie('music',1,time()+3600,'/', 'kaqiusha.net.cn');
            }
            else {
            $m = NULL;
            }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="art gellery, artist, USSR" name="keywords"/>
<meta content="art gellery, artist, USSR" name="description"/>
<link href="styles.css" rel="stylesheet" type="text/css" />
<link href="css/jquery.rollbar.css" rel="stylesheet" />
<script type="text/javascript" src="java/jquery-1.4.2.min.js"></script>
<script src="java/jquery.effects.core.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.blind.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.bounce.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.clip.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.drop.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.fold.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.scale.min.js" type="text/javascript"></script>
<script src="java/jquery.effects.slide.min.js" type="text/javascript"></script>
<script src="java/wb.slideshow.js" type="text/javascript"></script>
<script src="js/jquery.rollbar.min.js" type="text/javascript"></script>
<script src="js/jquery.mousewheel.js" type="text/javascript"></script>
<script type="text/javascript">
	</script>
<script type="text/javascript" src="js/scriptjava.js"></script>
<script type="text/javascript">
$$r(function() {
	$$i({
		create:'script',
		attribute: {
			'type':'text/javascript',
			'src':'js/NRMSLib.js'
		},
		insert:$$().body,
		onready:function () {//выполняю только после загрузки скрипта
			$$e.add($$('mp3button'),'click',playmp3rand);//добавляю событие кнопке после загрузки скрипта
		}

	});
});
var playmp3rand = function (event) {
	modules.sound.stop();//запукаю случайную музыку
	switch($$s.randnum(1,1)) {//случайное число от 1 до 3 включительно
		case 1:
			modules.sound.start({'music': 'audio/'+$$s.randnum(1,8)+'.mp3'});
		break;

	}
	$$('sound_s_el_m').$$('width','1px').$$('height','1px').$$('overflow','hidden');//эти параметры трогать не нужно
}

</script>

<title>ART</title>
<link rel="stylesheet" type="text/css" href="font.css" />


</head>

<body>

  

	<div class="header" >
</div>

<div class="content" name="content">
<div class="nav_l">
		<p class="cn"><a href="shedevr.php">巨匠作品</a></p>
	<p1>шедевры, значимые картины</p1>
		<div id="SlideShow1" class="SlideShow1">
<img style="border-width:0;left:0px;top:0px;width:163px;height:230px;" src="images/LevitanPic.jpg" alt="" title=""/>
<img style="border-width:0;left:0px;top:0px;width:163px;height:230px;display:none;position:relative;" src="images/Palkan.jpg" alt="" title=""/>
<img style="border-width:0;left:0px;top:0px;width:163px;height:230px;display:none;position:relative;" src="images/SorokaOne.jpg" alt="" title=""/>
<img style="border-width:0;left:0px;top:0px;width:163px;height:230px;display:none;position:relative;" src="images/TomenOne.jpg" alt="" title=""/>
<img style="border-width:0;left:0px;top:0px;width:163px;height:230px;display:none;position:relative;" src="images/YablonFive.jpg" alt="" title=""/>
</div>
		
		<div id="example" class="example1">
				<img alt="" class="lineb"  src="img/lineblack.png"  />
			<p class="cn"><a href="new.php"> 新到作品</a></p>
					<p1>новинки</p1>
					<div id="example2" class="example">

		<?              while($row = mysql_fetch_assoc($new)){
		$str = $row['namelt'];
$dir = str_replace(' ', '', $str);

				$img = "data/draw/".$dir."/".$row['img'];

echo '<p><img  style="max-width:130px; max-height:100px" alt="" src="'.$img.'"/></p>';
echo '<p class="cnn"><a href="cardartist.php?artbio='.$row['namelt'].'">'.$row['namecn'].'</a></p1>';
echo '<p class="dtn">'.$row['date'].'</p2>';

}
 ?>
 </div>
		</div>
	</div> 
<div class="nav">  
	
			<div class="patefon"  >
			<p>
			<span id="mp3button" style="cursor:pointer;" >
			<img alt="" style="padding-bottom:10px" height="54" src="img/play.png" width="55"/>
			</span>
			<span id="stop" style="cursor:pointer"  >
			<img  alt="" height="54" src="img/stop.png" width="55"/>
			<script type="text/javascript">
document.getElementById('stop').onclick = function() {
     modules.sound.stop()
}
</script>

			</span>

			</p>
			&nbsp;</div>
			
		<p class="cn"><a href="about.php">关于我们</a></p>
	<p1>О нас</p1>
		<p class="cn"><a href="noviny.php">新闻</a></p>
	<p1>новости</p1>
		<p class="cn"><a href="contact.php">联系我们</a></p>
	<p1>контакты</p1>
	</div>
	<div class="center" name="center">
		<a href="index.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /> </a>

	

	
		<div class="center_t">			
	<p class=" ct1"><a href="custom.php">应用艺术</a></p>

			<span class="ct2"><a href="introartist.php">苏联画家作品</a></span>
			<p class="ct3"><a href="allnew.php">当代作品</a></p>

			</div>	

		<div class="center_tt1">			
		<p1>прикладное искуство</p1>
		<span class="p3">картины художников СССР</span>

		<p2>современная живопись</p2></div>
		

		<div class="center_w">
<div class="zoom">
				<a href="custom.php">
				<img alt="" class="iw1"  src="img/iw1.jpg"  /></a>
				<a href="allnew.php">
				<img alt="" class="iw2"  src="img/iw3.jpg" height="335" width="231"  /></a>
				<a href="introartist.php">
				<img alt="" class="iw3"  src="img/iw2.jpg" /></a>
				</div>

			<div class="foot">
				<p><span>
				<img alt="" height="3" width="170" src="img/linered.png"  style="padding-bottom:3px" /></span></p>
				<p class="cn_f" >
					<img alt="" height="28" src="img/sp.png" width="22" style="  position: absolute;  margin-left: -25px;"/>
						<span>联系我们</span>				
						<img alt="" height="28" src="img/sp.png" width="22"  style="  position: absolute;  " />
					</p>
				<p class="cont">контакты</p>
				<p class="email"><strong>info@kaqiusha.net.cn</strong></p>
				<p class="tel"><strong>13366263263</strong></p>
			</div>
		</div>
		
	</div>
</div>
<? echo $m; ?>
</body>

</html>
