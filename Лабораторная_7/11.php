<?php
function five($arr)
{
    foreach ($arr as $item) {
        if ($item == 5) {
            return true;
        }
    }
    return false;
}
$num = [1, 2, 3, 4, 5, 6];
if (five($num)) {
    echo 'true'."<br>";
} else {
    echo 'false'."<br>";
}



function delitel($x)
{
    for ($i = 2; $i < $x; $i++) {
        if ($x % $i == 0) {
            return true;
        }
    }
    return false;
}
$num1 = 31;
if (delitel($num1)) {
    echo 'true'."<br>";
} else {
    echo 'false'."<br>";
}


$num2 = [1, 2, 3, 4, 5, 6];
$flag = false;
$kol = count($num2);
for ($i = 1; $i <= $kol; $i++) {
    if ($num2[$i] == $num2[$i - 1]) {
        $flag = true;
        break;
    }
}
if ($flag) {
    echo 'True';
} else {
    echo 'False';
}
?>
