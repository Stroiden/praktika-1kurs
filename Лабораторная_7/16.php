<?php
if (isset($_REQUEST['name'])) {
    $name = $_REQUEST['name'];
    if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 1) {
        echo 'Hello, ' . $name;
    }
    if (isset($_REQUEST['hello']) and $_REQUEST['hello'] == 0) {
        echo 'Goodbye, ' . $name;
    }
}
if (isset($_REQUEST['lang'])) {
    echo implode(', ', $_REQUEST['lang']);
} else {
    echo 'False';
}



if (isset($_REQUEST['php']) and $_REQUEST['php'] == 'yes') {
    echo 'yes';
}
if (isset($_REQUEST['php']) and $_REQUEST['php'] == 'no') {
    echo 'no';
}


if (isset($_REQUEST['age'])) {
    echo $_REQUEST['age'];
}

if (isset($_REQUEST['age'])) {
    switch ($_REQUEST['age']) {
        case 1:
            echo '< 20';
            break;
        case 2:
            echo '20-25';
            break;
        case 3:
            echo '26-30';
            break;
        case 4:
            echo '> 30';
            break;
    }
}

if (isset($_REQUEST['lang'])) {
    echo implode(', ', $_REQUEST['lang']);
}

function input($type, $name, $value)
{
    if (isset($_REQUEST['name'])) {
        $value = $_REQUEST['name'];
    }
    return '<input type="'.$type.'" name="'.$name.'" value="'.$value.'">';
}
echo input('text', 'name', '3')."<br>";

function checkbox($name)
{
    if (isset($_REQUEST[$name]) and $_REQUEST[$name] == 1) {
        $value = 'checked';
    } else {
        $value = '';
    }
    return '<input type="hidden" name="'.$name.'" value="0"><input type="checkbox" name="'.$name.'" value="1" '.$value.'>';
}
echo checkbox('check')."<br>";



?>



<form action="" method="get">
    <input type="hidden" name="hello" value="0">
    <input type="checkbox" name="hello" value="1">
    <input type="text" name="name" placeholder="">
    <input type="submit">
</form>



<form action="" method="get">
    <input type="checkbox" name="lang[]" value="html" title="html">
    <input type="checkbox" name="lang[]" value="css" title="css">
    <input type="checkbox" name="lang[]" value="php" title="php">
    <input type="checkbox" name="lang[]" value="js" title="js">
    <input type="submit" name="go">
</form>


<form action="" method="get">
    <input type="radio" name="php" value="yes" title="yes">
    <input type="radio" name="php" value="no" title="no" checked>
    <input type="submit" name="submit">
</form>


<form action="" method="get">
    <input type="radio" name="age" value="< 20" title="< 20">
    <input type="radio" name="age" value="20-25" title="20-25" checked>
    <input type="radio" name="age" value="26-30" title="26-30">
    <input type="radio" name="age" value="> 30" title="> 30">
    <input type="submit" name="submit">
</form>


<form action="" method="get">
    <select name="age" id="">
        <option value="1">< 20</option>
        <option value="2">20-25</option>
        <option value="3">26-30</option>
        <option value="4">> 30</option>
    </select>
    <input type="submit">
</form>


<form action="" method="get">
    <select name="lang[]" multiple id="">
        <option value="html">html</option>
        <option value="css">css</option>
        <option value="php">php</option>
        <option value="js">js</option>
    </select>
    <input type="submit">
</form>
