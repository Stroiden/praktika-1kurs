<html>
<head></head>
<body>
	<?php
		if ($_POST['pol']=='female') {
			echo "Уважаемая";
		} else {
			echo "Уважаемый";
		}
		$n1 = $_POST['name'];
		$n2 = $_POST['second-name'];
		echo " $n1 $n2. Мы рады приветствовать вас на наших курсах. Надеемся на 
дальнейшее (продолжение) сотрудничество. ";
	?>
</body>
</html>
