<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мустафин Даниил</title>
</head>
<body>
	<H2>новый предмет:</H2>
	<form action="save_newSubject.php" metod="get">
	 Название предмета: <input name="name_subject" size="50" type="text">
	<br>ФИО преподавателя: <input name="FIO_prepod" size="20" type="text">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку предметов </a>
</body>
</html>