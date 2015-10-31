<?
include"config.php";

$tab = $_COOKIE['tabw'];
$str = $tab;
$dir = str_replace(' ', '', $str);
$mdir = "../data/draw/$dir";
$mdir2 = "../data/draw/$dir/prodano";
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
				  $del1 ="DELETE FROM  `lenin` WHERE img = '$img'";
				  $del2 = "DELETE FROM  `scene` WHERE img = '$img'";
				  $del3 = "DELETE FROM   `fruit` WHERE img = '$img'";
				  $del4 = "DELETE FROM   `nature` WHERE img = '$img'";
				  $del5 = "DELETE FROM   `portret` WHERE img = '$img'";
				  $del6 = "DELETE FROM  `history` WHERE img = '$img'";
				   $del7 = "DELETE FROM  `new` WHERE img = '$img'";
				  $del8 = "DELETE FROM  `shed` WHERE img = '$img'";

				   
								
				mysql_query ( $del1 );
				mysql_query ($del2);
				mysql_query ($del3);
				mysql_query ($del4);
				mysql_query ($del5);
				mysql_query ($del6); 
				mysql_query ($del7);
				mysql_query ($del8);  									
				  									
			 $result = "DELETE FROM  `$tab` WHERE id = '$id' ";
			 echo $result;
			 mysql_query ($result);
			 //header("Location: http://www.kaqiusha.net.cn/admin/draw.php");

?>