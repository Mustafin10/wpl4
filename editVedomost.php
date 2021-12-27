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
	 $rows=$mysqli->query("SELECT data_sdachi, id_student, id_subject, ocenka FROM vedomost WHERE
	id_vedomost=".$_GET['id_vedomost']);
	 $student=$mysqli->query("SELECT id_student, FIO FROM students");
	 $subject=$mysqli->query("SELECT id_subject, name_subject FROM subjects");
	 while ($st = mysqli_fetch_array($rows)) {
	 $id=$_GET['id_vedomost'];
	 $data_sdachi = $st['data_sdachi'];
	 $id_student = $st['id_student'];
	 $id_subject = $st['id_subject'];
	 $ocenka = $st['ocenka'];
	 }
	print "<form action='save_editVedomost.php' metod='get'>";
	print "Дата сдачи: <input name='data_sdachi' size='50' type='text'
	value='".$data_sdachi."'>";
	echo "<br> Студент :<select name='id_student'>";
		while ($row = mysqli_fetch_array($student)) {
			if ($id_student == $row['id_student']) {
				echo "<option value='" . $row['id_student'] ."' selected='selected'>" . $row['FIO'] ."</option>";
			} else {echo "<option value='" . $row['id_student'] ."'>" . $row['FIO'] ."</option>";}
		}
		echo "</select>";

	echo "<br>Предмет : <select name='id_subject'>";
		while ($row = mysqli_fetch_array($subject)) {
			if ($id_subject == $row['id_subject']) {
				echo "<option value='" . $row['id_subject'] ."' selected='selected'>" . $row['name_subject'] ."</option>";
			} else {echo "<option value='" . $row['id_subject'] ."'>" . $row['name_subject'] ."</option>";}
		}
		echo "</select>";
	print "<br>Оценка: <input name='ocenka' rows='4'
	cols='40' value='".$ocenka."'>";
	print "<input type='hidden' name='id_vedomost' value='".$id."'> <br>";
	print "<input type='submit' name='' value='Сохранить'>";
	print "</form>";
	print "<p><a href=\"index.php\"> Вернуться к списку ведомостей </a>";
	?>
</body>
</html>