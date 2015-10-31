<? 
include "config.php";
$img = $_GET['img'];
$id = $_GET['id'];


if (!$uploadfile) $uploadfile = '../data/art/photoid/noimg.png';
$mdir ="../data/custom/";

      ///------------------------------------------------------------------ подсчет строк
$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM `custom` ";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
//-------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------ выбор из таблицы картин
$sql = "SELECT * FROM `custom` ORDER BY id DESC";
   $resultall = mysql_query ( $sql );
   // -------------------------------------------------------------------------------------------------------
  //-------------------------------------------------------------------------------- подмена картинки
if (!$img) {
$uploadfile = '../data/art/photoid/noimg.png';}
else {
	$uploadfile = $mdir.$img; $apend = $img;
	$sql = "SELECT * FROM `custom` WHERE id ='$id'";
	   $correct = mysql_query ( $sql );
          while($row = mysql_fetch_assoc($correct))
          {        
          $corr = $row;
          }
	}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<link href="css/jquery.rollbar.css" rel="stylesheet" />
<script src="js/jquery-1.7.2.min.js" type="text/javascript"></script>
<script src="js/jquery.mousewheel.js" type="text/javascript"></script>
<script src="js/jquery.rollbar.min.js" type="text/javascript"></script>
<link href="styles.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
	  $(document).ready(function(){
	  	$('#example2').rollbar({zIndex:80}); 
	  	$('').rollbar({zIndex:100});
	  	$('').rollbar({zIndex:100});

	  });
	</script>

</head>

<body>

<div class="content" name="content" style="height:800px">
	<div class="header">
	
		<a href="default.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /></a></div>
		<div class="nav">
			<a href="default.php">
			<p> ХУДОЖНИКИ CCCP</p></a>
			<a href="lenta.php">
			<p>НОВОСТИ</p></a>
						<a href="art_new.php">
			<p>СОВРЕМЕННЫЕ ХУДОЖНИКИ</p></a>

			</div>

		<div class="nav_l">	
						<p1>РАБОТЫ&nbsp; <? echo "($num_rows)"; ?></p1>
<form name='allcustom' action='#' method='post'>
				<div id="example2" class="example">	

	
	<? 
	if (isset($_POST['del2'])) {
	 $idd = $_POST['insbox'];
   						 $del1 =  "SELECT *  FROM `custom` WHERE id ='$idd' ";
                       $del = mysql_query ( $del1 );
   			          while ($rowd = mysql_fetch_assoc($del))
   			          {
   			          $imgd = $rowd['img'];
   			          }
					$uploadfile="../data/custom/".$imgd;
				unlink($uploadfile); 
				$uploadfile = '../data/artnew/photoid/noimg.png';
				
		 $result = "DELETE  FROM `custom` WHERE id ='$idd' ";
			 $a = mysql_query ($result);
			  if($a) {
                  
                } else{
                    echo "Ошибка добавления : " . mysql_error();
                }
}
			///------------------------------------------------------------------- all draw
   $table = "<table style='width:80%;border:0; color:orange; margin-left: 0px;'>\n";
          while($row = mysql_fetch_assoc($resultall))
           { 
           $img = $mdir.$row['img'];
             $table.="<tr>\n";
             $table .= "<td ><input class='effect'  type='checkbox' name='insbox' value='".$row['id']."'></td>\n";
             $table.= "<td ><a href='custom.php?img=".$row['img']."&id=".$row['id']."'><img style='max-height:85px;max-width:170px' src='".$img."'></a></td></tr>\n";     


     $table .= "</tr>\n";
              }

 $table .= "</table>\n";
      $row =NULL;
   echo $table;
   

   ?>	
			

			</div>   		 
			 <table>
			<tr><td colspan="2"><input  name='del2' type='submit' value='Удалить'/></td>
			</tr>
			</table>
 </form>
		</div>
			<div class="center" name="center" style=" ">
	<div class=" tab" style="padding-top:150px">
		
	<div class="tab" style="padding:0">
			<table cellpadding="2" style="width: 100%">
				<tr>
					<td class="tr" colspan="4">добавить </td>
				</tr>
			</table>
			<form action="" enctype="multipart/form-data" method="post" name="upload">
				<?php //---------------------------------------- --------------------------удаление фото
				if( isset( $_POST['del1'] ) ) {
				unlink($uploadfile);
				}

	if( isset( $_POST['upload'] ) ) {
 // это папка, в которую будет загружаться картинка
$apend=basename($_FILES['userfile']['name']);//rand(100,1000).'.jpg'; 
$uploadfile = "../data/custom/"."$apend"; // в переменную $uploadfile будет входить папка и имя изображения

//if($_FILES['userfile']['size'] != 0 and $_FILES['userfile']['size']<=1024000) {// Здесь мы проверяем размер если он более 1 МБ
move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile); // Здесь идет процесс загрузки изображения
$size = getimagesize($uploadfile); // с помощью этой функции мы можем получить размер пикселей изображения
//if ($size[0] < 601 && $size[1]<5001) { // если размер изображения не более 600 пикселей по ширине и не более 5000 по высоте
//echo "Файл загружен. Путь к файлу: <br><b>http://ВашСайт.РУ/$uploadfile</b>";
//}else {echo "Размер пикселей превышает допустимые нормы (ширина не более - 600 пикселей, высота не более 5000)"; 
//unlink($uploadfile); //удаление файла
//}
//} else {echo "Файл не загружен, верьнитель и попробуйте еще раз";}
//}else { echo "Размер файла не должен ревышать 1000Кб";}

$size1 = $size[0] .'x' .$size[1];
}
?>
				<table  cellpadding="2" class="table" style="  width: 100%">
					<tr class="tr">
						<td>Загрузка фото</td>
						<td rowspan="2"><input name="userfile" type="file" /></td>
						<td>
						<input name="upload" style="height: 20px" type="submit" value="Загрузить" /></td>
						<td>
						<input name="del1" style="width: 58%; height: 20px" type="submit" value="Удалить" /></td>
					</tr>
				</table>
			</form>
			<form action="cust.php" class="form-custom" method="post" name="custom">
				<table cellpadding="2" class="table" style="width: 100%">
					<tr class="tr">
						<td colspan="3">Описание</td>
					</tr>
					<tr class="tr">		
					<td>
					<img alt="" src="<? echo $uploadfile; ?>" style="max-height: 100px; max-width: 100px" />
                          </td>

					<td style="width: 235px">
					КАТЕГОРИЯ</td>
					<td><? echo $corr['cat']; ?>
					<select required name="cat" >
					<option value="none">Выбрать категорию</option>
					<option value="farfor">Фарфор</option>
					<option value="metal">Метал</option>
					<option value="sereb">Серебро</option>
					<option value="yant">Янтарь</option>
					<option value="fal">Фалеристика</option>
					<option value="numiz">Нумизматика</option>
					<option value="filat">Филателия</option>
					<option value="narod">Народ.пр.</option>
					<option value="any">Другое</option>
					
					</select></td>
					</tr>

					<tr class="tr">
						<td colspan="3">Рус</td>
					</tr>
					<tr>
						<td class="tr" colspan="3">
						<textarea cols="100" name="discru" rows="6"><? echo $corr['discru'];?></textarea>
						</td>
					</tr>
					<tr class="tr">
						<td colspan="3">Кит</td>
					</tr>
					<tr>
						<td class="tr" colspan="3">
						<textarea cols="100" name="disccn" rows="6"><? echo $corr['disccn'];?></textarea></td>
					</tr>
					</table>
					<table class="table">
					
					<tr>
						<td><input type="submit" value="Записать" /></td><td></td><td></td>
						<td style>
						<input  style="float: right" name="reset" type="reset" value="Очистить" /></td>
					</tr>
					<tr>
						<td>
						<input name="id" type="hidden" value="<? echo $apend ?>" />
						</td> 
						<td style="width: 70px">
						<input name="editid" type="hidden" value="<? echo $id; ?>" />
						</td>
					</tr>
				</table>
			</form>
			<?
      
   $link = mysql_connect($host, $username, $password);
mysql_close ( $link );

?></div>

	

		
	</div>
	</div>
	</div>
	

</body>

</html>
