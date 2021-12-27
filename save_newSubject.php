<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мустафин Даниил</title>
</head>
<body>
	<?php
	 // Подключение к базе данных:
	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8'); // Тип кодировки
	 // Строка запроса на добавление записи в таблицу:
	 $sql_add = "INSERT INTO subjects SET name_subject='" . $_GET['name_subject']
	."', FIO_prepod='" . $_GET['FIO_prepod'] . "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Предмето зарегестрирован в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку предметов </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться к списку предметов </a>"; }
	?>
</body>
</html>