<? include "admin/config.php"; 
 include_once("analyticstracking.php");

setcookie ("linkcn", 当代作品,time()+3600,"/","kaqiusha.net.cn");
setcookie ("linkru", 'Современная живопись',time()+3600,"/","kaqiusha.net.cn");

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<meta content="当代作品" name="description">
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
<title>当代作品</title>
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

	</div>

	<div class="centerall" name="center">
		<a href="index.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /> </a>
	<p class="headcn"> 当代作品</p>
	<p class="headru">Современная живопись</p>

	<div class="center_t">
	<? 
	echo $arr;
	$arr=file("alpha.txt");
	for ($i = 0; $i <= count($arr); $i++) 
  { 
  	$alp=($arr[$i]);
  	 $alp=trim($alp);
  			$query =  "SELECT `namelt`, `namecn`, `photoid` FROM `artnew` WHERE LEFT(`namelt`, 1) = '$alp'";
           $edit1 = mysql_query ( $query );
           while($row = mysql_fetch_assoc($edit1)){ $prt = $row;}

            if (!$prt['namelt']) {}
            else {
                 	    echo "<p style='margin:0'><img style='padding:0 20px 8px 20px;' height='1' src='img/lineblack.png' width='320' /><span class='alb'>$alp</span><img style='padding:0 20px 8px 20px;' height='1' src='img/lineblack.png' width='320' /></p>";
             $table = "<table class='table1' cellspacing='25' ><tr>\n";
 				             //$query =  "SELECT * FROM `art` WHERE LEFT(`name`, 1) = '$alp'";
                         $edit = mysql_query ( $query );
                        $td=0;
                          while($rowq = mysql_fetch_assoc($edit)){
                          $td++;$all++;
                          $img = "data/artnew/photoid/".$rowq['photoid'];

             $table .= '<td ><a target="_blank" href="cardartistn.php?artbio='.$rowq['namelt'].'">';
             $table .="<img style='max-width: 145px;  max-height: 175px' src = '".$img."' /></a><br><img style='padding:15px 20px 8px 20px;box-shadow:none; ' height='1' src='img/lineblack.png' width='120' /><p style='color:white; font-size:18px;  margin-bottom: 0;  margin-top: 5px;' ><a target='_blank' href='cardartistn.php?artbio=".$rowq['namelt']." '><strong>".$rowq['namecn']."</strong></a><br>";
             $table .= "<span>".$rowq['namelt']."</span></p></td>\n";
             			if ($td == 3) {$table.='</tr><tr>'; $td=0;}
             		}
             			$table.= "</tr>\n";
             			$table .= "</table>\n";
             				echo $table;
             } $prt = NULL;
           			

            
}
 
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
