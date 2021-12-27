<?

header('Content-Type: application/vnd.ms-excel; format=attachment;');
header('Content-Disposition: attachment; filename= Лаба4.xls');
header('Expires: Mon, 18 Jul 1998 01:00:00 GMT');
header('Cache-Control: no-store, no-cache, must-revalidate');
header('Cache-Control: post-check=0, pre-check=0', FALSE);
header('Pragma: no-cache');

include ("connectBD.php");

?>

<meta http-equiv="content-type" content="text/html; charset=utf-8">

<table>

<tr>

<th>№ п/п</th>
<th>ФИО студента</th>
<th>Факультет</th> 
<th>Группа</th> 
<th>Номер зачетки</th> 
<th>Дата сдачи зачета</th>
<th>Название предмета</th>
<th>Оценка</th>
<th>ФИО преподавателя</th>
</tr>
<?php 
$vedomost=$mysqli->query("SELECT id_vedomost, ocenka, date_sdachi, id_student, id_subject FROM vedomost"); 


$count= 0;
$rows="";
while ($row=mysqli_fetch_array($vedomost)) {
	$subjects = $mysqli->query("SELECT name_subject, FIO_prepod FROM subjects WHERE id_subject =". $row['id_subject']);
	$subject = mysqli_fetch_array($subjects);
	$students = $mysqli->query("SELECT FIO, facult, gruppa, no_zach FROM students WHERE id_student =". $row['id_student']);
	$student = mysqli_fetch_array($students);

	$count++;
	echo "<tr>";
	echo "<td>". $count ."</td>";
	echo "<td>". $student['FIO'] ."</td>";
	echo "<td>". $student['facult'] ."</td>";
	echo "<td>". $student['gruppa'] ."</td>";
	echo "<td>". $student['no_zach'] ."</td>";
	echo "<td>". $row['date_sdachi'] ."</td>";
	echo "<td>". $subject['name_subject'] ."</td>";
	echo "<td>". $row['ocenka'] ."</td>";
	echo "<td>". $subject['FIO_prepod'] ."</td>";
	echo "</tr>";
};
 ?>

	

</table>