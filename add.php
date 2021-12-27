<?php
session_start();
include("connectBD.php");
echo "Новая строка";
echo $_POST['zagl'];
	$result=$mysqli->query("SELECT ". $_POST['select'] . "
	FROM ". $_POST['from'] . ""); // запрос на выборку сведений о пользователях
	while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
	 echo "<tr>";
	 $mass = explode(",", $_POST['select']);
	 for ($i=0; $i < count($mass) ; $i++) { 
	 	echo "<td >" . $row[$i] . "</td> ";
	 }
	 echo "<td><a href='edit". $_POST['file'].".php?".$mass[0] ."=" . $row[0]
	. "' '>Редактировать</a></td>"; // запуск скрипта для редактирования
		echo "<td><a href='delete". $_POST['file'].".php?".$mass[0] ."=" . $row[0]
	. "'>Удалить</a></td>";
	 echo "</tr>";
	}
	
	?>