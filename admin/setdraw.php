
<? include "config.php";
$title = $_POST['title'];
$table = $_POST['table'];
$nameru = $_POST['nameru'];
$namecn = $_POST['namecn'];
$namelt = $_POST['namelt'];
$price  = $_POST['price'];
$discru = $_POST['discru'];
$disccn = $_POST['disccn'];
$img = $_POST['id'];
$id = $_POST['editid'];
$type = $_POST['type'];
$date =  date("m.d.y"); 
if (!$nameru) {  echo '<script language="JavaScript">alert("Введите имя!");</script>';
echo '<script language="JavaScript">history.back(1);</script>';
  }
 else {///2
                // записываем результат в бд\

                if (!$id)  {//1
                error_reporting(E_ALL);
                 if ($title) {
                 $qery="INSERT INTO `shed` (`id`, `nameru`, `namecn`,`namelt`, `discru`, `disccn`, `img`) VALUES ( NULL, '$nameru', '$namecn','$namelt', '$discru', '$disccn', '$img')";
					 $sql = mysql_query($qery);
					 
                   }

                $qery="INSERT INTO `$table`(`id`, `buy`, `sell`, `discru`, `disccn`, `price`) VALUES ( NULL, NULL, '$img','$discru', '$disccn', '$price')";
                $sql = mysql_query($qery);
                $qery="INSERT INTO `new` (`id`, `nameru`, `namecn`,`namelt`, `img`, `date`) VALUES ( NULL, '$nameru', '$namecn','$namelt', '$img', '$date')";
					 $sql = mysql_query($qery);

                 if ($type) {//
                for ($i = 0; $i <= count($type); $i++) {///
                                $qery="INSERT INTO `$type[$i]` (`id`, `nameru`, `namecn`,`namelt`, `img`) VALUES ( NULL, '$nameru', '$namecn','$namelt', '$img')";
					 $sql = mysql_query($qery);
                                                        }///
                     
                              }//
                              header("Location: http://www.kaqiusha.net.cn/admin/draw.php");
						}//1
                           
               if ($id) {//3 
                 $sql = mysql_query("UPDATE `$table` SET  sell='$img', discru='$discru', disccn='$disccn', price='$price' WHERE id = '$id' ");
                if ($title) {
					 $sqlch =  "SELECT * FROM  `shed` WHERE img = '$img'";
					$datach= mysql_query ( $sqlch );
						while($drow = mysql_fetch_assoc($datach)){
						$yes = $drow['img'];}
					if ($yes){
		                 $sql = mysql_query("UPDATE `shed` SET   discru='$discru', disccn='$disccn' WHERE img = '$img' ");
									}
						if (!$yes) 
						   
						{
						                 $qery="INSERT INTO `shed` (`id`, `nameru`, `namecn`,`namelt`, `discru`, `disccn`, `img`) VALUES ( NULL, '$nameru', '$namecn','$namelt', '$discru', '$disccn', '$img')";
					 $sql = mysql_query($qery);
								}
								}
						                                     
                   if ($type) {//1
                for ($i = 0; $i <= count($type); $i++) {//
                                $qery="INSERT INTO `$type[$i]` (`id`, `nameru`, `namecn`,`namelt`, `img`) VALUES ( NULL, '$nameru', '$namecn','$namelt', '$img')";
					 $sql = mysql_query($qery);      }//
                                                          }//1

                           }//3  
                          header("Location: http://www.kaqiusha.net.cn/admin/draw.php");
				}//2

?>