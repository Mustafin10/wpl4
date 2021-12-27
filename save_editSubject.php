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
	 $zapros="UPDATE subjects SET name_subject='".$_GET['name_subject'].
	"', FIO_prepod='".$_GET['FIO_prepod']."' WHERE id_subject="
	.$_GET['id_subject'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку предметов </a>'; }
	 else { echo 'Ошибка сохранения. <a href="index.php"> Вернуться к списку предметов</a> '; }
	?>

</body>
</html>