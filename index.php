<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=	, initial-scale=1.0">
	<title>Мустафин Даниил</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
</head>
<body>
	<?php
	//f0592623_proc admin f0592623_proc
	include ("connectBD.php");
	?>
	<h2>Зарегистрированные студенты:</h2>
	<table border="1" >
	
	 <tr id="table1"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_student, FIO, facult, gruppa, no_zach, phone", from: "students", zagl: "<tr> <th> id </th><th> ФИО </th> <th> Факультет </th><th> группа </th><th> № зачетки </th> <th> телефон </th> <th> Редактировать </th> <th> Уничтожить </th> </tr>",file:"Student"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table1").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php 
	print "</table>";
	 ?>
	<p> <a href="newStudent.php"> Добавить студента </a>
		<br>
	<h2>Предметы</h2>
	<table border="1">
	<tr id="table2"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_subject, name_subject, FIO_prepod", from: "subjects", zagl: "<tr> <th> id </th> <th> Название предмета </th> <th> ФИО преподавателя </th> <th> Редактировать </th> <th> Удалить </th> </tr>",file:"Subject"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table2").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
	<p> <a href="newSubject.php"> Добавить предметы </a>
		<br>
	<h2>Ведомость</h2>

	<table border="1">
	
	 <tr id="table3"></tr>
	 <script>
	 	$(document).ready(function(){

		   $(window).on('load', function() {
		   		$.ajax({
		   			url: "add.php",
		   			type: "POST",
		   			data: ({select: "id_vedomost, date_sdachi, id_student, id_subject, ocenka", from: "vedomost", zagl: "<tr> <th> id </th><th> Дата сдачи </th> <th> ID студента </th> <th> ID предмета </th> <th> оценка </th> <th> Редактировать </th> <th> Удалить </th></tr>",file:"vedomost"}) ,
		   			dataType: "html",
		   			success: function(data){
		   				$("#table3").parent().html(data);
		   			},
		   		})
		   });

		});

	 </script>
	<?php
	print "</table>";
	?>
	<p> <a href="newVedomost.php"> Добавить Ведомость </a>
		<br>
	<a href="gen_pdf.php">Сгенерировать пдф файл</a> <br>
	<a href="gen_xls.php">Сгенерировать xls файл</a>
</body>
</html>