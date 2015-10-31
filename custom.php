<? include "admin/config.php"; 
 include_once("analyticstracking.php");

$type = $_GET['type'];
$class = $_GET['class'];
$classcn = $_GET['classcn'];
if (!$classcn) $classcn="应用艺术";
if (!$class) $class="прикладное искуство";

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/jquery.rollbar.css" rel="stylesheet" />
<link href="styles.css" rel="stylesheet" type="text/css" />
<script  src="/js/dialog.js" type="text/javascript"></script>
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
<title>应用艺术</title>
</head>

<body>
	<div class="header">
</div>

<div class="contentall" name="content">
<div class="nav_all">
		<p class="cn"><a href="introartist.php"> 苏联画家作品</a></p>
	<p1>художники СССР</p1>
				<p class="cn" ><a href="allnew.php">当代作品</a></p>
	<p1 >Современная живопись</p1>
									<p class="cn"><a href="custom.php">应用艺术</a></p>
	<p1>прикладное</p1>

					
					<span>
					
				<img style="margin-top:35px" width="160" height="1"  src="img/lineblack.png"   /></span>


		<p class="cn" style="padding-top:50px">
		<a href="custom.php?type=farfor&class=фарфор&classcn=陶瓷"> 陶瓷</a></p>
	<p1>фарфор</p1>
				<p class="cn"><a href="custom.php?type=metal&class=метал&classcn=金属制品"> 金属制品</a></p>
	<p1>метал</p1>
			<p class="cn"> <a href="custom.php?type=sereb&class=изделия из серебра&classcn=银饰品">银饰品</a></p>
	<p1>изделия из серебра</p1>
			<p class="cn"><a href="custom.php?type=yant&class=изделия из янтаря&classcn=琥珀制品">琥珀制品</a></p>
	<p1>изделия из янтаря</p1>
			<p class="cn"> <a href="custom.php?type=fal&class=фалеристика&classcn=集邮">集邮</a></p>
	<p1>фалеристика</p1>
			<p class="cn"><a href="custom.php?type=numiz&class=нумизматика&classcn=古币"> 古币</a></p>
	<p1>нумизматика</p1>
				<p class="cn"><a href="custom.php?type=filat&class=филателия&classcn=出版物"> 出版物</a></p>
	<p1>филателия</p1>
			<p class="cn"><a href="custom.php?type=narod&class=народные промыслы&classcn=民间手工"> 民间手工</a></p>
	<p1>народные промыслы</p1>
				<p class="cn"><a href="custom.php?type=any&class=другое&classcn=其它"> 其它</a></p>
	<p1>другое</p1>



	</div>

	<div class="centerall" name="center">
		<a href="index.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /> </a>
	<p class="headcn"> <? echo $classcn ?></p>
	<p class="headru"><? echo $class ?></p>
	<div class="center_t">
	<? 
	
	if (!$type) {$query =  "SELECT * FROM `custom` ";}
	
		else {

  			$query =  "SELECT * FROM `custom` WHERE cat = '$type'";}
           $edit1 = mysql_query ( $query );
          echo '<img alt="" height="1" src="img/lineblack.png" width="781"/>';
                        $table = "<table class='table' cellspacing='25' ><tr>\n";

           while($row = mysql_fetch_assoc($edit1)){

                          // директория
                          		$str = $rowq['namelt'];
								$dir = str_replace(' ', '', $str);
								$img = "data/custom/".$row['img'];
                          $td++;$all++;
                          $vlk = "vklx".$td;
             $table .= '<td style="vertical-align: bottom"><a target="_self" href="javascript:dialog('."'$img','$name','','',600)".'">';
             $table .= "<img tabindex='0' style='zoom' src = '".$img."'/></a>";
             $table .= "<p style='color:white;height:85px'><strong>".$row['disccn']."</strong></p></td>\n";
             			if ($td == 3) {$table.='</tr><tr>'; $td=0;}
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
