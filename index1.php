*

Туманенков Денис

1. Объявить две целочисленные переменные $a и $b и задать им произвольные начальные значения. Затем написать скрипт, который работает по следующему принципу:
если $a и $b положительные, вывести их разность;
если $а и $b отрицательные, вывести их произведение;
если $а и $b разных знаков, вывести их сумму;
ноль можно считать положительным числом.
2. Присвоить переменной $а значение в промежутке [0..15]. С помощью оператора switch организовать вывод чисел от $a до 15.
3. Реализовать основные 4 арифметические операции в виде функций с двумя параметрами. Обязательно использовать оператор return.
4. Реализовать функцию с тремя параметрами: function mathOperation($arg1, $arg2, $operation), где $arg1, $arg2 – значения аргументов, $operation – строка с названием операции. В зависимости от переданного значения операции выполнить одну из арифметических операций (использовать функции из пункта 3) и вернуть полученное значение (использовать switch).
5. Посмотреть на встроенные функции PHP. Используя имеющийся HTML шаблон, вывести текущий год в подвале при помощи встроенных функций PHP.
6. *С помощью рекурсии организовать функцию возведения числа в степень. Формат: function power($val, $pow), где $val – заданное число, $pow – степень.
7. *Написать функцию, которая вычисляет текущее время и возвращает его в формате с правильными склонениями, например:
22 часа 15 минут
21 час 43 минуты
*/
<?php
echo "<br/>";
echo "<br/>";
echo "<br/>";
?>


//1.
<?php

$a=100;
$b=-50;

if($a>0 && $b>0){
    echo $a-$b;
}
elseif ($a<0 && $b<0){
    echo $a*$b;
}
else{
    echo $a+$b;
}

echo "<br/>";
?>
//2.

<?php

$a=10;
switch($a){
    case 0:
    echo 0;

    case 1:
        echo 1;

    case 2:
        echo 2;

    case 3:
        echo 3;

    case 4:
        echo 4;

    case 5:
        echo 5;

    case 6:
        echo 6;

    case 7:
        echo 7;

    case 8:
        echo 8;

    case 9:
        echo 9;
        break;
    case 10:
        echo 10;

    case 11:
        echo 11;

    case 12:
        echo 12;

    case 13:
        echo 13;

    case 14:
        echo 14;

    case 15:
        echo 15;

}
echo "<br/>";
?>

//3.
<?php
echo "<br/>";
function summa($x,$y){
    return $x+$y;
}
function proizved($x,$y){
    return $x*$y;
}
function raznost($x,$y){
    return $x-$y;
}
function delenie($x,$y){
    if ($y==0){
        echo "На ноль делить нельзя!";
    }
    else {
        return $x / $y;
    }
}
echo summa(10,5);
echo "<br/>";
echo proizved(10,5);
echo "<br/>";
echo raznost(10,5);
echo "<br/>";
echo delenie(10,0);
echo "<br/>";
?>

//4.
<?php
echo "<br/>";
function mathOperation($arg1, $arg2, $operation){
    switch ($operation){
        case '+':
            echo summa($arg1,$arg2);
            break;
        case '*':
            echo proizved($arg1,$arg2);
            break;
        case '-':
            echo raznost($arg1,$arg2);
            break;
        case '/':
            echo delenie($arg1,$arg2);
            break;
    }
}
mathOperation(10,5,'+');
echo "<br/>";
mathOperation(10,5,'*');
echo "<br/>";
mathOperation(10,5,'-');
echo "<br/>";
mathOperation(10,5,'/');
echo "<br/>";
?>

//5.
<?php
function power($val, $pow){
    if ($pow!=0){
        return $val*power($val,$pow-1);
    }
    else{
        return 1;
    }
}

echo power(2,16);
echo "<br/>";
?>

//6.
<?php
$hour_now=date('H');
$minute_now=date('i');

function print_hour($hour_now)
{
    switch ($hour_now) {
        case 1:
            return ($hour_now . ' час');
        case 2:
            return $hour_now . ' часа';
        case 3:
            return $hour_now . ' часа';
        case 4:
            return $hour_now.' часа';
        case 5:
            return $hour_now . ' часов';
        case 6:
            return $hour_now . ' часов';
        case 7:
            return $hour_now . ' часов';
        case 8:
            return $hour_now . ' часов';
        case 9:
            return $hour_now . ' часов';
        case 10:
            return $hour_now . ' часов';
        case 11:
            return $hour_now . ' часов';
        case 12:
            return $hour_now . ' часов';
        case 13:
            return $hour_now . ' часов';
        case 14:
            return $hour_now . ' часов';
        case 15:
            return $hour_now . ' часов';
        case 16:
            return $hour_now . ' часов';
        case 17:
            return $hour_now . ' часов';
        case 18:
            return $hour_now . ' часов';
        case 19:
            return $hour_now.' часов';
        case 20:
            return $hour_now . ' часов';
        case 21:
            return $hour_now . ' час';
        case 22:
            return $hour_now . ' часа';
        case 23:
            return $hour_now . ' часа';
        case 24:
            return $hour_now . ' часа';
    }
}


function print_minute($minute_now)
{
    switch ($minute_now) {
        case 0:
            return $minute_now. ' минут';
        case 1:
            return $minute_now. ' минута';
        case 2:
            return $minute_now. ' минуты';
        case 3:
            return $minute_now . ' минуты';
        case 4:
            return $minute_now.' минуты';
        case 5:
            return $minute_now . ' минут';
        case 6:
            return $minute_now . ' минут';
        case 7:
            return $minute_now . ' минут';
        case 8:
            return $minute_now . ' минут';
        case 9:
            return $minute_now . ' минут';
        case 10:
            return $minute_now . ' минут';
        case 11:
            return $minute_now . ' минут';
        case 12:
            return $minute_now . ' минут';
        case 13:
            return $minute_now . ' минут';
        case 14:
            return $minute_now . ' минут';
        case 15:
            return $minute_now . ' минут';
        case 16:
            return $minute_now . ' минут';
        case 17:
            return $minute_now . ' минут';
        case 18:
            return $minute_now . ' минут';
        case 19:
            return $minute_now.' минут';
        case 20:
            return $minute_now . ' минут';
        case 21:
            return $minute_now . ' минута';
        case 22:
            return $minute_now . ' минуты';
        case 23:
            return $minute_now . ' минуты';
        case 24:
            return $minute_now . ' минуты';
        case 25:
            return $minute_now. ' минут';
        case 26:
            return $minute_now. ' минут';
        case 27:
            return $minute_now . ' минут';
        case 28:
            return $minute_now.' минут';
        case 29:
            return $minute_now . ' минут';
        case 30:
            return $minute_now . ' минут';
        case 31:
            return $minute_now . ' минута';
        case 32:
            return $minute_now . ' минуты';
        case 33:
            return $minute_now . ' минуты';
        case 34:
            return $minute_now . ' минуты';
        case 35:
            return $minute_now . ' минут';
        case 36:
            return $minute_now . ' минут';
        case 37:
            return $minute_now . ' минут';
        case 38:
            return $minute_now . ' минут';
        case 39:
            return $minute_now . ' минут';
        case 40:
            return $minute_now . ' минут';
        case 41:
            return $minute_now . ' минута';
        case 42:
            return $minute_now . ' минуты';
        case 43:
            return $minute_now.' минуты';
        case 44:
            return $minute_now . ' минуты';
        case 45:
            return $minute_now . ' минут';
        case 46:
            return $minute_now . ' минут';
        case 47:
            return $minute_now . ' минут';
        case 48:
            return $minute_now . ' минут';
        case 49:
            return $minute_now . ' минут';
        case 50:
            return $minute_now . ' минут';
        case 51:
            return $minute_now . ' минута';
        case 52:
            return $minute_now.' минуты';
        case 53:
            return $minute_now . ' минуты';
        case 54:
            return $minute_now . ' минуты';
        case 55:
            return $minute_now . ' минут';
        case 56:
            return $minute_now . ' минут';
        case 57:
            return $minute_now . ' минут';
        case 58:
            return $minute_now . ' минут';
        case 59:
            return $minute_now . ' минут';

    }
}

echo print_hour($hour_now);
echo ' :';
echo print_minute(' '.$minute_now);
?>
