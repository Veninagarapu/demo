<?php

echo "hello world<br>";

$x=10;
$y=3;

$sum = $x+$y;

echo "sum: $sum<br>";

function even ($num){
    if($num%2 == 0){
 echo "even number<br>";
}else{
    echo "odd number<br>";
}
}
even(10);

function calculator($x,$y, $operation){
    if ($operation == "add"){
        $res = $x+$y;
        echo " $res<br>";
    }
}

calculator(2,3,"add");


function table($num){
for($i=1; $i<10; $i++){
     $res = $num * $i;
     echo "$res"; 
}

}
table(5);

$numbers = [1, 5, 7, 3, 9, 2];

foreach($numbers as $number){
    
}

echo "The largest number is: $largest";
