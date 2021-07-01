<?php
$query = "SELECT * FROM workers WHERE age>25 AND age<=28";
$query = "SELECT * FROM workers WHERE name='Петя'";
$query = "SELECT * FROM workers WHERE name='Петя' OR name='Вася'";
$query = "SELECT * FROM workers WHERE name!='Петя'";
$query = "SELECT * FROM workers WHERE age=27 OR salary=1000";
$query = "SELECT * FROM workers WHERE (age>=23 AND age<27) OR salary=1000";
$query = "SELECT * FROM workers WHERE (age>=23 AND age<=27) OR (salary>=400 AND salary<=1000)";
$query = "SELECT * FROM workers WHERE age=27 OR salary!=400";
?>