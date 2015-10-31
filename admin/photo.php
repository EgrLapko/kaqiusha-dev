
<head>
<link href="stylesart.css" rel="stylesheet" type="text/css">
</head>

<? require_once ("config/db.php");

//================Настройки============= //
$maxwidth = "300px"; // максимальная ширина картинок на превью
$fotos_dir = "fotos/"; // Директория для фотографий  картин
$foto_name = $fotos_dir.time()."_".basename($_FILES['myfile']['name']); // Полное имя файла вместе с путем
$foto_light_name = time()."_".basename($_FILES['myfile']['name']); // Имя файла исключая путь
$foto_tag = "<img src=\"$foto_name\" border=\"0\">"; // Готовый тэг для вставки картинки на страницу
$foto_tag_preview = "<img src=\"$foto_name\" border=\"0\" width=\"$maxwidth\">"; // Тот же тэг, но для превью

// Текст ошибок
$error_by_mysql = "<span style=\"font: bold 15px tahoma; color: red;\">Ошибка при добавлении данных в базу</span>";
$error_by_file = "<span style=\"font: bold 15px tahoma; color: red;\">Невозможно загрузить файл в директорию. Возможно её не существует</span>";



// Начало
if(isset($_FILES["myfile"]))
{
$myfile = $_FILES["myfile"]["tmp_name"];
$myfile_name = $_FILES["myfile"]["name"];
$myfile_size = $_FILES["myfile"]["size"];
$myfile_type = $_FILES["myfile"]["type"];
$error_flag = $_FILES["myfile"]["error"];

// Если ошибок не было
if($error_flag == 0)
{
        
    
$DOCUMENT_ROOT = $_SERVER['DOCMENT_ROOT'];
$upfile = getcwd()."\\fotos\\" . time()."_".basename($_FILES["myfile"]["name"]);
if ($_FILES['myfile']['tmp_name'])
{

  
//Если не удалось загрузить файл

if (!move_uploaded_file($_FILES['myfile']['tmp_name'], $upfile)) 
{
echo "$error_by_file";
exit;
}

}
else
{
    echo 'Проблема: возможна атака через загрузку файла. ';
    echo $_FILES['myfile']['name'];
    exit;
}


// После удачной обработки файла, выводим сообщение
echo "<h3>Результат добавления товара:</h3> <br />";
echo "<b>Файл успешно скопирован в директорию:</b> ".$fotos_dir." <br /><b>Имя файла:</b> ".$foto_light_name."<br />";
echo "<br /><small>Превью загруженной картинки:</small> <br />$foto_tag_preview<br /><br />";



// Заносим путь картинки в базу данных
$q = "INSERT INTO goods (foto) VALUES ('$foto_name')";
$query = mysql_query($q);


// Данные успешно внесены в базу данных, выводим сообщение
if ($query == 'true') {
echo "<br /><b>Данные успешно внесены в базу</b>";
}

// В противном случае, выводим ошибку при добавлении в базу данных
else {
echo "$error_by_mysql";

}

        }
 
 elseif ($myfile_size == 0) {
 echo "Пустая форма!";
 } 
    

}

?>