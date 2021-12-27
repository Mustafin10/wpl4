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
	 $sql_add = "INSERT INTO students SET FIO='" . $_GET['FIO']
	."', facult='".$_GET['facult']."', gruppa='"
	.$_GET['gruppa']."', no_zach='".$_GET['no_zach'].
	"', phone='".$_GET['phone']. "'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Новый студент зарегестрирован в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку
	студентов </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\">
	Вернуться к списку студентов </a>"; }
	?>
</body>
</html>