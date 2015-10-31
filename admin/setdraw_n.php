
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
echo $table;
if (!$nameru) {  echo '<script language="JavaScript">alert("Введите имя!");</script>';
echo '<script language="JavaScript">history.back(1);</script>';
  }
 else {///2
                // записываем результат в бд\

                if (!$id)  {//1
                error_reporting(E_ALL);

                $qery="INSERT INTO `$table`(`id`, `buy`, `sell`, `discru`, `disccn`, `price`) VALUES ( NULL, NULL, '$img','$discru', '$disccn', '$price')";
                $sql = mysql_query($qery);
               // $qery="INSERT INTO `new` (`id`, `nameru`, `namecn`,`namelt`, `img`, `date`) VALUES ( NULL, '$nameru', '$namecn','$namelt', '$img', '$date')";
					// $sql = mysql_query($qery);

                              header("Location: http://www.kaqiusha.net.cn/admin/draw_n.php");
						}//1
                           
               if ($id) {//3 
                 $sql = mysql_query("UPDATE `$table` SET  sell='$img', discru='$discru', disccn='$disccn', price='$price' WHERE id = '$id' ");
						                                     

                           }//3  
                          header("Location: http://www.kaqiusha.net.cn/admin/draw_n.php");
                          }

?>