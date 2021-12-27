<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Мустафин Даниил</title>
</head>
<body>
	<?php
 	include ("connectBD.php");
	 $mysqli->query('SET NAMES UTF-8');
	 $rows=$mysqli->query("SELECT FIO, facult, gruppa, no_zach, phone FROM students WHERE
	id_student=".$_GET['id_student']);
	 while ($st = mysqli_fetch_array($rows)) {
	 $id=$_GET['id_student'];
	 $name = $st['FIO'];
	 $facult = $st['facult'];
	 $gruppa = $st['gruppa'];
	 $no_zach = $st['no_zach'];
	 $phone = $st['phone'];
	 }
	print "<form action='save_editStudent.php' metod='get'>";
	print "ФИО: <input name='FIO' size='50' type='text'
	value='".$name."'>";
	print "<br>Факультет: <input name='facult' size='20' type='text'
	value='".$facult."'>";
	print "<br>Группа: <input name='gruppa' size='20' type='text'
	value='".$gruppa."'>";
	print "<br>Номер зачетки: <input name='no_zach' size='30' type='text'
	value='".$no_zach."'>";
	print "<br>Телефон: <input name='phone' value='".$phone."'>";
	print "<input type='hidden' name='id_student' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку
	студентов </a>";
	?>
</body>
</html>