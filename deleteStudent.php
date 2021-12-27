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
	 $zapros="DELETE FROM students WHERE id_student=" . $_GET['id_student'];
	 $mysqli->query($zapros);
	 header("Location: Index.php");
	 exit;
	?>

</body>
</html>