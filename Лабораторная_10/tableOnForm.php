<html>
<head></head>
<body style="font-size: 150%">
	<center>
	<?php
		$tb_name = $_POST['name'];
		$tb_color = $_POST['t-color'];
		echo $tb_name;
		
	?>
		<table border="1" style="
		<?php 
			echo "background-color: $tb_color;" ;
		
			if ($_POST['t-color']!='white') {
				echo "color: white;";
			}
			if ($_POST['formatir']) {
				echo "border-collapse: collapse; border: 2px solid white;";
			}
		?>">
		
		<?php
		for ($i = 1; $i < $_POST['stolb']+1; $i++) {
			echo"<tr>";
			for ($g = 1; $g < $_POST['strok']+1; $g++) {
				echo "<td>";
				if ($_POST['zapoln']=='z_ss') {
				echo "Столбец ";
				echo $g;
				echo "<br>";
				echo " Строка ";
				echo $i;
				} else if ($_POST['zapoln']=='z_nulls') {
				echo "0";
				} else if ($_POST['zapoln']=='z_null') {
				echo " ";
				} else if ($_POST['zapoln']=='z_stars') {
				echo "*";
				}
				echo "</td>";
			}	
			echo"</tr>";
		}
		?>
		</table>
	</center>
</body>
</html>
