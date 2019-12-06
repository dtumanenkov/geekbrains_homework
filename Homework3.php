<?php
//1._______________________________________________________________________________________________________________
echo "1. С помощью цикла while вывести все числа в промежутке от 0 до 100, которые делятся на 3 без остатка:<br>";
$cycle=0;
while($cycle<=100){
    if ($cycle%3==0){
        echo "Число $cycle делится на 3 без остатка <br> ";
    }
    $cycle++;
}
echo "<br>";


//2._______________________________________________________________________________________________________________
echo "2. С помощью цикла do…while написать функцию для вывода чисел от 0 до 10: <br>";

$cycle=0;
do{
    if ($cycle==0){
        echo "0 – ноль. <br>";
    }
    elseif ($cycle%2!=0){
        echo "$cycle - нечетное число. <br>";
    }
    else{
        echo "$cycle - четное число.  <br>";
    }
    $cycle++;
}
while ($cycle<=10);
echo "<br>";


//3._______________________________________________________________________________________________________________
echo "3. Объявить массив, в котором в качестве ключей будут использоваться названия областей,<br>
        а в качестве значений – массивы с названиями городов из соответствующей области.<br>
         Вывести в цикле значения массива, чтобы результат был таким: <br>";

$regions=["Московская область"=>["city1"=>"Москва","city2"=>"Зеленоград","city3"=>"Клин"],
    "Ленинградская область"=>["city1"=>"Санкт-Петербург","city2"=>"Всеволожск","city3"=>"Павловск","city4"=>"Кронштадт"],
    "Псковская область"=>["city1"=>"Псков","city2"=>"Печоры","city3"=>"Гдов","city4"=>"Пушкинские горы","city5"=>"Остров"],
    "Новгородская область"=>["city1"=>"Великий Новгород","city2"=>"Старая Русса","city3"=>"Валдай"],
    "Тверская область"=>["city1"=>"Тверь","city2"=>"Ржев","city3"=>"Торжок","city4"=>"Кимры"]];

foreach ($regions as $region=>$cities) {
    echo "$region : <br>";
    foreach ($cities as $current_city){ //Перебираем вложенный массив
        if($current_city!=end($cities)){  //Чтобы после последнего элемента поставить точку ищем последний элемент
            echo " $current_city,";}
        else{
            echo " $current_city.";
        }
    }
    echo "<br>";
}
echo "<br>";
//4._______________________________________________________________________________________________________________
echo" 4. Написать функцию транслитерации строк.<br>";

function translit_of_russian_word($string) {
    $array_of_letter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
    );
    return strtr($string, $array_of_letter);
}
echo translit_of_russian_word("Транслитерация русских строк в действии");
echo "<br>";
echo "<br>";
//5._______________________________________________________________________________________________________________
echo"5. Написать функцию, которая заменяет в строке пробелы на подчеркивания и возвращает видоизмененную строчку.<br>";

$str="Заменяем пробелы над подчеркивания !";
function no_spaces($string)
{
    $array_of_letter = array(
        " " => "_");
    return strtr($string,$array_of_letter);
}
echo no_spaces($str);
echo "<br>";
echo "<br>";
//7._______________________________________________________________________________________________________________
echo"7. *Вывести с помощью цикла for числа от 0 до 9, НЕ используя тело цикла. <br>";
$i=0;
for(;;){
    if($i==10) break;
    echo $i;
    $i++;
}
echo "<br>";
echo "<br>";
//8._______________________________________________________________________________________________________________
echo "8. *Повторить третье задание, но вывести на экран только города, начинающиеся с буквы «К».<br>";

foreach ($regions as $region=>$cities) {
   // echo "$region : <br>";
    foreach ($cities as $current_city){ //Перебираем вложенный массив
        if(mb_substr($current_city,0,1)=='К'){
            echo $current_city;
            echo "<br>";
            }
        }
    }
echo "<br>";

//9._______________________________________________________________________________________________________________
echo " 9. *Объединить две ранее написанные функции в одну, которая получает строку на русском языке, <br>
    производит транслитерацию и замену пробелов на подчеркивания (аналогичная задача решается при <br>
    конструировании url-адресов на основе названия статьи в блогах).";

function translit_of_russian_word_with_no_spaces($string) {
    $array_of_letter = array(
        'а' => 'a',   'б' => 'b',   'в' => 'v',
        'г' => 'g',   'д' => 'd',   'е' => 'e',
        'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
        'и' => 'i',   'й' => 'y',   'к' => 'k',
        'л' => 'l',   'м' => 'm',   'н' => 'n',
        'о' => 'o',   'п' => 'p',   'р' => 'r',
        'с' => 's',   'т' => 't',   'у' => 'u',
        'ф' => 'f',   'х' => 'h',   'ц' => 'c',
        'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
        'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
        'э' => 'e',   'ю' => 'yu',  'я' => 'ya',

        'А' => 'A',   'Б' => 'B',   'В' => 'V',
        'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
        'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
        'И' => 'I',   'Й' => 'Y',   'К' => 'K',
        'Л' => 'L',   'М' => 'M',   'Н' => 'N',
        'О' => 'O',   'П' => 'P',   'Р' => 'R',
        'С' => 'S',   'Т' => 'T',   'У' => 'U',
        'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
        'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
        'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
        'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
        ' '=>'_',
    );
    return strtr($string, $array_of_letter);
}
echo "<br>";
echo translit_of_russian_word_with_no_spaces("Транслитерация русских строк в действии");
echo "<br>";
echo "<br>";