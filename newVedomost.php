<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мустафин Даниил</title>
</head>
<body>
	<H2>Добавление ведомости:</H2>
	<form action="save_newVedomost.php" metod="get">
	 Дата сдачи: <input name="data_sdachi" size="50" type="date">
	<br>
	Студент:
	<?php 
 	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $rows=$mysqli->query("SELECT id_student, FIO FROM students");
	echo "<select name='id_student'>";
		while ($row = mysqli_fetch_array($rows)) {
			echo "<option value='" . $row['id_student'] ."'>" . $row['FIO'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>Предмет: 
	<?php 
	 $rows=$mysqli->query("SELECT id_subject, name_subject FROM subjects");
	echo "<select name='id_subject'>";
		while ($row = mysqli_fetch_array($rows)) {
		    echo "<option value='" . $row['id_subject'] ."'>" . $row['name_subject'] ."</option>";
		}
		echo "</select>";
		 ?>
	<br>Оценка : <input name="ocenka" rows="4" cols="40">
	<p><input name="add" type="submit" value="Добавить">
	<input name="b2" type="reset" value="Очистить"></p>
	</form>
	<p>
	<a href="index.php"> Вернуться к списку ведомостей </a>
</body>
</html>