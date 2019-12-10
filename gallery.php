<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Homework4</title>
    <link rel="stylesheet" type="text/css" href="css/gallery.css">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700&amp;subset=cyrillic" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600|Roboto+Condensed:300,400,700&display=swap&subset=cyrillic" rel="stylesheet">
</head>

<!-- Раздел Галерея-->

<body>
    <div class="container">
        <h1>Our Gallery</h1>
        <div class="gallery">
            <!-- Стандартный блок картинки-->
            <?php
        $files=scandir("images");
        $number_of_images=0;
        foreach($files as $file){
        if($file!='.'&&$file!='..')
        echo"
        <div class=\"gallery-item\">
            <div class=\"gallery-picture\"><img width=\"271\" height=\"376\" src='images/$file'></div>
            <span class=\"gallery-text\">Имя файла:<span class=\"game-version\"> $file</span></span>
            <div class=\"gallery-open-button\"><a href=\"images/$file\">Open</a></div>
        </div>
        ";

}

?>
        </div>
    </div>
</body>

</html>
