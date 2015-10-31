 
 <head>
 <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
 </head>

 <?
 $host = 'mysql.hostinger.com.hk';
 $username = 'u401972945_art';
 $password = '290276';
 $db = "u401972945_art";
$link = mysql_connect($host, $username, $password); 
   if ( !$link ) die ("РќРµРІРѕР·РјРѕР¶РЅРѕ РїРѕРґРєР»СЋС‡РµРЅРёРµ Рє MySQL");
$selected = mysql_select_db($db, $link); 
   if(!$selected) die ("РќРµРІРѕР·РјРѕР¶РЅРѕ РѕС‚РєСЂС‹С‚СЊ $db");
?>