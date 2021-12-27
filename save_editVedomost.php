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
	 $zapros="UPDATE vedomost SET data_sdachi='".$_GET['data_sdachi'].
	"', id_student='" .$_GET['id_student']."', id_subject='".$_GET['id_subject'].
	"', ocenka='".$_GET['ocenka']."', WHERE id_vedomost=" .$_GET['id_vedomost'];
	 $mysqli->query($zapros);
	 if (mysqli_affected_rows($mysqli)>0) {
	 echo 'Все сохранено. <a href="index.php"> Вернуться к списку
	ведомостей </a>'; }
	 else { echo 'Ошибка сохранения. <a href="idnex.php">
	Вернуться к списку ведомостей</a> '; }
	?>

</body>
</html>