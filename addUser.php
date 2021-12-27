<?php
session_start();
include("connectBD.php");
	if ($_SESSION['type'] == 2) {
		echo "<table border='1'>
			<tr> // Пользователи сайта. Только для администратора
			 <th> id </th><th> Логин </th> <th> пароль </th> <th> Уровень доступа </th> <th> Редактировать </th> <th> Удалить </th> ";
		$result=$mysqli->query("SELECT id_user, username, password, type
		FROM users"); // запрос на выборку сведений о пользователях
		while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
		 echo "<tr>";
		 echo "<td >" . $row['id_user'] . "</td>";
		 echo "<td >" . $row['username'] . "</td>";
		 echo "<td >" . $row['password'] . "</td>";
		 echo "<td >" . $row['type'] . "</td>";
		 echo "<td><a href='editUser.php?id_user=" . $row['id_user']
		. "' '>Редактировать</a></td>";
		echo "<td><a href='deleteUser.php?id_user=" . $row['id_user']
		. "'>Удалить</a></td>";
		 echo "</tr>";
		}
		print "</table>";
		print "<a href='newUser.php'> Добавить пользователя </a>";
	} else {
		echo "<table border='1'>
			<tr> // Ваши данные
			<th> Логин </th> <th> пароль </th> <th> Уровень доступа </th> <th> Редактировать </th>";
		$result=$mysqli->query("SELECT username, password, type
		FROM users WHERE id_user = ". $_SESSION["id_user"]);
		while ($row=mysqli_fetch_array($result)){// для каждой строки из запроса
		 echo "<tr>";
		 echo "<td >" . $row['username'] . "</td>";
		 echo "<td >" . $row['password'] . "</td>";
		 echo "<td >" . $row['type'] . "</td>";
		 echo "<td><a href='editUser.php?id_user=" . $_SESSION['id_user']
		. "' '>Редактировать</a></td>";
		 echo "</tr>";
		}
		print "</table>";
	}
	?>
	