<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
<!--1. Спросите имя пользователя с помощью формы. Результат запишите в
переменную $name. Выведите на экран фразу 'Привет, %Имя%'-->
<p> Введите имя</p>
    <form action="" method="GET">
      <input type="text" name="name">
      <input type="submit">
    </form><br><br>
    

<!--2. Спросите у пользователя имя, возраст, а также попросите его ввести сообщение
(его сделайте в textarea). Выведите эти данные на экран в формате, приведенном под
данной задачей. Позаботьтесь о том, чтобы пользователь не мог вводить теги (просто
удаляйте их) и таким образом сломать сайт-->
<p>Введите имя возраст, а так же любое сообщение в поле для текста</p>
    <form action="" method="GET">
      <input type="text" name="name"><br>
      <input type="text" name="age"><br>
      <textarea name="message"></textarea><br>
      <input type="submit" name="submit1">
    </form><br><br>


<!--3. Спросите возраст пользователя. Если форма была отправлена и введен возраст,
то выведите его на экран, а форму уберите. Если же форма не была отправлена (это будет при первом заходе на страницу) - просто покажите ее-->
<p>Введите ваш возраст</p>
    <form action="" method="GET">
			<input type="text" name="age"><br>
			<input type="submit"><br>
		</form><br><br>


<!--4. Спросите у пользователя логин и пароль (в браузере должен быть
звездочками). Сравните их с логином $login и паролем $pass, хранящихся в файле. Если все верно - выведите 'Доступ разрешен!', в противном случае - 'Доступ запрещен!'. Сделайте так, чтобы скрипт обрезал концевые пробелы в строках, которые ввел пользователь.-->
<p>Введите логин и пароль(user, qwerty)</p>
    <form action="" method="GET"><br>
      <input type="text" name="login"><br>
      <input type="password" name="pass"><br>
      <input type="submit" name="submit4"><br>
    </form><br><br>


<!--5. Спросите имя пользователя с помощью формы. Результат запишите в
переменную $name. Сделайте так, чтобы после отправки формы значения ее полей не
пропадали-->
<p>Введите имя</p>
    <form action="" method="GET">
      <input name = "name5" value = "<?php if (isset($_GET['name'])) echo $_GET['name']; ?>"><br>
      <input type="submit"><br>
    </form>



<!--6. Спросите у пользователя имя, а также попросите его ввести сообщение
(textarea). Сделайте так, чтобы после отправки формы значения его полей не
пропадали-->
<p>Введите имя и любое сообщение в поле для текста</p>
    <form action="" method = "GET">
      <input name = "name6" value = "<?php if (isset($_GET['name'])) echo $_GET['name'] ; ?>"><br>
        <textarea name="message6">
          <?php if (isset($_GET['message6'])) echo $_GET['message6']; ?>
        </textarea>
      <input type="submit">
    </form>
    <?php
    //1
	    if (isset($_REQUEST['name'])) {
		    $name = $_REQUEST['name'];
		    echo 'Привет,'.$name;
	    }



//2
      if (isset($_REQUEST['submit3'])) {
        $age = strip_tags($_REQUEST['age']);
        $name = strip_tags($_REQUEST['name']);
        $message = strip_tags($_REQUEST['message']);
        echo "Привет, $name, $age <br> твое сообщение: $message";
      }



//3
      if (isset($_REQUEST['age'])) {
        $age = strip_tags($_REQUEST['age']);
		    echo 'Ваш возраст: '.$age;
      }



//4
      if(isset($_REQUEST['submit4'])){
        $login = 'user';
        $pass = 'qwerty';
        $formLogin = trim($_REQUEST['login']);
        $formPassword = trim($_REQUEST['pass']);
        if($login == $formLogin && $pass == $formPassword){
			echo 'Доступ разрешен!';
		} else {
			echo 'Доступ запрещен!';
		}
	}



//5
  if (isset($_REQUEST['submit'])) {
		$name5 = $_REQUEST['name'];
		echo $name5;
	}

//6
    ?>


  </body>
</html>