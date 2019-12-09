<?php
$file=fopen("files/test.txt","r");
while(!feof($file)){
    echo fgets($file)."<br>";
}

