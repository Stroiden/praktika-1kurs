<?php
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem){
echo $elem."\n";
}

$arr1 = [1, 2, 3, 4, 5];
$result=0;
foreach ($arr1 as $elem) {
$result=$result+$elem;
}
echo $result."\n";


$arr2 = [1, 2, 3, 4, 5];
$result2 = 0;
foreach ($arr2 as $elem2) {
$result2 = $result2 + ($elem2 * $elem2);
}
echo $result2 ."\n";


$arr3 = ['green'=>'зеленый','red'=>'красный','blue'=>'голубой'];

foreach ($arr3 as $key => $value)
    echo "$key"."-".$value."\n";


$arr4 = ['Коля' => '200', 'Вася' => '300', 'Петя' => '400'];
foreach ($arr4 as $key => $value1)
    echo "$key"." - ". "зарплата ".$value1." долларов"."\n";
    
    
$x = 0;
while ($x++ <100){
    echo $x."\n";
}
echo "\n";


for ($x = 1; $x <= 100; $x++) {
echo $x."\n"; 
}
echo "\n";


$y = 10;
while ($y++ <33){
    echo $y."\n";
}
echo "\n";

for ($y = 11; $y <= 33; $y++){
 echo $y."\n";
}
 echo "\n";

$z = 0;
while ($z < 100){
    echo $z."\n";
    $z+=2;
}
echo "\n";

for ($z = 2; $z <= 100; $z+=2){
echo $z."\n";
}
echo "\n";



$sum = 0;
	for ($a = 1; $a <= 100; $a++){
		$sum += $a;
	}
	echo $sum."\n";
	echo "\n";
	
	
$arr5 =[2, 5, 9, 15, 0, 4];
foreach ($arr5 as $elem5) {
    if ($elem5 > 3 && $elem5 < 10)
        echo $elem5."\n";
    }
    echo "\n";
    
    
$arr6 = array(1,2,5,-1,-2,-5);
$sum2 = 0;
foreach($arr6 as $t )
    if($t > 0)
    $sum2 += $t;
  echo$sum2."\n";
  echo "\n";
   

$arr7 = [1, 2, 5, 9, 4, 13, 4, 10];
foreach ($arr7 as $e) 
    if ($e > 3 && $e < 5){
            echo 'Есть!'.' ';
    }
    echo "\n";
    
    
$arr8 = ['10', '20', '30', '50', '235', '3000'];
 
$arr8 = array_filter($arr8, function($t){
    $char = str_split($t)[0];
    $chars = [1, 2, 5];
    return in_array($char, $chars);
    });
    var_dump ($arr8);
    echo "\n";


$arr9 = array (1, 2, 3, 4, 5, 6, 7, 8, 9);
foreach ($arr9 as $value9){
    echo "-$value9";
}
echo "\n";


$arr10 = [1, 2, 3, 4, 5, 6, 7, 8, 9];
	foreach ($arr10 as $key => $elem10) {
		if ($key == 0) {
			echo '-' . $elem10 . '-';
		}
		
		else {
			echo $elem10 . '-';
		}
	}
echo "\n";
	

$days = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	foreach ($days as $key => $elem) :
		if ($key < 5) {
		echo $elem  . ' ';
		}
		else {
		echo '<b>.$elem.</b>';
		}
	endforeach;
	
	
$day = 'пятница';
$arrW = ['понедельник', 'вторник', 'среда', 'четверг', 'пятница', 'суббота', 'воскресенье'];
	foreach ($arrW as $key => $elem) {
		if ($elem !== $day) {
			echo $elem . ' ';
		}
		else {
			echo'<i>. $elem .</i>';
		}
	}
	echo "/\n";
	
	
$arr11 = [];
	for ($i = 1; $i <= 100; $i++){
		$arr11[] = $i; 
	}
	var_dump($arr11);
	
	
$arr = ['green' => 'зеленый', 'red' => 'красный','blue' => 'голубой'];
$en = [];
$ru = [];

foreach ($arr as $itemEn => $itemRu) {
    $en[] = $itemEn;
    $ru[] = $itemRu;
}
echo 'Английские названия ';
print_r($en);
echo 'Русские названия ';
print_r($ru);



$num = 1000;
	$i = 0;
	while ($num > 50){
		$num /= 2;
		$i++;
	}
	echo $num.'<br>';
	echo $i.'<br>';
	
	
for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);
	echo $num.'<br>';
	echo $i.'<br>';
?>   
