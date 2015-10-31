<?
// if (!$namecn || !$namecn || !$honorru || !$honorcn || !$biogru || $biogcn ||!$img )  die ("Не все данные введены.<br>   Пожалуйста, вернитесь назад и закончите ввод");

include "config.php";
$nameru = $_POST['artru'];
$namecn = $_POST['artcn'];
$namelt = $_POST['namelt'];
$honorru  = $_POST['honorru'] ;
$honorcn  = $_POST['honorcn'];
$years  = $_POST['years'];
$biogru = $_POST['biogru'];
$biogcn = $_POST['biogcn'];
$img = $_POST['id'];
$id = $_POST['editid'];
if (!$nameru) {  echo '<script language="JavaScript">

alert("Введите имя!");

</script>';
echo '<script language="JavaScript">
history.back(1);
</script>';
  }
 else {
                // записываем результат в бд\

                if (!$id)  {
                error_reporting(E_ALL);
                $sql = mysql_query("INSERT INTO `art`(`id`, `nameru`, `namecn`,`namelt`, `honorru`, `honorcn`, `years`, `biogru`, `biogcn`, `photoid`) VALUES ( NULL, '$nameru', '$namecn','$namelt', '$honorru', '$honorcn', '$years', '$biogru', '$biogcn', '$img')");
                if($sql) {
                    mysql_close ( $link );
                    header("Location: http://www.kaqiusha.net.cn/admin/default.php");
                         } 
                else {
                    echo "Ошибка добавления : " . mysql_error();
                	 }
                           }
                else {                
                 $sql = mysql_query("UPDATE `art` SET  nameru='$nameru', namecn='$namecn', honorru='$honorru', honorcn='$honorcn', years='$years', biogru='$biogru', biogcn='$biogcn', photoid='$img' WHERE id = '$id' ");
					               if($sql) {
                    mysql_close ( $link );
                    header("Location: http://www.kaqiusha.net.cn/admin/default.php");
                                            } 
                 else{
                    echo "Ошибка добавления : " . mysql_error();
               		 }
                	      }
	 }
?>