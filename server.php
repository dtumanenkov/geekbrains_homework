<?php
$name=$_FILES['photo']['name'];
$path="images/$name";
/*
if(move_uploaded_file($_FILES['photo']['tmp_name'],$path)){
    echo "файл успешно добавлен";
}
else{
    echo "Возникла ошибка";
}*/

for($i=0;$i<count($_FILES['photo']['name']);$i++){
    $name=$_FILES['photo']['name'][$i];
    $path="images/$name";
    if(move_uploaded_file($_FILES['photo']['tmp_name'][$i],$path)){
        echo $name."успешно сохранен на сервере!<br>";
    }
}
//print_r($_FILES);