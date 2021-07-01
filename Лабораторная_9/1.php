<html>
<head></head>
<body>
<?php
echo "Лабораторная работа 1 "."<br>";
$name = "Таня";
echo "Hello! ". $name."<br>";
?>
<?php
	$name = "Таня";
	echo "Hello! <b>$name</b>"."<br>";
?>
</body>
</html>


<html>
<head></head>
<body>
	<?php
	$a=2;
	$b=3;
	$c=$a+$b;
	echo "В результате сложения чисел $a и $b равняется $c<br>";
	?>
</body>
</html>


<html>
<head></head>
<body>
	<?php
	$a=2;
	$b=3;
	$c=$a+$b;
	echo "В результате сложения чисел <i>$a<i> и <i>$b<i> равняется $c<br>";
	?>
</body>
</html>


for ($i=1;$i<100;$i++){
echo "$i";
}
<html>
<head></head>
<body>
	<?php
	for ($i=1;$i<=100;$i++){
		echo "$i<br>";
	}
	?>
	</table>
</body>
</html>



<html>
<head></head>
<body>
	<?php

	$sum = 6;
	if (($sum % 2) ==0 ){
		echo "Число четное"."<br>";
	} else {
		echo "Число нечетное"."<br>";
	}
	?>
	</table>
</body>
</html>


<html>
<head></head>
<body>
<?php
$variable = '<table border=1><tr><td>*</td></tr></table>';


?>
</body>
</html>


<html>
<head></head>
<body>
<?php
$variable = '<table border=1><tr><td>*</td></tr></table>';
echo $variable."<br>";
?>
</body>
</html>


<html>
<head></head>
<body>

<?php
	$head = "<table>";
	$body = "<tr><td>*</td></tr>";
	$footer = "</table>";
?>
</body>
</html>


<html>
<head></head>
<body>
<?php
	$head = "<table border=1>";
	$body = "<tr><td>*</td></tr>";
	$footer = "</table>";
	echo $head.$body.$footer;
?>
</body>
</html>


<html>
<head></head>
<body>
<?php
echo "<table border=1 >";
for ($i = 0; $i < 10; $i++) {
echo"<tr>"; for ($g = 0; $g < 1; $g++)
{
echo "<td>"; echo "10"; echo "</td>";
}
echo"</tr>"; } echo "</table>";
?>
</body>
</html>


<html>
<head></head>
<body>
<?php
	echo "<table border=1 >";
		for ($i = 0; $i < 1; $i++) {
			echo"<tr>"; 
			for ($g = 0; $g < 10; $g++) {
				echo "<td>"; echo "10"; echo "</td>";
			}
			echo"</tr>"; 
		} 
	echo "</table>";
?>
</body>
</html>


<html>
<head></head>
<body>
<?php
function drawTable($cols, $rows,$j=0){
	echo "<table border = '1'>";
	for ($tr=1; $tr <= $rows; $tr++) {
		echo "<tr>";
		for($td = 1; $td <=$cols; $td++,$j) {
			echo "<td>" .++$j. "</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}
drawTable(10,1);
?>
</body>
</html>


<html>
<head></head>
<body>
<?php
	echo "<table border=1 >";	
	for ($i = 0; $i < 5; $i++) {
		echo"<tr>";
		for ($g = 0; $g < 5; $g++) {
			echo "<td>";
			echo "0";
			echo "</td>";
		}	
		echo"</tr>";
	}
	echo "</table>";
?>
</body>
</html>


<html>
<head></head>
<body>
<?php
	echo "<table border=1 >";	
	for ($i = 0; $i < 3; $i++) {
		echo"<tr>";
		for ($g = 0; $g < 5; $g++) {
			echo "<td>";
			echo "Столбец ";
			echo $g+1;
			echo "<br>";
			echo " Строка ";
			echo $i+1;
			echo "</td>";
		}	
		echo"</tr>";
	}
	echo "</table>";
?>
</body>
</html>


<html>
<head></head>
<body>
	<table border="1" cellpadding="4">
	<tr bgcolor="#ccc">
	<th>X</th>
	<th>Y</th>
	</tr>
	<?php
		$x = 1;
		for($i = 0; $i < 20; $i++) {
			$y = $x * $x;
			echo '<tr>';
			echo "<td>$x</td><td>$y</td>";
			echo '</tr>';
			$x++;
		}
	?>
	</table>
</body>
</html>


<html>
<head></head>
<body>
	<table border="1" cellpadding="4">
	<tr bgcolor="black">
	<th><font color="white"> #</font></th>
	<th><font color='white'> X</font></th>
	<th><font color='white'> Y</font></th>
	</tr>
	
	<?php
		$x = 1;
		for($i = 1; $i < 21; $i++) {
			$y = $x * $x;
			echo '<tr>';
			echo "<td>$i</td><td>$x</td><td>$y</td>";
			echo '</tr>';
			$x++;
		}
	?>
	</table>
</body>
</html>


<html>
<head></head>
<body>
	<table border="1" cellpadding="4">
	<tr bgcolor="black">
	<th><font color="white"> #</font></th>
	<th><font color='white'> X</font></th>
	<th><font color='white'> Y</font></th>
	</tr>
	
	<?php
		$x = 1;
		for($i = 1; $i < 21; $i++) {
			$y = $x * $x;
			echo '<tr>';
			echo "<td>$i</td><td>$x</td><td>$y</td>";
			echo '</tr>';
			$x++;
		}
	?>
	</table>
</body>
</html>
