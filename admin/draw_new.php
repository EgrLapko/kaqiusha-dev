<? 
include "config.php";
$date = $_COOKIE['date'];
$mdir = "../data/news/".$date;
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
	
		<a href="default.php"><img alt="" class="logo" height="206" src="img/Logo.png" width="832" /></a>
		</div>
		
			<div class="center" name="center" style=" ">
		
	<div class="tab" style="padding-top:150px">
			<table cellpadding="2" style="width: 100%">
				<tr>
					<td class="tr" colspan="4">добавить фото</td>
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
					<tr class="tr">		
					<td  colspan="3">
					<img alt="" src="<? echo $uploadfile; ?>" style="" />
                          </td>

						</tr>
					</table>
			</form>
			<?
$f = scandir($mdir);
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
 

$link = mysql_connect($host, $username, $password);
mysql_close ( $link );

?>
<a href="lenta.php"  style="font-size:38px">Назад</a>
</div>

	

		
	</div>
	</div>
	

</body>

</html>
