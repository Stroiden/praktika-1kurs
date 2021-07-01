<?php
$query = "UPDATE workers SET salary=200 WHERE name='Вася'";
$query = "UPDATE workers SET age=35 WHERE id=4";
$query = "UPDATE workers SET salary=700 WHERE salary=500";
$query = "UPDATE workers SET age=23 WHERE id>=2 AND id<=5";
$query = "UPDATE workers SET name='Женя', salary=900 WHERE name='Вася'";
?>