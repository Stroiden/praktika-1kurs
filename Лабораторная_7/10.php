<?php 
function sqare($num)
{
return $num * $num;
}
echo sqare(4).'<br>';


function sum($num1, $num2){
return $num1 + $num2;
}
echo sum(8, 8).'<br>'; 


function del ($num1, $num2, $num3){
$rezult = ($num1 + $num2)/$num3;
return $rezult;
}
echo del (12, 7, 3).'<br>';

function day($num){
$day = array('Пн', 'Вт', 'Ср', 'Чет', 'Пят', 'Суб', 'Воск');
echo $day[$num-1];
}
echo day(1).'<br>'; 
?>