<? include("config.php");
$date = date("d.m.y(H:i)");
setcookie("date","$date",time()+3600,'/','kaqiusha.net.cn');
$th = $_POST['theme'];
$nw = $_POST['news'];


                $sql = mysql_query("INSERT INTO `lenta`(`id`, `theme`, `news`,`date`) VALUES ( NULL, '$th', '$nw','$date')");
                if($sql) {
                    mysql_close ( $link );
                    header("Location: http://www.kaqiusha.net.cn/admin/default.php");
                         } 
                else {
                    echo "Ошибка добавления : " . mysql_error();
                	 }
$mdir = "../data/news/$date";
if (file_exists($mdir)) {}
 else {
   mkdir("$mdir");
}

 header("Location: http://www.kaqiusha.net.cn/admin/draw_new.php");
?>