<?php

$a = 3;
printf ($a. "\n");

$a1 = 10;
$b1 = 2;
printf ($a1 - $b1. "\n");
printf ($a1 + $b1. "\n");
printf ($a1 / $b1. "\n");
printf ($a1 * $b1. "\n");

$c = 15;
$d = 2;
$result = $c + $d;
printf ($result. "\n");

$a2 = 10;
$b2 = 2;
$c2 = 5;
printf ($a2 + $b2 + $c2. "\n");

$a3 = 17;
$b3 = 10;
$c3 = $a3 - $b3;
$d3 = 7;
$result = $c3 - $d3;
printf ($result."\n");

$text = 'Привет, Мир!';
printf ($text."\n");

$text1 = 'Привет, ';
$text2 = 'Мир!';
printf ($text1. $text2."\n");

$name = 'Максим';
printf('Привет, '.$name."\n");

$age = 18;
printf('Мне '.$age.' лет'."\n");

$text3 = 'abcde';
printf($text3[0]."\n");
printf($text3[2]."\n");
printf($text3[4]."\n");

$text4 = 'abcde';
printf ('!'.$text4[1].$text4[2].$text4[3].$text4[4]."\n");

$num = '12345';
printf($num[0] + $num[1] + $num[2] + $num[3] + $num[4]."\n");

printf('Секунд в часе: '. 60*60 ."\n");
printf('Секунд в дне: '. 60*60*24 ."\n");
printf('Секунд в месяце: '. 60*60*24*30 ."\n");

$hour = 14;
$minute = 25;
$second = 14;
printf($hour.':'.$minute.':'.$second ."\n");

$sqrt = 45;
printf($sqrt * $sqrt ."\n");

$var = 47;
$var += 7;
$var -= 18;
$var *= 10;
$var /= 20;
printf ($var ."\n");

$text5 = 'Я';
$text5 .= ' хочу';
$text5 .= ' знать';
$text5 .= ' PHP!';
printf($text5 ."\n");

$var1 = 10;
$var1++;
$var1++;
$var1--;
printf ($var1 ."\n");

$var2 = 10;
$var2 += 7;
$var2 ++;
$var2 --;
$var2 += 12;
$var2 *= 7;
$var2 -= 15;
printf ($var2 ."\n");
?>
