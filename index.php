<?php

/////Q1/////
for($i=1;$i<=10;$i++){
    if($i==10){
        echo $i;
    }
    else{
    echo $i."-";
    }
}
echo "<hr>";
/////Q2/////

$sum=0;
for($i=1;$i<30;$i++){
    $sum=$sum+$i;
}
echo $sum;


echo "<hr>";
/////Q3c////////

$chr='A';
$n=1;
for($i=5; $i > 0; $i--){

    for($j=$i-1;$j >0;$j--){
        echo "A"." ";
    }
    echo str_repeat($chr.'&nbsp;',$n++);
    $chr++;
    echo "<br/>";
}
echo "<hr>";
//////Q3b/////////
$num=1;
$n=1;
for($i=5; $i > 0; $i--){

    for($j=$i-1;$j >0;$j--){
        echo "1"." ";
    }
    echo str_repeat($num.'&nbsp;',$n++);
    $num++;
    echo "<br/>";
}
echo "<hr>";
//////Q4/////////

for ($i=1; $i<=5; $i++)
{
    for($j=1;$j<=5;$j++){
        if($i==$j){
        echo $j." ";
        }
        else{
            echo "0"." ";
        }
    }
    echo "<br/>";
 
}
echo "<hr>";
//////Q5/////////

$numf=5;
$factorial=1;
for($y=$numf;$y>=1;$y--){
 $factorial=$factorial*$y;

}
echo $factorial;

echo "<hr>";
///////Q6////////

$num1=0;
$num2=1;
echo $num1." ".$num2." ";
for($x=0;$x<30;$x++){
    $num3=$num1+$num2;
    echo $num3." ";
    $num1=$num2;
    $num2=$num3;

}
echo "<hr>";
///////Q7////////

$orange="OrangeAcademy";
$c="c";
$count=0;
$arr=str_split($orange);
foreach($arr as $word){
    if($word==$c){
        $count=$count+1;
    }
}
echo $count;

echo "<hr>";
//////Q8/////////
echo "<table border='1' cellpadding='3px'cellspacing='0px'>";
for($i=1;$i<=6;$i++){
    echo "<tr>";
    for($j=1;$j<=6;$j++){
        echo "<td>$i*$j=$j</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>



