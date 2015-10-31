<? include("config.php");
setcookie("art",$_GET['art'],time()+3600,'/','kaqiusha.net.cn');
$art = $_GET['art'];
$query =  "SELECT * FROM  `art` WHERE nameru = '$art' ";
            $edit1 = mysql_query ( $query );
             while($row = mysql_fetch_assoc($edit1)){
			$edit = $row; 
			$file="../data/art/photoid/".$row['photoid'];
}

$query = "create table if not exists `".$edit['namelt']."`(id int(100)  primary key auto_increment, buy varchar(100), sell varchar(100), discru varchar(1000), disccn varchar(1000), price varchar(20))";
mysql_query($query);
$str = $edit['namelt'];
$dir = str_replace(' ', '', $str);
$mdir = "../data/draw/$dir";
$mdir2 = "../data/draw/$dir/prodano";
if (file_exists($mdir)) {}
 else {
   mkdir("$mdir");
mkdir("$mdir2");
                 $sql = mysql_query("UPDATE `art` SET draw='$dir' WHERE nameru = '$art' ");
                 mysql_query($query);
}

 header("Location: http://www.kaqiusha.net.cn/admin/draw.php");
?>