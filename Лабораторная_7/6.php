<?php
echo strtoupper('php')."<br>";

echo strtolower('PHP')."<br>";

echo ucfirst(strtoupper('london'))."<br>";

echo ucfirst(strtolower('London'))."<br>";

echo ucwords('london is the capital of great britain')."<br>";

echo ucfirst(strtolower('LONDON'))."<br>";

$str = 'html css php';
echo strlen($str)."<br>";

$password = 'afsfwfasf';
if (strlen($password) < 5)
	echo "Пароль слишком короткий, минимум 5 символов"."<br>";
elseif (strlen($password) > 10)
	echo "Пароль слишком длинный, максимум 10 символов"."<br>";
else
	echo "Пароль подходит"."<br>";
	
$str2 = 'html css php';
echo substr($str2, 5, 3).', ';
echo substr($str2, -3, 3)."<br>";

$str3 = 'Строка';
$str4 = substr($str3, -3, 3);
echo $str4."<br>";

$str5 = 'http://127.0.0.1';
if (substr($str5, 0, 7) == 'http://')
	echo "Да"."<br>";
else 
	echo "Нет"."<br>";
	

if (substr($str, 0, 7) == 'http://' || substr($str, 0, 8) == 'https://')
	echo "Да"."<br>";
else 
	echo "Нет"."<br>";
	
$str6 = 'авфв.png';
if (substr($str6, -4) == '.png')
	echo "Да"."<br>";
else 
	echo "Нет"."<br>";
	
$str7 = 'пывпуп.jpg';
if (substr($str7, -4) == '.png' || substr($str7, -4) == '.jpg')
	echo "Да"."<br>";
else 
	echo "Нет"."<br>";
	
$str8 ='строка';
if (strlen($str8) > 5)
	$exitStr = substr($str8, 0, 5).'...';
else
	$exitStr = $str8;
echo $exitStr."<br>";

$date = '31.12.2013';
echo str_replace('.', '-', $date)."<br>";

$str9 = ' a b c ';
$switchStr = str_replace(['a', 'b', 'c'], [1, 2, 3], $str9);
echo $switchStr."<br>";

$str10 = '1a2b3c4b5d6e7f8g9h0';
$replaceStr = preg_replace("/\d/", "", $str);
$replaceStr2 = $str10;
for ($i = 0; $i < 10; $i++){
	$replaceStr2 = str_replace($i, '', $replaceStr2);
}
echo $replaceStr2."<br>";

$str11 = 'abc';
$exitStr = strtr($str11, 'abc', '123')."<br>";
echo $exitStr;
$exitStr2 = strtr($str11, ['a'=>1, 'b'=>2, 'c'=>3]);
echo $exitStr2."<br>";

$str12 = 'Text';
echo substr_replace($str12, '!!!', 3, 5)."<br>";

$str13 = 'abc abc abc';
echo strpos($str13, 'b')."<br>";

echo strrpos($str13, 'b')."<br>";

echo strpos($str13, 'b', 3)."<br>";

$str = 'aaa aaa aaa aaa aaa';
echo strpos($str14, ' ', strpos($str14, ' ')+1)."<br>";

$str15 = '..text';
if (strpos($str15, '..') !== false) {
	echo "есть"."<br>";
} else {
	echo "нет"."<br>";
}

$str16 = 'http://yt';
if (strpos($str, 'http://') === 0) {
	echo "да"."<br>";
} else {
	echo "нет"."<br>";
}
	
$str17 = 'html css php';
$arr = explode(' ', $str16);
var_dump($arr)."<br>";	

$str18 = 'html css php';
$arr2 = explode(' ', $str18);
var_dump($arr2)."<br>";

$date = '2025-12-31';
$arr3 = explode('-', $date);
echo $arr3[2].'.'.$arr3[1].'.'.$arr3[0].'<br>';
$arr3 = array_reverse($arr3);
$str19 = implode('.', $arr3);
echo $str19."<br>";

$str20 = '1234567890';
$arr4 = str_split($str20, 2);
var_dump($arr4)."<br>";

$arr5 = str_split($str20);
var_dump($arr5)."<br>";

$arr6 = str_split($str20, 2);
echo implode('-', $arr6)."<br>";

$str21 = ' строка ';
echo trim($str21)."<br>";

$str22 = '/php/';
echo trim($str22, '/')."<br>";

$str23 = 'слова слова слова.';
echo trim($str23, '.').'.'."<br>";

$str24 = '12345';
echo strrev($str24)."<br>";

$str25 = 'otto';
$exitStr5 = ($str25 == strrev($str25)) ? 'является' : 'не является';
echo $exitStr5."<br>";

echo str_shuffle($str24)."<br>";

$str26 = 'abcdefghiklmnopqrstvxyz';
$shuffle = str_shuffle($str26);
echo substr($shuffle, 0, 6)."<br>";

$str27 = '12345678';
echo number_format($str27, 0, ',', ' ')."<br>";

for ($i = 1; $i<10; $i++)
echo str_repeat('x', $i)."<br>";
	
for ($i = 1; $i<10; $i++)
echo str_repeat($i, $i)."<br>";

$str28 = 'html, <b>php</b>, js';
echo strip_tags($str28)."<br>";

echo strip_tags($str28, '<b><i>')."<br>";

echo htmlspecialchars($str29)."<br>";

echo ord('a')."<br>";
echo ord('b')."<br>";
echo ord('c')."<br>";
echo ord(' ')."<br>";

echo chr(33)."<br>";

$str30 = chr(rand(65,90));
echo $str30."<br>";

$str31 = '';
$len = 15;
for ($i = 0; $i < $len; $i++)
	$str31 .= chr(rand(97,122));
echo $str31."<br>";

$letter = 'd';
$answer = (ord($letter) >= 65 && ord($letter) <= 90) ? 'Большая' : ((ord($letter) >= 97 && ord($letter) <= 122) ? 'Маленькая' : 'Не является буквой латинского алфавита');
echo $answer."<br>";

$str32 = 'ab-cd-ef';
echo strchr($str32, '-')."<br>";

echo strrchr($str33, '-')."<br>";

$str34 = 'ab--cd--ef';
echo strstr($str34, '--')."<br>";

$arr7 = explode('_', 'var_test_text');
	$str35 = '';
	foreach ($arr7 as $key=>$val) {
		if($key == 0) {
			$str35 .= $val;
		} else {
			$str35 .=  ucfirst($val);
		}
	}
	echo $str35."<br>";
	
$arr8 = [1, 2, 3, 5, 13, 20];
	foreach ($arr8 as $val){
		if (strpos($val, '3') !== false){
			echo $val."<br>";
		}
	}
?>