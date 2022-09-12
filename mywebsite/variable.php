<?php
    $age = 23;
    $name = "Rinowo";

    //quy tac
    //1. $
    //2 Bat dau ki tu va ki tu dac biet
    // vd $_marks = 12;
    //3. A - Z a - z; _0-9

    echo $age;
    echo $name;

    echo "<h1> This is h1 tags </h1>";
    echo "<h2>$name</h2>";
    echo "<h2>$age</h2>";


    //Arrays
    $students = array("Tung Anh", "Rino", "Rinu");
    echo "<br>";
    echo $students[0];
    echo "<br>";
    echo $students[1];
    echo "<br>";
    echo $students[2];

    //Cau lenh dieu kien: if, if-else, elseif, switch

    echo "<br>";
    if ($age <= 20)
    {
        echo "chua du tuoi";
    } else {
        echo "du tuoi";
    }

    //Tat ca cac ham php deu viet thuong


    echo "<br>";
    date_default_timezone_set('UTC');
    $d = date("l");
    $today = date("d.m.y H:i:s");

    if ($d == "Fri") {
        echo "thu sau";
    } else {
        echo "di lam";
    }

    echo "<br>";

    echo $today;
    echo "<br>";

    //Loops
    //for, foreach, do...while, while
    $i = 0;
    while ($i <= 5) {
        $i++;

        echo "Ket qua in ra cua i: ". $i . "<br>";
    }

    echo "<br>";

    $j = 0;
    do {
        $j++;
        echo "Ket qua in ra cua i: ". $j . "<br>";
    } while ($j <=5);

    foreach($students as $value) {
    echo $value . "<br>";
}
//function
function getSum($num1, $num2) {
    $sum = $num1 + $num2;
    echo $sum;
}
echo "<br>";
echo getSum(5,7);
?>