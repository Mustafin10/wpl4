<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мустафин Даниил</title>
</head>
<body>
	<H2>Новый студент:</H2>
	<form action="save_newStudent.php" metod="get">
	 ФИО: <input name="FIO" size="50" type="text">
	<br>Факультет: <input name="facult" size="20" type="text">
	<br>Группа: <input name="gruppa" size="20" type="text">
	<br>no_zach: <input name="no_zach" size="30" type="text">
	<br>phone: <input type="text" name="phone">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку Студентов </a>
</body>
</html>