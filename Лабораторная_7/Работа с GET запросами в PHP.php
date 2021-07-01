<?php
echo $_GET['num']."<br>";

?>
<?php 
echo $_GET['num']*$_GET['num']."<br>";
?>
<?php
echo $_GET['num1'] + $_GET['num2']."<br>";
?>
<?php
switch ($_GET['num']) {
case 1:
echo 'привет'."<br>";
break;
case 2:
echo 'пока'."<br>";
break;
default:
echo 'привет'."<br>";
break;
}

?>
<?php
$arr = ['a', 'b', 'c', 'd', 'e'];

if (isset($arr[$_GET['num']])) {
echo $arr[$_GET['num']]."<br>";
}

?>

<?php
if (isset($_GET['num'])) {
echo $_GET['num']."<br>";
}

echo "<a href=\"?num=1\">LINK 1</a>"."<br>";
echo "<a href=\"?num=2\">LINK 2</a>"."<br>";
echo "<a href=\"?num=3\">LINK 3</a>"."<br>";

?>
<?php
if (isset($_GET['num'])) {
echo $_GET['num'];
echo '<br>';
}

for ($i=1; $i <= 10; $i++) {
echo "<a href=\"?num=$i\">LINK $i</a> "."<br>";
}

?>
<?php
if (isset($_GET['num'])) {
echo $_GET['num'];
echo '<br>';
}

for ($i=1; $i <= 10; $i++) {
echo "<p><a href=\"?num=$i\">LINK $i</a></p>"."<br>";
}

?>
<?php 
if (isset($_GET['num'])) {
echo $_GET['num'];
echo '<br>';
}

echo '<ul>';
for ($i=1; $i <= 10; $i++) {
echo "<li><a href=\"?num=$i\">LINK $i</a></li>"."<br>";
}
echo '</ul>';

?>
<?php
$arr = ['a', 'b', 'c', 'd', 'f'];

if (isset($_GET['num']) && isset($arr[$_GET['num']]) ) {
echo $arr[$_GET['num']];
echo '<br>';
}

echo "<a href=\"?num=0\">LINK 0</a> "."<br>";
echo "<a href=\"?num=1\">LINK 1</a> "."<br>";
echo "<a href=\"?num=2\">LINK 2</a> "."<br>";
echo "<a href=\"?num=3\">LINK 3</a> "."<br>";
echo "<a href=\"?num=4\">LINK 4</a>"."<br>";

?>
<?php
$arr = ['a', 'b', 'c', 'd', 'f'];

if (isset($_GET['num']) && isset($arr[$_GET['num']]) ) {
echo $arr[$_GET['num']];
echo '<br>';
}

foreach ($arr as $key => $value) {
echo "<a href=\"?num=$key\">LINK $key</a> "."<br>";
}

?>
