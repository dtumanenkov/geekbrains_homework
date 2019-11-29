// Туманенков Денис.  Домашнее задание №1.
//3. Объяснить, как работает данный код:
<?php
$a = 5;
$b = '05';
var_dump($a == $b);  // Почему true? // При сравнении a и b будут преобразованы в
                                // , следовательно 05-> 5

var_dump((int)'0000000012345'); // Почему 12345?  // Строка является числом и при приведении к целому нули отбросятся

var_dump((float)123.0 === (int)123.0); // Почему false? // тут приведение с проверкой по типу чисел
                                                //первое при echo хоть и покажет 123,
                                                // но будет иметь тип флоат(echo var_dump((float)123.0);)

var_dump((int)0 === (int)'hello, world'); // Почему true?//во втором выражении при приведении строки к
                                                    //  типу инт оно будет преобразовано в 0 и иметь тип инт

?>
// 4. Используя имеющийся HTML-шаблон сделать так, чтобы главная страница генерировалась через PHP.
<?php
$h1_text='minimalistica';
$title_text='minimalistica';
$now_date=date('Y');
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="author" content="Luka Cvrk (www.solucija.com)" />
    <link rel="stylesheet" href="css/main.css" type="text/css" />
    <title><?php echo $title_text ?></title>
</head>
<body>
<div id="content">
    <h1><?php echo $h1_text ?></h1>

    <ul id="menu">
        <li><a href="#">home</a></li>
        <li><a href="#">archive</a></li>
        <li><a href="#">contact</a></li>
    </ul>

    <div class="post">
        <div class="details">
            <h2><a href="#">Nunc commodo euismod massa quis vestibulum</a></h2>
            <p class="info">posted 3 hours ago in <a href="#">general</a></p>

        </div>
        <div class="body">
            <p>Nunc eget nunc libero. Nunc commodo euismod massa quis vestibulum. Proin mi nibh, dignissim a pellentesque at, ultricies sit amet sapien. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Quisque vel lorem eu libero laoreet facilisis. Aenean placerat, ligula quis placerat iaculis, mi magna luctus nibh, adipiscing pretium erat neque vitae augue. Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at ipsum.</p>
        </div>
        <div class="x"></div>
    </div>

    <div class="col">
        <h3><a href="#">Ut enim risus rhoncus</a></h3>
        <p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col">
        <h3><a href="#">Maecenas iaculis leo</a></h3>
        <p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
        <p>&not; <a href="#">read more</a></p>
    </div>
    <div class="col last">
        <h3><a href="#">Quisque consectetur odio</a></h3>
        <p>Quisque consectetur odio ut sem semper commodo. Maecenas iaculis leo a ligula euismod condimentum. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Ut enim risus, rhoncus sit amet ultricies vel, aliquet ut dolor. Duis iaculis urna vel massa ultricies suscipit. Phasellus diam sapien, fermentum a eleifend non, luctus non augue. Quisque scelerisque purus quis eros sollicitudin gravida. Aliquam erat volutpat. Donec a sem consequat tortor posuere dignissim sit amet at.</p>
        <p>&not; <a href="#">read more</a></p>
    </div>

    <div id="footer">
        <p>Copyright &copy; <em>minimalistica</em> &middot; Design: Luka Cvrk, <a href="http://www.solucija.com/" title="Free CSS Templates">Solucija</a> <?php echo $now_date ?></p>
    </div>
</div>
</body>
</html>

//5. *Используя только две переменные, поменяйте их значение местами.

<?php
$a=1;
$b=100;
$a -= $b = ($a += $b) - $b;
//1. скобки $a += $b        ->   $a=$a+$b       ->  $a=1+100  -> $a=101
//2. $b=$a(из скобок)-$b    ->   $b=101-100     ->$b=1
//3. $a-=$b  ->  $a=$a-$b   ->   $a=101-1       ->$a=100

echo ($a);
echo ($b);
?>
