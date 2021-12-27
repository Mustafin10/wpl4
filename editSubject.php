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
	 $rows=$mysqli->query("SELECT name_subject, FIO_prepod FROM subjects WHERE
	id_subject=".$_GET['id_subject']);
	 while ($st = mysqli_fetch_array($rows)) {
	 $id_subject=$_GET['id_subject'];
	 $name_subject = $st['name_subject'];
	 $FIO_prepod = $st['FIO_prepod'];
	 }
	print "<form action='save_editSubject.php' metod='get'>";
	print "Название предмета: <input name='name_subject' size='50' type='text'
	value='".$name_subject."'>";
	print "<br>ФИО преподавателя: <input name='FIO_prepod' size='20' type='text'
	value='".$FIO_prepod."'>";
	print "<input type='hidden' name='id_subject' value='".$id_subject."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку предметов </a>";
	?>
</body>
</html>