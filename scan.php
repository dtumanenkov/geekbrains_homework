?php
$files=scandir("images");
foreach($files as $file){
    echo"<img src='images/$file'><br>";
}
