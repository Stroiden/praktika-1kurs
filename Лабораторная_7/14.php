<?php
$arr = [];
$str = '';
for ($i = 1; $i <= 10; $i++) {
    $str .= 'x';
    $arr[] = $str;
}
echo $str."<br>";

$arr2 = [];
for ($i = 1; $i <= 10; $i++) {
    $str2 = '';
    for ($j = 1; $j <= $i; $j++) {
        $str2 .= $i;
    }
    $arr2[] = $str2;
}
echo $str2."<br>";

function arrayFill($str, $kol)
{
    $result = [];
    for ($i =1; $i <= $kol; $i++) {
        $result[] = $str;
    }
    return $result;
}


$arr3 = [1, 2, 3, 4, 5, 6, 7, 8];
$kol = 0;
$sum3 = 0;
for ($i = 0; $i < count($arr3); $i++) {
    $sum3 += $arr3[$i];
    $kol++;
    if ($sum3 > 10) {
        break;
    }
}
echo $kol;

$sum4 = 0;
foreach ($arr4 as $item) {
    foreach ($item as $subItem) {
        $sum4 += $subItem;
    }
}
echo $sum4."<br>";

$arr5 = [[[1, 2], [3, 4]], [[5, 6], [7, 8]]];
$sum5 = 0;
foreach ($arr5 as $elem5) {
    foreach($elem5 as $subElem) {
        foreach($subElem as $subSubElem) {
            $sum5 += $subSubElem;
        }
    }
}
echo $sum5."<br>";

$arr6 = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $arr6[$i][$j] = $count;
        $count++;
    }
   
}
 echo $count;
 ?>
