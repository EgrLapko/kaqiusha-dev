<? include "admin/config.php"; 
 include_once("analyticstracking.php");

setcookie ("linkcn", 新到作品,time()+3600,"/","kaqiusha.net.cn");
setcookie ("linkru", новинки,time()+3600,"/","kaqiusha.net.cn");
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
<style type="text/css">
}
</style>
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

		<p class="cn_all_g" ><a href="shedevr.php" style="color:white">巨匠作品</a></p>
	<p1> шедевры</p1>&nbsp;
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
	<p class="headcn"> 新到作品</p>
	<p class="headru">новинки</p>

	<div class="center_t">
	<? 
  			$query =  "SELECT * FROM `new` order by id DESC";
           $edit1 = mysql_query ( $query );$date = 1;
                   $table = "<table class='table' cellspacing='25' ><tr>\n";
     
           while($rowq = mysql_fetch_assoc($edit1)){ 

                          //while($rowq = mysql_fetch_assoc($edit)){
                          // директория
                          		$str = $rowq['namelt'];
								$dir = str_replace(' ', '', $str);
								$img1 = $rowq['img'];
								$img = "data/draw/".$dir."/".$rowq['img'];
								///////
                          $td++;$all++;
                          $name=$rowq['namecn'];
                          $vlk = "vkl".$td;
                          ///////////////////////////////////////////////////////////////////////
                          $query1 =  "SELECT * FROM `$str` WHERE sell = '$img1' ";
                          $edit2 = mysql_query ( $query1 );
                       ////   while($rowq1 = mysql_fetch_assoc($edit2)){ 
                       ///   $disc1=$rowq1['disccn'];
                       ///   $disc = str_replace('"', '', $disc1);

                       ///   }
							/////////////////////////////////////////////////////////////////
                          if ($date == $rowq['date']) {}//$table .="<tr>\n";}
                          else { $date = $rowq['date'];

                         
            $table .= "<tr ><td colspan='4' style='width:auto'><img style='padding:0 20px 8px 20px;box-shadow:none;' height='1' src='img/lineblack.png' width='320' /><span class='date'>$date</span><img style='padding:0 20px 8px 20px;box-shadow:none;' height='1' src='img/lineblack.png' width='320' /></td></tr>";
							$td = 1;	}
			 $table .= '<td ><a target="_blank" href="javascript:dialog('."'$img','$name','$disc','',600)".'">';
             $table .= " <img tabindex='0' style='' src = '".$img."'/></a><p><a target='_blank' href='cardartist.php?artbio=".$rowq['namelt']." '><strong>".$rowq['namecn']."</strong></a><br>";
             $table .= "<span>".$rowq['namelt']."</span></td>\n";
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
