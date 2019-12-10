?php
$table="<table border='1' width=700";
$tr=1;
while($tr<=100){
    $table.="<tr>";
    $td=1;
    while ($td<=10){
        $x=$tr*$td;
        $table.="<td>$x</td>";
        $td++;

    }
    $table.="</tr>";
    $tr++;
}
$table.="/table";
echo $table;
?>

<?php
    $myArray=[];
    $some=true;
    $myArray[]=1;
    $myArray[]='Hello';
    $myArray[]=$some;
    var_dump($myArray);
?>

<?php

$mas=["Audi","BMW","VW"];

for ($i=0;$i<count($mas);$i++){
    echo $mas[$i]."<br>";
}

print_r($mas);
?>
<?php
foreach($mas as $value){
    echo $value."<br>";
}
?>

<?php
    $str=implode("...",$mas);
    echo $str;
    $massNew=explode("...",$str);
    print_r($massNew);
?>

<?php
$cars=["audi"=>1000,"bmw"=>2000,"vw"=>900];
print_r($cars);

foreach ($cars as $key=>$value) {
    if ($value<1000){
        $style=" style ='color:red;'";
    }
    echo "<h1 $style> Автомобиль $key стоит $value </h1>";
}

$cars2=["Audi"=>["price"=>1000,"color"=>"white","year"=>2019],
    "Seat"=>["price"=>500,"color"=>"red","year"=>2019]];
print_r($cars2);

echo $cars2['Seat']['color'];
