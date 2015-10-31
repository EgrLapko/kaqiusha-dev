<? include("config.php");
setcookie("art",$_GET['art'],time()+3600,'/','kaqiusha.net.cn');
$art = $_GET['art'];
$query =  "SELECT * FROM  `artnew` WHERE nameru = '$art' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
			$edit = $row; 
			$file="../data/artnew/photoid/".$row['photoid'];
			$nametab = "n_".$edit['namelt'];
}

$query = "create table if not exists `".$nametab."`(id int(100)  primary key auto_increment, buy varchar(100), sell varchar(20), discru varchar(1000), disccn varchar(1000), price varchar(20))";
mysql_query($query);
$str = $edit['namelt'];
$dir = str_replace(' ', '', $str);
$mdir = "../data/draw_n/$dir";
$mdir2 = "../data/draw_n/$dir/prodano";
if (file_exists($mdir)) {}
 else {
   mkdir("$mdir");
mkdir("$mdir2");
                 $sql = mysql_query("UPDATE `artnew` SET draw='$dir' WHERE nameru = '$art' ");
                 mysql_query($query);
}

 header("Location: http://www.kaqiusha.net.cn/admin/draw_n.php");
?>