<? 
include "config.php";
$img = $_GET['img'];
$id = $_GET['id'];
$check = '<input type="checkbox" name="title" value="1" >';
$styletd = '<td >';		


///-------------------------------------------------------------------- данные по художнику
$art = $_COOKIE['art'];

$query =  "SELECT * FROM  `art` WHERE nameru = '$art' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
			$edit = $row; 
			$file = "../data/art/photoid/".$row['photoid'];		
			if ($row['gdraw']) $title = "../data/draw/".$row['draw']."/".$row['gdraw'];		
			$tabw = $row['namelt'];
			                                          } 
$mdir = "../data/draw/".$edit['draw'];
$mdir2 = "$mdir/prodano";
setcookie("tabw",$tabw,time()+3600,"/", "kaqiusha.net.cn");
 
      //-----------------------------------------------------------------------------------------------------
      ///------------------------------------------------------------------ подсчет строк
$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM `$tabw` ";
$result = mysql_query($sql);
$num_rows = mysql_num_rows($result);
//-------------------------------------------------------------------------------------------
//------------------------------------------------------------------------------------ выбор из таблицы картин
$sql = "SELECT * FROM `$tabw` ORDER BY id DESC";
   $resultall = mysql_query ( $sql );
   // -------------------------------------------------------------------------------------------------------
   //-------------------------------------------------------------------------------- подмена картинки
if (!$img) {
$uploadfile = '../data/art/photoid/noimg.png';}
else {
	$uploadfile = $mdir."/".$img; $apend = $img;
	$apend = $img;
	$sql = "SELECT * FROM `$tabw` WHERE id ='$id'";
	   $correct = mysql_query ( $sql );
          while($row = mysql_fetch_assoc($correct))
          {        
          $corr = $row;echo $corr['discru'];
          }
                           $sqlch =  "SELECT * FROM  `shed` WHERE img = '$img'";
					$datach= mysql_query ( $sqlch );
					          while($drow = mysql_fetch_assoc($datach)){
					          $yes = $drow['nameru'];}
					if ($yes){
					$check = '<input type="checkbox" name="title" value="1" color:"green" checked="checked">';
					$styletd = '<td style=" background-color: green;">';		
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

</head>

<body>

<div class="content" name="content" style="height:800px">
	<div class="header">
	
		<a href="default.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /></a></div>
		<div class="nav_l">	
						<p1>КАРТИНЫ&nbsp; <? echo "($num_rows)"; ?></p1>
<form name='sell' action='dell.php' method='post'>
				<div id="example2" class="example">	

	
	<?
			///------------------------------------------------------------------- all draw
   $table = "<table style='width:80%;border:0; color:orange; margin-left: 0px;'>\n";
   $table .= "<tr><td><input name='table' type='hidden' value='".$edit['namelt']."'/></td></tr>\n";
          while($row = mysql_fetch_assoc($resultall))
           { 
             $table.="<tr>\n";
             $table .= "<td ><input class='effect'  type='checkbox' name='insbox' value='".$row['id']."'></td>\n";
             $table.= "<td ><a href='draw.php?img=".$row['sell']."&id=".$row['id']."'><img style='max-height:85px;max-width:170px' src='$mdir/".$row['sell']."'></a></td></tr>\n";     


     $table .= "</tr>\n";
              }

 $table .= "</table>\n";
      $row =NULL;
   echo $table;
   ?>	
			

			</div>   		 
			 <table>
			<tr><td colspan="2"><input  name='del' type='submit' value='Удалить'/></td>
			</tr>
			</table>
 </form>
		</div>
		<div class="nav_r">
				<p1>ПРОДАНО</p1>
<form name='buy' action='' method='post'>
				<div id="example2" class="example">	

	<?
// выод художников из базы
	 // ------------------------------------------редактирование данных
			// -----------------------------------------------------------удаление из базы
			 if( isset( $_POST['Delb'] ) ) {
			 $id = $_POST['insbox'];
			 $query =  "SELECT * FROM  ".$edit['namelt']." WHERE id = '$id' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
              if ($row['img']) {  
              	unlink($uploadfile);     
				//$uploadfile = $dir$row['img'];
				                 }
				   				   				 }					
				   									
			 $result = "DELETE   FROM  ".$edit['namelt']." WHERE id = '$id' ";
			 $a = mysql_query ($result);
			  if($a) {} 
                else
                {
                    echo "Ошибка удаления : " . mysql_error();
                }
                                          
							
			 $row = NULL;
			                                  } 
			///------------------------------------------------------------------- all draw
   $table = "<table style='width:80%;border:0; color:orange; margin-left: 0px;'>\n";
          while($row = mysql_fetch_assoc($resultall))
           { 
             $table.="<tr>\n";
             $table .= "<td ><inputtype='checkbox' name='insbox' value='".$row['id']."'></td>\n";
             $table.= "<td  ><a href='#?img=".$row['buy']."'><img style='max-height:65px;max-width:25px' src='$mdir/".$row['buy']."'></a></td></tr>\n";     
			$table .="<td><input type='text' name='a$id' value='".$mdir."'/></td>\n";


     $table .= "</tr>\n";
              }

 $table .= "</table>\n";
      
   echo $table;
   ?>	
			<input type="hidden" value=""/>

			</div>   		 
			 <table style="float:right">
			<tr><td colspan="2"><input  name='del' type='submit' value='Удалить'/></td>
			</tr>
			</table>
 </form>
			</div>
			<div class="center" name="center" style=" ">
	<div class=" tab" style="padding:0">
		<table class="table" style="margin:0 auto; padding-left: 145px;">
		<tbody>
		<tr>
		<td><img style=" max-height:120px; max-width:90px" src="<? echo $file; ?>"/>
		</td>
		<td style="font-size:40px;"><? echo $edit['nameru']; ?></td></tr>
		<tr><td colspan="2"><img class=" effect1" style=" float:right; max-height:400px; max-width:200px" src="<? echo $title; ?>"/></td></tr>
		</tbody></table>
		
	<div class="tab" style="padding:0">
			<table cellpadding="2" style="width: 100%">
				<tr>
					<td class="tr" colspan="4">добавить картину</td>
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
$uploadfile = "$mdir"."/"."$apend"; // в переменную $uploadfile будет входить папка и имя изображения

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
//	$tit = $_POST['title'];
//	$imgup = $apend; $imgup = $ape;
//	if ($tit) {  $sql = mysql_query("UPDATE `art` SET gdraw='$imgup' WHERE nameru = '$art' ");
//	header("Location: http://www.kaqiusha.net.cn/admin/draw.php");
 }

$size1 = $size[0] .'x' .$size[1];

?>
				<table cellpadding="2" class="table" style="width: 100%">
					<tr class="tr">
						<td>Загрузка фото</td>
						<td rowspan="2"><input name="userfile" type="file" /></td>
						<td>
						<input name="upload" style="height: 20px" type="submit" value="Загрузить" /></td>
						<td>
						<input name="de1" style="width: 58%; height: 20px" type="submit" value="Удалить" /></td>
					</tr>
				</table>
			</form>
			<form action="setdraw.php" class="form-art" method="post" name="art">
				<table cellpadding="2" class="table" style="width: 100%">
				<tr> <td style="width: 235px"><input name="namecn" type="hidden" value="<? echo $edit['namecn']; ?>"/></td>
						<td><input name="nameru" type="hidden" value="<? echo $edit['nameru']; ?>"/></td>
				<td><input name="namelt" type="hidden" value="<? echo $edit['namelt']; ?>"/></td>
				</tr><tr>
								<td><input name="table" type="hidden" value="<? echo $edit['namelt']; ?>"/></td>

				</tr>
					<tr class="tr">
						<td colspan="3">Описание</td>
					</tr>
					<tr class="tr">		
					<td  rowspan="2">
					<img alt="" src="<? echo $uploadfile; ?>" style="max-height: 100px; max-width: 100px" />
                          </td>

					<td style="width: 235px">
					<input type="checkbox" name="type[]" value="fruit"/>НАТЮРМОРТ</td>
					<td><input type="checkbox" name="type[]" value="lenin"/>ЛЕНИН</td>
					</tr>
					<tr class="tr">
					<td><input type="checkbox" name="type[]" value="nature"/>ПЕЙЗАЖ</td>
							
					<td style="width: 235px"><input type="checkbox" name="type[]" value="portret"/>ПОРТРЕТ</td>
					</tr>
					<tr class="tr">
											<? echo $styletd ?>
						<? echo $check ?>Шедевр</td>

					
					<td><input type="checkbox" name="type[]" value="history"/>ИСТОРИЯ</td>
					<td><input type="checkbox" name="type[]" value="scene"/>СЦЕНЫ</td>


					</tr>
						<tr><td colspan="3">Рус</td></tr>
					<tr>
						<td class="tr" colspan="3">
						<textarea cols="100" name="discru" rows="6"><? echo $corr['discru'];?></textarea>
						</td>
					</tr>
					<tr >
						<td colspan="3">Кит</td>
					</tr>
					<tr>
						<td class="tr" colspan="3">
						<textarea cols="100" name="disccn" rows="6"><? echo $corr['disccn'];?></textarea></td>
					</tr>
					<tr class="tr">
					<td colspan="3" style="width: 235px">СТОИМОСТЬ<input type="text" name="price" value="<? echo $corr['price']; ?>"/>
					</td>
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
						<input name="editid" type="hidden" value="<? echo $corr['id']; ?>" />
						</td>
					</tr>
				</table>
			</form>
			<?
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
	</div>
	

</body>

</html>
