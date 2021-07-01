<?php
for ($i = 1; $i <= 9; $i++) {
    $str .= $i;
}
echo $str."<br>";

for ($i = 9; $i <= 1; $i--) {
    $str2 .= $i;
}
echo $str2."<br>";

for ($i = 1; $i <= 9; $i++) {
    $str3 .= '-'.$i;
}
$str3 .= '-';
echo $str3."<br>";
?>
