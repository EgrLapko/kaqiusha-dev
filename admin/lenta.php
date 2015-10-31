<? include "config.php";
if (!$uploadfile) $uploadfile = '../test/data/artnew/photoid/noimg.png';
$result = mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM lenta ");
$num_rows = mysql_num_rows($result);
				if( isset( $_POST['ins'] ) ) {
			$id = $_POST['insbox'];
			$query =  "SELECT * FROM  `lenta` WHERE id = '$id' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
			$edit = $row; 
			}
			}
			// -----------------------------------------------------------удаление из базы
			 if( isset( $_POST['Del'] ) ) {
			 $id = $_POST['insbox'];
			 			$query =  "SELECT * FROM  `lenta` WHERE id = '$id' ";
			 			            $del = mysql_query ( $query );
			 			                         while($row = mysql_fetch_assoc($del)){
			 			                         $ddir = "../data/news/".$row['date'];
			 			                         rmdir("$ddir");
			 			                         }



			 $result = "DELETE  FROM `lenta` WHERE id =' $id' ";
			 $a = mysql_query ($result);
			  if($a) {
                  
                } else{
                    echo "Ошибка добавления : " . mysql_error();
                }

			 $row = NULL;
			}


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/jquery.rollbar.css" rel="stylesheet" />
<link href="styles.css" rel="stylesheet" type="text/css" />
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
</head>

<body>
<? //------------------------------------------очистка формы
	if( isset( $_POST['reset'] ) ) {
 $edit = NULL;
 }
 ?>
<div class="content" name="content">
	<div class="header">
		<img alt="" class="logo" height="206" src="img/Logo.png" width="832" />
	</div>
			<div class="nav">
			<a href="default.php">
			<p> ХУДОЖНИКИ CCCP</p></a>
			<a href="custom.php">
			<p>ПРИКЛАДНОЕ ИСКУСТВО</p></a>
						<a href="art_new.php">
			<p>СОВРЕМЕННЫЕ ХУДОЖНИКИ</p></a>

			</div>
			<div class="nav_l">

			
		</div>

	<div class="center" name="center">
		
		<div class="tab">
			<table cellpadding="2" style="width: 100%">
				<tr>
					<td class="tr" colspan="4">Новости</td>
				</tr>
			</table>
			<form action="creat_news.php" class="form-art" method="post" name="art">
				<table cellpadding="2" style="width: 100%">
					<tr>
					<tr class="tr">
						<td style="width: 70px;">Тема</td>
						<td colspan="2">
						<textarea cols="60" name="theme" rows="1"><? echo $edit['theme'];?></textarea></td>
					</tr>
					<tr class="tr">
						<td colspan="3">Новость</td>
					</tr>
					<tr>
						<td class="tr" colspan="3">
						<textarea cols="100" name="news" rows="8"><? echo $edit['news'];?></textarea>
						</td>
					</tr>

					</tr>

					<tr>
						<td><input type="submit" value="Записать" /></td>
						<td style="width: 70px"></td>
						<td style="">
						<input  style="float: right" name="reset" type="reset" value="Очистить" /></td>
					</tr>
					<tr>
						<td>
						<input name="id" type="hidden" value="<? echo $apend ?>" />
						</td>
						<td style="width: 70px">
						<input name="editid" type="hidden" value="<? echo $edit['id']; ?>" />
						</td>
					</tr>
				</table>
			</form>
			<form action="" method="post" name="">
				<div id="example2" class="example" style="width:100%">
	<?
// выод художников из базы
		 $sqlbio = "SELECT * FROM  `lenta` ORDER BY id DESC";
$databio = mysql_query ( $sqlbio );
             while($bio = mysql_fetch_assoc($databio)){
   $bio1= $bio;
  
        
 	echo ' <p class="noviny"> ';
 	echo '<img alt="" style="padding-bottom: 15px;height:2px" src="../img/lineblack.png" width="100%"/>';
 	echo '<span class="span">'.$bio1['date'].' '.$bio1['theme'].' </span> <br>';
	echo '<span >'.$bio1['news'].' </span> <br>'; 
	$mdir = "../data/news/".$bio1['date'];
	$f = scandir($mdir);
		if (!$f) { echo "<p><button name='Del' type='submit' value=".$bio1['id']."/>Удалить</button></p>";}
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
             				echo $table;  echo "<p><button style='float: right; margin-top: -20px; margin-right: 50px;' name='Del' type='submit' value=".$bio1['id'].">Удалить</button></p>";
 


 
   } 
    }   
    ?>
   </div> 
   <? if( isset( $_POST['Del'] ) ) {
   			$id=$_POST['Del'];
   			echo $id;
			 $result = "DELETE  FROM `lenta` WHERE id ='$id' ";
			  $a = mysql_query ($result);
			  header ("Location: lenta.php");} 
			  ?>
			</form>
			<?
			 ///-----удаление 
  
			  ///-------
//$query = "SELECT * FROM `art` WHERE 1";
//$sql = "SELECT * FROM `art` ORDER BY id DESC limit 1";
//$result = mysql_query ( $sql );
   
//          while ($row1 = mysql_fetch_assoc($result))
//{ 
//echo echo $row1 ['photoid'];
//echo $row1 ['nameru'];
//echo $row1 ['namecn'];
//echo $row1 ['honorru'];
//echo $row1 ['honorcn'];
//echo $row1 ['years'];
//echo $row1 ['biogru'];
//echo $row1 ['biogcn'];
//echo $row1 ['photoid'];
//}

      
   $link = mysql_connect($host, $username, $password);
mysql_close ( $link );

?></div>
	</div>
</div>

</body>

</html>
