<?php
	for ($i = 1; $i <= 100; $i++) {
		echo $i . '<br>';
	}
?>

<?php
	for ($i = 0; $i <= 100; $i += 2) {
		echo $i . '<br>';
	}
?>
<?php
	$sum = 0;
	for ($i = 1; $i <= 100; $i++) {
		$sum += $i;
	}
	echo $sum."<br>";
?>
<?php
	$sum = 0;
	for ($i = 1; $i <= 15; $i++) {
		$sum += $i * $i;
	}
	echo $sum."<br>";
?>
<?php
	$sum = 0;
	for ($i = 1; $i <= 15; $i++) {
		$sum += sqrt($i);
	}
	echo round($sum, 2)."<br>";
?>
<?php
	$sum = 0;
	for ($i = 1; $i <= 100; $i++) {
		if ($i % 7 == 0) {
			$sum += $i;
		}
	}
	echo $sum."<br>";
?>
<?php
	$arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = 'x';
	}
	var_dump($arr)."<br>";
?>
<?php
	$arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = $i;
	}
	var_dump($arr)."<br>";
?>
<?php
	$arr = [];
	for ($i = 10; $i > 0; $i--) {
		$arr[] = $i;
	}
	var_dump($arr)."<br>";
?>
<?php
	$arr = [];
	for ($i = 1; $i <= 10; $i++) {
		$arr[] = mt_rand(1, 10);
	}
	var_dump($arr)."<br>";
?>
<?php
	$str = '';
	for ($i = 1; $i <= 6; $i++) {
		$str .= rand(1, 9);
	}
	echo $str."<br>";
?>
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem;
	}
	echo $sum."<br>";
?>
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem * $elem;
	}
	echo $sum."<br>";
?>
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		$sum += $elem * $elem;
	}
	echo floor(sqrt($sum))."<br>";
?>
<?php
	$arr = [1, 2, 3, 4, 6, 9, 11];
	$sum = 0;
	foreach ($arr as $elem) {
		if ($elem > 0 and $elem < 10)
			$sum += $elem;
		}
	
	echo $sum."<br>";
?>
<?php
	$str = '';
	for ($i = 1; $i <= 10; $i++) {
		for ($j = 1; $j <= $i; $j++) {
			$str .= $i;
		}
	}
	echo $str."<br>";
?>
<?php
	$arr = [
		0=>['name'=>'Коля', 'salary'=>300],
		1=>['name'=>'Вася', 'salary'=>400],
		2=>['name'=>'Петя', 'salary'=>500],
	];
?>
<?php
	$arr = [];
	for ($i = 0; $i < 10; $i++) {
		for ($j = 0; $j < 10; $j++)
			$arr[$i][] = mt_rand(1, 10);
		}
	
	var_dump($arr)."<br>";
?>
