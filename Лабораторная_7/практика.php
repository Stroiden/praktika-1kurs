<?php
	$str = 'apple';
	$first = substr($str, 0, 1);
	$str = strtoupper($first).substr($str, 1, strlen($str));
	echo $str."<br>";
?>


<?php
	$str ='apple';
	$arr = str_split($arr, 1);
	$arr = array_reverse($arr);
	$str = implode($arr);
	echo $str."<br>";
?>


<?php
	$str ='apple';
	$str2 = '';
	$numStr = strlen($str);;
	for ($i = $numStr; $i >= 1; $i--) {
		$str2 .= substr($str, $i-1, 1);
	}
	echo $str2."<br>";
?>
<?php
	$str = 'apple';
	$numStr = count(str_split($str, 1));
	echo $numStr."<br>";
 ?>
<?php
	$str = 'apple';
	$str1 = str_split($str);
	$str2 = '';
	foreach ($str1 as $elem) {
		if(ord($elem) >= 97 && ord($elem) <= 122) {
			$str2 .= strtoupper($elem);
		} else {
			$str2 .= strtolower($elem);
		}
	}
	echo $str2."<br>";
?>
<?php
	$arr = explode('_', 'var_test_text');
	$str = '';
	foreach ($arr as $elem) {
		if($elem == $arr[0]) {
			$str .= $elem;
		} else {
			$str .= ucfirst($elem);
		}
	}
	echo $srt."<br>";
?>
<?php
	for ($i = 1; $i <= 9; $i++) {
		echo str_repeat($i , $i) . '<br>';
	}
 ?>
<?php
	$str = 'xxxxxxxxxx';
	$strNum = strlen($str);
	$str2 = '';
	for ($i = $c; $i > 0; $i--) {
		$str2 .= substr($str, 0, $i) . '<br>';
	}
	echo $str2."<br>";
 ?>
<?php
	$arr = [1, 2, 3, 4];
	$newArr = [];
	foreach ($arr as $elem) {
		for ($i = 1; $i <= $elem; $i++) {
			$newArr[] = $elem;
		}
	}
	var_dump($newArr)."<br>";
?>
<?php
	$arr = [1, 2, 3, 4, 5, 6];
	$newArr = [];
	$key = [];
	$num = count($arr);
	for ($i = 1; $i <= $num -1; $i+= 2) {
		$key = $arr[$i];
		$newArr[$key] = $arr[$i + 1];
	}
	var_dump($newArr)."<br>";
?>
<?php
	$str = 'aazzqqq';
	$i = 0;
	$res = '';
	while ($i <= strlen($str)) {
		$res .= substr($str, $i, 1);
		$i += 2;
	}
	echo $res."<br>";
?>
<?php
	$str = '12345678';
	$newStr = array_reverse(str_split(strrev($str), 2));
	echo implode('', $newStr)."<br>";
?>
<?php
	function getArrUnique ($arr)
	{
		$result = [];
		foreach ($arr as $elem) {
			if (in_array($elem, $result) == false) {
				$result[] = $elem;
			}
		}
		return $result;
	}
?>
<?php
	$arr = [1, 1, 1, 2, 3, 3, 4 ,5, 1, 6, 1, 3];
	$newArr = [];
	$elems = count($arr);
	for ($i = 0; $i < $elems; $i++) {
		$value = $arr[$i];
		unset($arr[$i]);
		if (in_array($value, $arr)) {
			$newArr[] = $value;
		}
		$arr[$i] = $value;
	}
	$arr = $newArr;
	echo var_dump($arr)."<br>";
?>

<?php
	$num = 31;
	$flag = false;
	for ($i = 2; $i < $num; $i++) {
		if ($num % $i == 0) {
			$flag = true;
			break;
		}
	}

	if ($flag == true) {
		echo'Простое число'."<br>";
	} else {
		echo 'Сложное число'."<br>";
  }
?>
<?php
	$arr = ['http://google.com', 'https://youtube.com', 'https://vk.com'];
	$newArr = [];
	foreach ($arr as $elem) {
		$pos = strpos($elem, 'http://');
		if ($pos !== false) {
			$newArr[] = $elem;
		}
	}
	
	var_dump($newArr)."<br>";
?>
