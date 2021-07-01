<?php
$a =10;
$b = 3;
echo ($a % $b)."\n";


if($a % $b == 0 && $b !=0) {
    echo 'Делиться';
} else { 
    echo 'Не делится'."\n";
}
    
    
echo pow(2,10)."\n";

echo sqrt(245)."\n";


$arr = array(4, 2, 5, 19, 13, 0, 10);
$result = 0;
foreach($arr as $a){
	$result += pow($a, 2);
}
echo $result."\n";
echo sqrt($result)."\n";

$c = sqrt(379);
echo 'Округление числа до целого: '.round($c)."\n"; 
echo 'Округление числа до десятых: '.round($c,1)."\n"; 
echo 'Округление числа до сотых: '.round($c,2)."\n"; 


$d = sqrt(587);
$e = floor($d);
$f = ceil($d);
$arr = array("floor"=>"$e", "ceil"=>"$f");
echo $arr["floor"]."\n";

echo 'Минимальное число: '.min(4, -2, 5, 19, -130, 0, 10)."\n";
echo 'Максимальное число: '.max(4, -2, 5, 19, -130, 0, 10)."\n";

echo mt_rand(1,100)."\n";

$h = array();
for($i=1; $i<=10; $i++){
	$h[$i] = mt_rand(1,10);	
}
print_r($h)."\n";

$i = 3;
$j = 6;
echo abs($i - $j)."\n";

$arr1 = [1, 2, -1, -2, 3, -3];
foreach ($arr1 as $t);
echo abs ($t)."\n";


$number = 30;
// foreach ($number as $del);
// if ($number % $del == 0);
// echo $del;


$divisors = array ();
    for($i = 1; $i < $number; $i ++) {
        if ($number % $i == 0) {
            $divisors [] = $i;
        }
    }
array_push($divisors, $i);



$arr2 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum2 = [];
foreach($arr2 as $elem) {
    if(array_sum($sum2) == 10 || (array_sum($sum2) > 10)) {
        echo 'Что бы сумма получилась 10, понадобилось ' . count($sum2) . ' первых элемента';
        return;
    }
    else {
       array_push($sum2, $elem)."\n";
   
    }
}
?>