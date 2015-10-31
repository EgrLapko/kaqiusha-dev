
<? include "config.php";
//$table = $_POST['table'];
$nameru = $_POST['nameru'];
$namecn = $_POST['namecn'];
$namelt = $_POST['namelt'];
//$price  = $_POST['price'];
$discru = $_POST['discru'];
$disccn = $_POST['disccn'];
$img = $_POST['id'];
$id = $_POST['editid'];
//$type = $_POST['type'];
//$date =  date("m.d.y"); 
$cat = $_POST['cat'];
//echo $nameru;
//echo $namecn;
echo $cat;
if ($cat == "none") {  echo '<script language="JavaScript">alert("Введите категорию!");</script>';
echo '<script language="JavaScript">history.back(1);</script>';   }
  
else {
               ///////////////// // записываем результат в бд\

                if (!$id)  {
                error_reporting(E_ALL);
                $qery="INSERT INTO `custom` (`id`,  `discru`, `disccn`, `img`, `cat`) VALUES ( NULL,  '$discru', '$disccn', '$img', '$cat')";
					 						 $sql = mysql_query($qery);
			
					 				if($sql) {


                     header("Location: http://www.kaqiusha.net.cn/admin/custom.php"); }
                                              
                                       else{
                    echo "Ошибка добавления : " . mysql_error(); }
                      }
                                     
                else {                
                 $sql = mysql_query("UPDATE `custom` SET   discru='$discru', disccn='$disccn', img='$img' WHERE id = '$id' ");
					               if($sql) {
                    mysql_close ( $link );
                header("Location: http://www.kaqiusha.net.cn/admin/custom.php");  
                                             }
                                else{   echo "Ошибка добавления : " . mysql_error(); }
               		 
                	    }
                	    }
								
?>