<?php
    //Задание 1
    for ($i=5; $i<=13; $i++){
        echo "<p>$i</p>";
    }

    //Задание2
    $num=1000;
    $i=0;
    while ($num>50){
        $num/=2;
        $i++;
    }
    echo "<p>Num= $num</p>";
    echo "<p>Количество интераций= $i</p>";

    $num=1000;
    for($i=0;$num>50;$i++){
        $num/=2;
    }
    echo "<p>Num= $num</p>";
    echo "<p>Количество интераций= $i</p>";

    //Задание3
    for ($i=0; $i<=10; $i++){
        echo "<p>i= $i </p>";
        $j=$i;
        for($j=0; $j<=10-$i;){
            echo " $j ";
            $j++;
        }

    }
?>