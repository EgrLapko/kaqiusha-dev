<? include "config.php";
if (!$uploadfile) $uploadfile = '../data/art/photoid/noimg.png';
$result = mysql_query("SELECT SQL_CALC_FOUND_ROWS * FROM art ");
$num_rows = mysql_num_rows($result);
//echo "$num_rows Rows";

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
	  	$('#example2').rollbar({zIndex:100}); 
	  	$('').rollbar({zIndex:100});
	  	$('').rollbar({zIndex:100});

	  });
	</script>

</head>

<body>
<div class="content" name="content">
	<div class="header">
		<img alt="" class="logo" height="206" src="img/Logo.png" width="832" />
	</div>
	<div class="nav">
			<a href="art_new.php">
			<p>СОВРЕМЕННЫЕ ХУДОЖНИКИ</p></a>
			<a href="custom.php"><p>ПРИКЛАДНОЕ ИСКУСТВО</p></a>
									<a href="lenta.php">
			<p>НОВОСТИ</p></a>

			</div>
	<div class="nav_l">	
						<p1>ХУДОЖНИКИ&nbsp; <? echo "($num_rows)"; ?></p1>
&nbsp;<form name='allartist' action='' method='post'>
				<div id="example2" class="example">	


	
	<?
// выод художников из базы
	 // ------------------------------------------редактирование данных
				if( isset( $_POST['ins'] ) ) {
			$id = $_POST['insbox'];
			$query =  "SELECT * FROM  `art` WHERE id = '$id' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
			$edit = $row; 
			$apend = $edit['photoid'];
			//echo $row['photoid'];
			//echo $query;
			$uploadfile = "../data/art/photoid/".$edit['photoid'];
			}
			}
			// -----------------------------------------------------------удаление из базы
			 if( isset( $_POST['Del'] ) ) {
			 $id = $_POST['insbox'];
			 $query =  "SELECT * FROM  `art` WHERE id = '$id' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
              if (!$row['photoid']) {}
              else {
				$uploadfile = "../data/art/photoid/".$row['photoid'];
				$apend = $row['photoid'];
				unlink($uploadfile); 
				$uploadfile = '../data/artnew/photoid/noimg.png';}
				}
			 $result = "DELETE  FROM `art` WHERE id =' $id' ";
			 $a = mysql_query ($result);
			  if($a) {
                  
                } else{
                    echo "Ошибка добавления : " . mysql_error();
                }

			 $row = NULL;
			}
   $table = "<table style='width:80%;border:0; color:orange; margin-left: 0px;'>\n";
   $sql = "SELECT * FROM `art`ORDER BY id DESC";
   $result2 = mysql_query ( $sql );
          while($row = mysql_fetch_assoc($result2))
{ 
             $table .= "<tr>\n";
             $table .= "<td ><input type='checkbox' name='insbox' value='".$row['id']."'></td>\n";
             $table.="<td><img style='max-height:65px;max-width:25px' src='../data/art/photoid/".$row['photoid']."'></td>\n";     
             $table .= "<td><a href='creat.php?art=".$row['nameru']."'>".$row['nameru']."</a></td>\n";


     $table .= "</tr>\n";
 }

 $table .= "</table>\n";
      
   echo $table;?>	
			

			</div>   		 
			 <table>
			<tr><td><input  name='ins' type='submit' value='Ред'/></td>
			<td colspan='3' style="width: 119px"><input style="float:right; background-color:black; color:white" name='Del' type='submit' value='Удалить'/></td></tr>
			</table>
 </form>
		</div>
	<div class="center" name="center">
		
		
		<div class="tab">
			<table cellpadding="2" style="width: 100%">
				<tr>
					<td class="tr" colspan="4">Карта художника</td>
				</tr>
			</table>
			<form action="" enctype="multipart/form-data" method="post" name="upload">
				<?php //---------------------------------------- --------------------------удаление фото
				if( isset( $_POST['del1'] ) ) {
				unlink($uploadfile);
				}

	if( isset( $_POST['upload'] ) ) {
$uploaddir = '../data/art/photoid/'; // это папка, в которую будет загружаться картинка
$apend=basename($_FILES['userfile']['name']);//rand(100,1000).'.jpg'; 
$uploadfile = "$uploaddir$apend"; // в переменную $uploadfile будет входить папка и имя изображения

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
			<form action="artist.php" class="form-art" method="post" name="art">
				<table cellpadding="2" class="table" style="width: 100%">
					<tr>
						<td rowspan="5" style="width: 235px;">
						<img alt="" src="<? echo $uploadfile; ?>" style="max-height: 300px; max-width: 200px" /></td>
						<td class="tr" style="width: 70px;">&nbsp;</td>
						<td class="tr" style="width: 217px">Русское</td>
						<td class="tr">Китайское</td>
					</tr>
					<tr class="tr">
						<td style="width: 70px">Имя</td>
						<td style="width: 217px">
						<textarea cols="20" name="artru" rows="1"><? echo $edit['nameru'];?></textarea></td>
						<td><textarea cols="20" name="artcn" rows="1"><? echo $edit['namecn']; ?></textarea></td>
					</tr>
					<tr class="tr">
						<td style="width: 70px">Награды (500)</td>
						<td style=""><textarea cols="20" name="honorru" rows="4"><? echo $edit['honorru']; ?> </textarea></td>
						<td><textarea cols="20" name="honorcn" rows="4"><? echo $edit['honorcn'];?></textarea>
						</td>
					</tr>
					<tr class="tr">
					<td>Имя латинецей</td>
					<td colspan="2"><textarea cols="40" name="namelt" rows="1"></textarea></td>
					</tr>
					<tr class="tr">
						<td style="width: 70px;">Годы</td>
						<td colspan="2" style="">
						<textarea cols="30" name="years" rows="1"><? echo $edit['years'];?></textarea></td>
					</tr>
					<tr class="tr">
						<td style="width: 235px">Размер фото&nbsp;<? echo $size1;?></td>
						<td colspan="3">Путь <? echo $uploadfile?></td>
					</tr>
					<tr class="tr">
						<td colspan="4">Биография (4000)</td>
					</tr>
					<tr class="tr">
						<td colspan="4">Русская</td>
					</tr>
					<tr>
						<td class="tr" colspan="4">
						<textarea cols="100" name="biogru" rows="16"><? echo $edit['biogru'];?></textarea>
						</td>
					</tr>
					<tr class="tr">
						<td colspan="4">Китайская</td>
					</tr>
					<tr>
						<td class="tr" colspan="4">
						<textarea cols="100" name="biogcn" rows="16"><? echo $edit['biogcn'];?></textarea></td>
					</tr>
					
					</table>
					<table class="table">
					
					<tr>
						<td><input type="submit" value="Записать" /></td><td></td>
						<td style>
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

</body>

</html>
