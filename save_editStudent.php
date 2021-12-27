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
	 $zapros="UPDATE students SET FIO='".$_GET['FIO'].
	"', facult='".$_GET['facult']."', gruppa='"
	.$_GET['gruppa']."', no_zach='".$_GET['no_zach'].
	"', phone='".$_GET['phone']."' WHERE id_student="
	.$_GET['id_student'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
	студентов </a>'; }
	 else { echo 'Ошибка сохранения. <a href="index.php">
	Вернуться к списку студетов</a> '; }
	?>

</body>
</html>