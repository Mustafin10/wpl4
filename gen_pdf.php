<?php 
	require_once('tcpdf_min/tcpdf.php');
	ob_clean();

	include ("connectBD.php");

	$pdf = new TCPDF('P', 'mm', 'A4', true, 'UTF-8', false);
// Устанавливаем информацию о документе
$pdf->SetAuthor('Имя автора');
$pdf->SetTitle('Название документа');
// Устанавливаем данные заголовка по умолчанию
$pdf->SetHeaderData(PDF_HEADER_LOGO, PDF_HEADER_LOGO_WIDTH, PDF_HEADER_TITLE, PDF_HEADER_STRING);
// Устанавливаем верхний и нижний колонтитулы
$pdf->setHeaderFont(Array(PDF_FONT_NAME_MAIN, '', PDF_FONT_SIZE_MAIN));
$pdf->setFooterFont(Array(PDF_FONT_NAME_DATA, '', PDF_FONT_SIZE_DATA));
// Устанавливаем моноширинный шрифт по умолчанию
$pdf->SetDefaultMonospacedFont(PDF_FONT_MONOSPACED);
// Устанавливаем отступы
$pdf->SetMargins(PDF_MARGIN_LEFT, PDF_MARGIN_TOP, PDF_MARGIN_RIGHT);
$pdf->SetHeaderMargin(PDF_MARGIN_HEADER);
$pdf->SetFooterMargin(PDF_MARGIN_FOOTER);
// Устанавливаем автоматические разрывы страниц
$pdf->SetAutoPageBreak(TRUE, PDF_MARGIN_BOTTOM);
//указываем путь к файлу
$font = 'Roboto-Medium.ttf';
// преобразуем шрифт
$fontname = TCPDF_FONTS::addTTFfont($font, 'TrueTypeUnicode', '', 96);
$pdf->SetFont($fontname, '', 14, '', true);
// Добавляем страницу
$pdf->AddPage();

$vedomost=$mysqli->query("SELECT id_vedomost, ocenka, date_sdachi, id_student, id_subject FROM vedomost"); 


$count= 0;
$rows="";
while ($row=mysqli_fetch_array($vedomost)) {
	$subjects = $mysqli->query("SELECT name_subject, FIO_prepod FROM subjects WHERE id_subject =". $row['id_subject']);
	$subject = mysqli_fetch_array($subjects);
	$students = $mysqli->query("SELECT FIO, facult, gruppa, no_zach FROM students WHERE id_student =". $row['id_student']);
	$student = mysqli_fetch_array($students);

	$count++;
	$rows = $rows. "<tr>";
	$rows = $rows. "<td>". $count ."</td>";
	$rows = $rows. "<td>". $student['FIO'] ."</td>";
	$rows = $rows. "<td>". $student['facult'] ."</td>";
	$rows = $rows. "<td>". $student['gruppa'] ."</td>";
	$rows = $rows. "<td>". $student['no_zach'] ."</td>";
	$rows = $rows. "<td>". $row['date_sdachi'] ."</td>";
	$rows = $rows. "<td>". $subject['name_subject'] ."</td>";
	$rows = $rows. "<td>". $row['ocenka'] ."</td>";
	$rows = $rows. "<td>". $subject['FIO_prepod'] ."</td>";
	$rows = $rows. "</tr>";
};

// Устанавливаем текст
$html = "
<h2> Зачетная ведомость </h2>
	<table>
		<tr>
			<td>№ п/п</td> <td>ФИО студента</td> <td>факультет</td> <td>группа</td> <td>номер зачетки</td> <td>дата сдачи зачета</td> <td>название предмета</td> <td>оценка</td> <td>ФИО Преподавателя</td>
		</tr>
	
". $rows ."</table>";
// Выводим текст с помощью writeHTMLCell()
$pdf->writeHTMLCell(0, 0, '', '', $html, 0, 1, 0, true, '', true);
// Закрываем и выводим PDF документ
$pdf->Output('document.pdf', 'I');
?>

	
 ?>