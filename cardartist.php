<? include "admin/config.php"; 
 include_once("analyticstracking.php");

$linkcn = $_COOKIE['linkcn'];
$linkru = $_COOKIE['linkru'];
$art = $_GET['artbio'];
$sqlbio = "SELECT * FROM  `art` WHERE namelt = '$art' ";
$databio = mysql_query ( $sqlbio );
             while($bio = mysql_fetch_assoc($databio)){
   $bio1= $bio;         
   $tabimg = $bio['namelt'];
 
   }
$sqlimg =  "SELECT * FROM  `$tabimg`";
$dataimg = mysql_query ( $sqlimg );


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
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
<title><? echo $bio1['namecn']; ?></title>
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

		<p class="cn_all_g" >
				<p class="cn_all" style=" padding-top:50px">分类</p>
	<p1>жанры</p1>&nbsp;

		<p class="cn"><a href="category.php?tab=scene&gc=体裁&gr=жанровые сцены"> 体裁</a></p>
	<p1>жанровые сцены</p1>
				<p class="cn"><a href="category.php?tab=history&gc=历史题材&gr=исторические"> 历史题材</a></p>
	<p1>исторические</p1>
			<p class="cn"> <a href="category.php?tab=lenin&gc=列宁主题油画&gr=картины о ленине">列宁主题油画</a></p>
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
	<p class="headcn"> 苏联画家作品</p>
	<p class="headru">Картины художников СССР</p>
	<p class="headcn">生平</p>
	<p style="margin-bottom:0" class="headru">Биография</p>
	

		<div class="center_t">
		<p class="biog">
		<img alt="" style="padding-bottom: 15px;height:2px" src="img/lineblack.png" width="100%"/>
				<img  class="bioimg" alt="" src="data/art/photoid/<? echo $bio1['photoid']; ?>" />
    <span class="span"><? echo $bio1['namecn']; ?> </span> <br>
	<span class="span">	(<? echo $bio1['years']; ?>) </span> <br> 
		<span class="span">	<? echo $bio1['honorcn']; ?> </span> <br> <br> 

	       <? echo $bio1['biogcn']; ?>
				<img alt="" style="padding-top: 15px;height:2px" src="img/lineblack.png" width="100%"/>

		</p>
		
		  <?              $table = "<table class='table' cellspacing='25' ><tr>\n";
 				             //$query =  "SELECT * FROM `art` WHERE LEFT(`name`, 1) = '$alp'";
                        $td=0;
                        $sqlimg =  "SELECT * FROM  `$tabimg`";
                        $dataimg = mysql_query ( $sqlimg );
							if ($dataimg) {
                          while($rowq = mysql_fetch_assoc($dataimg)){
                          // директория
                          		$str = $rowq['namelt'];
								$dir = str_replace(' ', '', $str);
								$img = "data/draw/".$bio1['draw']."/".$rowq['sell'];
								///////
                          $td++;$all++;
                          $vlk = "vklx".$td;
             $table .= '<td ><a target="_self" href="javascript:dialog('."'$img','$name','','',600)".'">';

             $table .= "<img tabindex='0' style='' src = '".$img."'/></a><p style='color:black;'>".$rowq['disccn']."</p></td>\n";
             			if ($td == 3) {$table.='</tr><tr>'; $td=0;}
             		}
             			$table.= "</tr>\n";
             			$table .= "</table>\n";
             				echo $table;
             				}
 ?>

					<?	////<img alt="" height="1" src="img/lineblack.png" width="781"/>
						///<p class=" headru" style=" font-size:25px; padding-top:30px">ПРОДАНО</p>?>

 <?              $tableb = "<table class='table' cellspacing='25' ><tr>\n";
 				             //$query =  "SELECT * FROM `art` WHERE LEFT(`name`, 1) = '$alp'";
                        $td=0;
                        $sqlimg =  "SELECT * FROM  `$tabimg`";
                        $dataimg = mysql_query ( $sqlimg );

                          while($rowq = mysql_fetch_assoc($dataimg)){
                          // директория
                          		$str = $rowq['namelt'];
								$dir = str_replace(' ', '', $str);
								$img = "data/draw/".$bio1['draw']."/".$rowq['buy'];
								///////
                          $td++;$all++;
             $tableb .= '<td ><a target="_self" href="javascript:dialog('."'$img','$name','','',600)".'">';
             $tableb .= "<img tabindex='0'  src = '".$img."'/></a><p style='color:white;>".$rowq['disccn']."</p></td>\n";
             			if ($td == 3) {$table.='</tr><tr>'; $td=0;}
             		}
             			$tableb.= "</tr>\n";
             			$tableb .= "</table>\n";
             			//	echo $tableb;
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
