<?php
$query = "SELECT * FROM workers WHERE id=3";
$query = "SELECT * FROM workers WHERE salary=1000";
$query = "SELECT * FROM workers WHERE age=23";
$query = "SELECT * FROM workers WHERE salary>400";
$query = "SELECT * FROM workers WHERE salary>=500";
$query = "SELECT * FROM workers WHERE salary != 500";
$query = "SELECT * FROM workers WHERE salary<=900";
$query = "SELECT salary, age FROM workers WHERE name='Вася'";
?>