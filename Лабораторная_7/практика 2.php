<?php
$name = 'Иван';

echo 'Привет, '.$name.'!';
echo '<br>';
echo "Привет, $name!";
?>
<?php
$arr = ['name'=>'Иван', 'age'=>30];

echo 'Привет, '.$arr['name'].'! Тебе '.$arr['age'].' лет.';
echo '<br>';
echo "Привет, {$arr['name']}! Тебе {$arr['age']} лет.";
?>
<?php
$text = '!!!';

echo '<p>'.$text.'</p>';
echo "<p>$text</p>";

?>
<?php
$href = 'index.html';
$text = 'ссылка';

echo '<a href="'.$href.'">'.$text.'</a>';
echo '<br>';
echo "<a href=\"$href\">$text</a>";

?>

<?php
$arr = [1, 2, 3, 4, 5];

foreach ($arr as $key => $value) {
echo "<p>$value</p>";
}

?>

<?php
$arr = [1, 2, 3, 4, 5];

echo '<ul>';
foreach ($arr as $key => $value) {
echo "<li>$value</li>";
}
echo '</ul>';

?>
<?php
$arr = [
['href'=>'1.html', 'text'=>'ссылка 1'],
['href'=>'2.html', 'text'=>'ссылка 2'],
['href'=>'3.html', 'text'=>'ссылка 3'],
];
?>

<?php
$arr = [
['href'=>'1.html', 'text'=>'ссылка 1'],
['href'=>'2.html', 'text'=>'ссылка 2'],
['href'=>'3.html', 'text'=>'ссылка 3'],
];

foreach ($arr as $key => $value) {
$href = $value['href'];
$text = $value['text'];
echo "<a href=\"$href\">$text</a>";
}

?>
<?php
$arr = [
['href'=>'1.html', 'text'=>'ссылка 1'],
['href'=>'2.html', 'text'=>'ссылка 2'],
['href'=>'3.html', 'text'=>'ссылка 3'],
];
?>

<ul>
<?php foreach ($arr as $key => $value): ?>
<li><?php echo "<a href=$value[href]>$value[text]</a>"; ?></li>
<?php endforeach; ?>
</ul>
<?php
$arr = [
['name'=>'Коля', 'age'=>30, 'salary'=>500],
['name'=>'Вася', 'age'=>31, 'salary'=>600],
['name'=>'Петя', 'age'=>32, 'salary'=>700],
];
echo "<table><tr>";

foreach ($arr as $key => $value) {
$name = $value['name'];
$age = $value['age'];
$salary = $value['salary'];
echo "<tr>";
echo "<td>$name</td>";
echo "<td>$age</td>";
echo "<td>$salary</td>";
echo "</tr>";
}

echo "</tr></table>";

?>
