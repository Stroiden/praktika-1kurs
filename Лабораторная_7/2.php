<?php
$arr = ['a', 'b', 'c'];
$arr[0] = 'a';
$arr[1] = 'b';
$arr[2] = 'c';
var_dump($arr);


printf($arr[0].$arr[1].$arr[2] ."\n");


$arr1 = ['a', 'b', 'c', 'd'];
printf($arr1[0].'+'.$arr1[1].','.$arr1[2].'+'.$arr1[3]."\n");

$arr2 = ['2', '5', '3', '9'];
$result = ($arr2[0] + $arr2[1])*($arr2[2] + $arr2[3]);
printf($result ."\n");

$arr3[] = 1;
$arr3[] = 2;
$arr3[] = 3;
$arr3[] = 4;
$arr3[] = 5;;

$arr4 = ['a'=>1, 'b'=>2, 'c'=>3];
printf($arr4['c']."\n");

$arr4 = ['a'=>1, 'b'=>2, 'c'=>3];
printf($arr4['a'] + $arr4['b'] + $arr4['c'] ."\n");

$arr5 = ['Коля'=>'1000$', 'Вася'=>'500$', 'Петя'=>'200$'];
printf('Зарплата Коли: '.$arr5['Коля'].' Зарплата Пети: '.$arr5['Петя']."\n");

$week = ['1' => 'Понедельник', '2' => 'Вторник', '3' => 'Среда', '4' => 'Четверг', '5' => 'Пятница', '6' => 'Суббота', '7' => 'Воскресенье'];
printf($week['6']."\n");

$day = 3;
printf($week[$day]."\n");

$arr6 = [
    'cms'=>['joomla', 'wordpress', 'drupal'],
    'colors'=>['blue'=>'голубой', 'red'=>'красный', 'green'=>'зеленый']
];
printf($arr6['cms']['0'].' '.$arr6['cms']['2'].' '.$arr6['colors']['green'].' '.$arr6['colors']['red']."\n");

$days = [
	'ru'=>[1=>'Понедельник', 2=>'Вторник', 3=>'Среда', 4=>'Четверг', 5=>'Пятница', 6=>'Суббота', 7=>'Воскресенье'],
	'en'=>[1=>'Monday', 2=>'Tuesday', 3=>'Wednesday', 4=>'Thursday', 5=>'Friday', 6=>'Saturday', 7=>'Sunday']
];
printf($days['ru'][1]."\n");
printf($days['en'][3]."\n");

$lang = 'ru';
$day = 6;
echo $days[$lang][$day];
?>
