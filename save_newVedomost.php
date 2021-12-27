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
	 $sql_add = "INSERT INTO vedomost SET date_sdachi='".$_GET['data_sdachi'].
	"', id_student='" .$_GET['id_student']."', id_subject='".$_GET['id_subject'].
	"', ocenka='".$_GET['ocenka']."'";
	 $mysqli->query($sql_add); // Выполнение запроса
	 if (mysqli_affected_rows($mysqli)>0) // если нет ошибок при выполнении запроса
	 { print "<p>Ведомость зарегестрирована в базе данных.";
	 print "<p><a href=\"index.php\"> Вернуться к списку ведомостей </a>"; }
	 else { print "Ошибка сохранения. <a href=\"index.php\"> Вернуться к списку ведомостей </a>"; }
	?>
</body>
</html>