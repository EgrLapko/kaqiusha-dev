<?
include"config.php";

$tab = $_COOKIE['tabw'];
$str = $tab;
$dir = str_replace(' ', '', $str);
$mdir = "../data/draw_n/$dir";
$mdir2 = "../data/draw_n/$dir/prodano";
echo $tab;


			// -----------------------------------------------------------удаление из базы
			 $id = $_POST['insbox'];
			 $a="a".$id;
			 echo $a;
			 $query =  "SELECT * FROM  `$tab` WHERE id = '$id' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
              $uploadfile = $mdir."/".$row['sell'];
              $img = $row['sell'];
              if ($row['sell']) {  
              	unlink($uploadfile);     
				                 }
				   				   				 }					

				   
								
				  									
			 $result = "DELETE FROM  `$tab` WHERE id = '$id' ";
			 echo $result;
			 mysql_query ($result);
			 //header("Location: http://www.kaqiusha.net.cn/admin/draw_n.php");

?>