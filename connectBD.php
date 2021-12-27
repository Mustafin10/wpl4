<?php 
	define ("HOST", "localhost");
	define ("USER", "root");
	define ("PASS", "");
	define ("DB", "students"); // установление соединения с сервером
	 // подключение к базе данных:
	 $mysqli = mysqli_connect(HOST, USER, PASS, DB) or die ("Невозможно
	подключиться к серверу");
 ?>