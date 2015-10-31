<? include "admin/config.php"; 
 include_once("analyticstracking.php");

$type = $_GET['type'];
$class = $_GET['class'];
$classcn = $_GET['classcn'];
if (!$classcn) $classcn="应用艺术";
setcookie ("linkcn", 巨匠作品,time()+3600,"/","kaqiusha.net.cn");
setcookie ("linkru", шедевры,time()+3600,"/","kaqiusha.net.cn");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="巨匠作品" name="keywords"/>
<meta content="巨匠作品" name="description"/>
<link href="css/jquery.rollbar.css" rel="stylesheet" />
<script  src="/js/dialog.js" type="text/javascript"></script>
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
<script type="text/javascript">
	  $(document).ready(function(){
	  	$('#example2').rollbar({zIndex:80}); 
	  	$('').rollbar({zIndex:100});
	  	$('').rollbar({zIndex:100});

	  });
	</script>
<script type="text/javascript">
$(document).ready(function()
{
   $("#SlideShow1").slideshow(
   {
      interval: 5000,
      type: 'random',
     effect: 'fade',
      direction: '',
      effectlength: 2000
   });
});
</script>
<title>巨匠作品</title>
</head>

<body>
	<div class="header">
</div>

<div class="contentall" name="content">
<div class="nav_all" style="margin:0">
		<p class="cn"><a href="introartist.php"> 苏联画家作品</a></p>
	<p1>художники СССР</p1>
				<p class="cn" ><a href="allnew.php">当代作品</a></p>
	<p1 >Современная живопись</p1>
									<p class="cn"><a href="custom.php">应用艺术</a></p>
	<p1>прикладное</p1>

					
					<span>
					
				<img style="margin-top:35px" width="160" height="1"  src="img/lineblack.png"   /></span>

		<p class="cn_all_g" ><a href="new.php" style="color:white">新到作品</a></p>
	<p1>новинки</p1>&nbsp;
				<p class="cn_all" style=" padding-top:50px">分类</p>
	<p1>жанры</p1>&nbsp;

		<p class="cn"><a href="category.php?tab=scene&gc=体裁&gr=жанровые сцены"> 体裁</a></p>
	<p1>жанровые сцены</p1>
				<p class="cn"><a href="category.php?tab=history&gc=历史题材&gr=исторические"> 历史题材</a></p>
	<p1>исторические</p1>
			<p class="cn"> <a href="category.php?tab=lenin&gc=列宁主题油画&gr=картины о ленине">列宁主题油画
</a></p>
	<p1>картины о ленине</p1>
			<p class="cn"><a href="category.php?tab=portret&gc=肖像&gr=портрет"> 肖像</a></p>
	<p1>портрет</p1>
			<p class="cn"> <a href="category.php?tab=nature&gc=风景&gr=пейзаж">风景</a></p>
	<p1>пейзаж</p1>
			<p class="cn"><a href="category.php?tab=fruit&gc=景物&gr=натюморт"> 景物</a></p>
	<p1>натюморт</p1>

	</div>

	<div class="centerall" name="center">
		<a href="index.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /> </a>
	<p class="headcn"> 巨匠作品</p>
	<p class="headru">шедевры, значимые картины</p>
	<div class="center_t">
	<? 
	
	if (!$type) {$query =  "SELECT * FROM `shed` ";}
	
		else {

  			$query =  "SELECT * FROM `custom` WHERE cat = '$type'";}
           $edit1 = mysql_query ( $query );
          echo '<img alt="" height="1" src="img/lineblack.png" width="781"/>';
                        $table = "<table class='table' cellspacing='25' ><tr>\n";

           while($row = mysql_fetch_assoc($edit1)){

                          // директория
                          		$str = $row['namelt'];
								$dir = str_replace(' ', '', $str);
								$img = "data/draw/".$dir."/".$row['img'];
								///////
                          $td++;$all++;
                          $name=$row['namecn'];
                         $dd1=$row['disccn'];
                         $vlk = "vkl".$td;
                         $dd = str_replace('"', '', $dd1);



             $table .= '<td >';
             $table .= "<p style='color:white;  margin-bottom: 0;'><a target='_blank' href='cardartist.php?artbio=".$row['namelt']." ' style'font-size:18px>".$row['namecn']."</a></p>";
             $table .= '<a target="_self" href="javascript:dialog('."'$img','$name','$dd','',600)".'">';
             $table .= "<img tabindex='0' style='' src = '".$img."'/>";
             $table .= "<p style='color:black; font-size:15px' >".$row['disccn']."</p></td>\n";
			
             			if ($td == 4) {$table.='</tr><tr>'; $td=0;}
             		}
             			$table.= "</tr>\n";
             			$table .= "</table>\n";
             				echo $table;
           
           			

            

 
	?>
		
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
