<? include "admin/config.php"; 
 include_once("analyticstracking.php");



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
</head>

<body>
	<div class="header">
</div>

<div class="contentall" name="content">
<div class="nav_l" style="padding-top:350px;">  
	
			<p class="cn" style="font-family:'cn'"><a href="about.php">关于我们</a></p>
	<p1>О нас</p1>
		<p class="cn" style="font-family:'cn'">新闻</p>
	<p1>новости</p1>
		<p class="cn" style="font-family:'cn'"><a href="contact.php">联系我们</a></p>
	<p1>контакты</p1>
	</div>

	<div class="centerall" name="center">
		<a href="index.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /> </a>
	<p class="headcn"> 新闻</p>
	<p class="headru">Новости</p>
	

		<div class="center_t">
		<? $sqlbio = "SELECT * FROM  `lenta` order by id DESC ";
$databio = mysql_query ( $sqlbio );
             while($bio = mysql_fetch_assoc($databio)){
   $bio1= $bio; 
   $td = 0;        
 	echo ' <p class="noviny"> ';
 	echo '<img alt="" style="padding-bottom: 15px;height:2px" src="img/lineblack.png" width="80%"/><br>';
 	echo '<span class="span">'.$bio1['theme'].' </span> <br>';
	echo '<span >'.$bio1['news'].' </span> <br>'; 
	$mdir = "data/news/".$bio1['date'];
	$f = scandir($mdir);
		if (!$f) {}
	else {

              $table = "<table class='table' cellspacing='25' ><tr>\n";

foreach ($f as $file){
    if(preg_match('(jpg)', $file)){
                                  $td++;$all++;
                          $vlk = "vklx".$td;
                          $img =$mdir."/".$file;
                          

             $table .= '<td >';
             $table .="<img  src = '".$img."' />";
             $table .= "</td>\n";
             			if ($td == 3) {$table.='</tr><tr>'; $td=0;}
             			}
}             			    
         			$table.= "</tr>\n";
             			$table .= "</table>\n";
             				echo $table;
 


 
   } 
    }

?>
		
		

					<!--	<img alt="" height="1" src="img/lineblack.png" width="100%"/> !-->



		
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
