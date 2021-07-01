<html>
<head></head>
<body>
	<?php
		if ($_POST['diya']=='plus') {
			$c=$_POST['a']+$_POST['b'];
			echo "сумма чисел = $c";
		} else {
			$c=$_POST['a']*$_POST['b'];
			echo "произведение чисел = $c";
		}
		echo "<br><a href='/lab2.htm'> Перейти на предыдущую страницу</a>";
	?>
</body>
</html>
