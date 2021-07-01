<?php
$a = 1;
$a2 = 0;
$a3 = - 3;

if ($a == 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }

if ($a2 == 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }

if ($a3 == 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a > 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a2 > 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a3 > 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a < 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }

if ($a2 < 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a3 < 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a >= 0) {
    echo 'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a2 >= 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a3 >= 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a <= 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a2 <= 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a3 <= 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a !== 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a2 !== 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($a3 !== 0) {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    

$b = 'test';
$b2 = 'Тест';
$b3 = 3;

if ($b == 'test') {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($b2 == 'test') {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($b3 == 'test') {
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    

$c = '1';
$c2 = 1;
$c3 = 3;

if ($c === '1'){
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($c2 === '1'){
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }
    
if ($c3 === '1'){
    echo'Верно'."\n";
    } else {
        echo'Неверно'."\n";
    }


$d = 1;
$d1 = 3;
$d2 = -3;
$d4 = 0;
$d5 = null;
$d6 = true;
$d7 = '';
$d8 = '0';
if(empty($d)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d1)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d2)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d3)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d4)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d5)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d6)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d7)) echo'Верно'."\n"; else echo'Неверно'."\n";
if(empty($d8)) echo'Верно'."\n"; else echo'Неверно'."\n";

if(!empty($d)) echo'Верно'."\n"; else echo'Неверно'."\n";


if(isset($d1)) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if(isset($d5)) echo 'Верно'."\n"; else echo 'Неверно'."\n";

if(isset($d)) echo 'Верно'."\n"; else echo 'Неверно'."\n";

$var = true;
$var1 = false;

if ($var == true) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if ($var1 == true) echo 'Верно'."\n"; else echo 'Неверно'."\n";

if ($var) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if ($var1) echo 'Верно'."\n"; else echo 'Неверно'."\n";


if ($var !== true) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if ($var1 !== true) echo 'Верно'."\n"; else echo 'Неверно'."\n";

if (!$var) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if (!$var1) echo 'Верно'."\n"; else echo 'Неверно'."\n";



$e = 5;
$e1 = 0;
$e2 = -3;
$e3 = 2;
if ($e > 0 && $e < 5) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if ($e1 > 0 && $e1 < 5) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if ($e2 > 0 && $e2 < 5) echo 'Верно'."\n"; else echo 'Неверно'."\n";
if ($e3 > 0 && $e3 < 5) echo 'Верно'."\n"; else echo 'Неверно'."\n";


if($e == 0 || $e == 2) echo ($e + 7)."\n"; else echo ($e / 10)."\n";
if($e1 == 0 || $e1 == 2) echo ($e1 + 7)."\n"; else echo ($e1 / 10)."\n";
if($e2 == 0 || $e2 == 2) echo ($e2 + 7)."\n"; else echo ($e2 / 10)."\n";
if($e3 == 0 || $e3 == 2) echo ($e3 + 7)."\n"; else echo ($e3 / 10)."\n";


$f = 1;
$f1 = 0;
$f2 = 3;
$g = 3;
$g1 = 6;
$g2 = 5;
if ($f <= 1 && $g >= 3) echo ($f + $g)."\n"; else echo ($f - $g)."\n";
if ($f1 <= 1 && $g1 >= 3) echo ($f1 + $g1)."\n"; else echo ($f1 - $g1)."\n";
if ($f2 <= 1 && $g2 >= 3) echo ($f2 + $g2)."\n"; else echo ($f2 - $g2)."\n";

$h = 5;
$i = 12;
if(($h >2 && $h <11)||($i >= 6 && $i < 14)) echo 'Верно'."\n"; else echo 'Неверно'."\n";


$num = rand(1, 4);
$result = null;
switch ($num) {
    case 1:$result = 'Зима';
        break;
    case 2:$result = 'Весна';
        break;
    case 3:$result = 'Лето';
        break;
    case 4:$result = 'Осень';
        break;
    default :$result = 'Неверное значение!';
}
echo $result."\n";


$day = 23;
if($day <= 10){
    $decade = 1;
}
if($day >= 10 && $day <=20){
    $decade = 2;
}
if($day >= 21 && $day <= 31){
    $decade = 3;
}
echo $decade ."\n";


$month = 6;
if($month == 12 || $month == 1 || $month ==2){
    $result ='Зима';
}
if($month >= 3 && $month <= 5){
    $result = 'Весна';
}
if($month >= 6 && $month <= 8){
    $result = 'Лето';
}
if($month >= 9 && $month <=11){
    $result = 'Осень';
}
echo $result."\n";


$year = 2021;
if($year % 4 == 0 or ($year % 400 == 0 && $year % 100 != 0)){
    echo 'Високосный'."\n";
} else { 
    echo 'Не високосный'."\n";
}


$str = 'abcde';
	if ($str[0] === 'a')
		echo 'Да'."\n";
	else
		echo 'Нет'."\n";
		
		
$str2 = '12345';
	if ($str2[0] == 1 or $str2[0] == 2 or $str2[0] == 3)
		echo 'Да'."\n";
	else
		echo 'Нет'."\n";

$str3 = '707';
	$summa = $str3[0] + $str3[1] + $str3[2];
	echo $summa ."\n";
	
$str4 = '543721';
	if (($str4[0] + $str4[1] + $str4[2]) == ($str4[3] + $str4[4] + $str4[5]))
		echo 'Да'."\n";
	else
		echo 'Нет'."\n";
?> 
