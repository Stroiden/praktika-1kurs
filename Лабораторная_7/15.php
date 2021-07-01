<?php
function isNumberInRange($num) {
return ($num > 0 && $num <10);
}

$arr = [1,4,67,-9,45,6];
$newArr = [];

for($i = 0; $i < count($arr); $i++) {
if(isNumberInRange($arr[$i])) {
$newArr.push($arr[$i]);
}
echo $newArr;
}



function getDigitsSum($num2) {
$sum = 0;
$num2 = String($num2);
for($i =0; $i < $num2.length; $i++) {
$sum += Number($num2[i]);
}
return $sum;
}

echo(getDigitsSum(567123456789));


function getDigitsSum($num2) {
$sum3 = 0;
$num2 = String($num2);
for($i = 0; $i < $num2.length; $i++) {
$sum3 += Number($num2[i]);
}
return $sum3;
}

$arr3 = [];
for($i = 1; $i< 2020; $i++) {
if(getDigitsSum($i) == 13) {
$arr3.push($i);
}
}
echo($arr3);


function isEven($num4) {
return $num4 % 2 == 0;
}

echo(isEven(8));



function isEven($num5) {

return $num5 % 2 == 0;
}

$arr5 = [5,6,9,34,65,89,0,-7,-6,39,2];
$result5 = [];

for($i =0; $i < $arr5.length; $i++) {
if(isEven($arr5[i])) {
$result5.push($arr5[i]);
}
}
echo($result5);


 ?>
