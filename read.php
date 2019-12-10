?php
/*$file=fopen("test.php","w");
$content=file_get_contents("https://www.bbc.com/news");
if (fwrite($file,$content)){
    echo "Внешняя страница сохранена в тест.php";
}
//echo $content;  */

$url="https://site.ru/demo/index.php";
$path=pathinfo($url);
print_r($path);
echo $path['basename'];
