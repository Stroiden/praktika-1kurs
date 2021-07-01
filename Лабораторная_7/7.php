<?php
$arr = [1, 2, 3, 4, 5, 6];
echo count ($arr)."<br>";

echo count ($arr)-0 ."<br>";

echo (in_array (3, $arr))."<br>";

echo array_sum($arr)."<br>";

echo array_product($arr)."<br>";

echo array_sum($arr) /count($arr)."<br>";

$arr2=range(1, 100);
var_dump($arr2)."<br>";

$arr3=range('a', 'z');
var_dump($arr3)."<br>";

$arr4=range(1, 9);
var_dump($arr4)."<br>";

echo array_sum(range(1, 100))."<br>";

echo array_product(range(1,10))."<br>";

$arr5= [1, 2, 3];
$arr6= ['a', 'b', 'c'];
$res=array_merge($arr5, $arr6);
var_dump($res)."<br>";

$arr7= ['a'=>1, 'b'=>2, 'c'=>3, 'd'=>4, 'e'=>5];
var_dump(array_slice($arr7, 1, 3))."<br>";

$arr8 = [1, 2, 3, 4, 5];
array_splice($arr8, 1, 2);
var_dump ($arr8);

$arr9 = [1, 2, 3, 4, 5];
array_splice($arr9, 0, 1);
array_splice($arr9, 3, 2);
var_dump($arr9);

$arr10 = [1, 2, 3, 4, 5];
array_splice ($arr10, 3,0, ['a', 'b', 'c']);
var_dump($arr10);

$arr11 = [1, 2, 3, 4, 5];
array_splice($arr11, 1,0,['a','b']);
array_splice($arr11, 6,0,['c']);
array_splice($arr11, 8,0,['e']);
var_dump($arr11);

$arr12 = ['a'=>1, 'b'=>2, 'c'=>3];
$keys = (array_keys($arr12));
$values = (array_values($arr12));

$arrk = ['a', 'b', 'c'];
$arrv = [1, 2, 3];
$arr13=array_combine($arrk, $arrv);
var_dump($arr13);

$arr14 =  ['a'=>1, 'b'=>2, 'c'=>3];
$result=array_flip($arr14);
var_dump($result);

$arr15 = [1, 2, 3, 4, 5];
$arr16 = array_reverse($arr15);
var_dump($arr16);

$arr17 = ['a', '-', 'b', '-', 'c', '-', 'd'];
echo array_search('-', $arr17)."<br>";

array_splice ($arr17, 1,1);
var_dump($arr17);

$arr18 = ['a', 'b', 'c', 'd', 'e'];
$result18 = array_replace($arr18, [0=>'!', 3=>'!!']);
var_dump($result18);

$arr19 = ['3'=>'a', '1'=>'c', '2'=>'e', '4'=>'b'];
sort ($arr19);
var_dump($arr19);
rsort ($arr19);
var_dump($arr19);
asort ($arr19);
var_dump($arr19);
arsort($arr19);
ksort($arr19);
var_dump($arr19);
krsort($arr19);
var_dump($arr19);
natsort ($arr19);
var_dump ($arr19);

$arr20 = [1 => 'a', 2 => 'b', 3 => 'c', 4 => 'd'];
$key20 = array_rand($arr20);
var_dump($key20)."<br>";

$key20 = array_rand($arr20);
var_dump($arr20[$key20])."<br>";

echo(shuffle($arr))."<br>";

$arr21 = range(1,25);
shuffle($arr21);
var_dump($arr21);

$arr22 = range ('a', 'z');
shuffle($arr22);
var_dump($arr22);

$arr23 = range ('a', 'f');
shuffle($arr23);
var_dump($arr23);

$arr24 = ['a', 'b', 'c', 'b', 'a'];
$arr25 = array_unique($arr24);
var_dump($arr25);

$arr26 = [1, 2, 3, 4, 5];
var_dump (array_shift($arr26));
var_dump (array_pop($arr26));

$arr27 = [1, 2, 3, 4, 5];
array_unshift($arr27, 0);
array_push($arr27, 6);
var_dump($arr27);

$arr28 = ['a', 'b', 'c'];
$arr28 = array_pad($arr28, 6, '-');
var_dump($arr28);

$arr29 = array_fill(0, 10, 'x');
var_dump($arr29);

$arr30 = range(1,20);
var_dump(array_chunk($arr30,4));

$arr31 = ['a', 'b', 'c', 'b', 'a'];
var_dump(array_count_values($arr31));


$arr32 = [1, 2, 3, 4, 5];
$result32 = array_map( 'sqrt', $arr32);
var_dump($result32);

// $arr33 = ['<b>php</b>', '<i>html</i>'];
// $result33 = array_map('')

$arr34 = [1, 2, 3, 4, 5];
$arr35 = [3, 4, 5, 6, 7];
$result34 = array_intersect($arr34, $arr35);
var_dump($result34);

$arr36 = [1, 2, 3, 4, 5];
$arr37 = [3, 4, 5, 6, 7];
$result36 = array_diff($arr36, $arr37);
var_dump($result36);

$str = '1234567890';
$arr38 = str_split($str, 1);
$result38 = array_sum($arr38);
echo $result38;

$keys = range('a', 'z');
$elems = range(1, 26);
$arr39 = array_combine($keys, $elems);
var_dump($arr39);

$arr40 = range(1, 9);
var_dump(array_chunk($arr40, 3));

$arr41 = [1, 2, 4, 5, 5];
$arr41 = ($arr41 = array_unique($arr41))[count($arr41)-2];
var_dump($arr41);
?>
