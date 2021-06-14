<?php
    //error_reporting('0');
    include_once("source/models/statistic.php");
        $sta = new Exemp();
        $result = $sta->export();
	//include_once('config/config.php');
	include_once('Classes/PHPExcel.php');

	if(isset($_POST['btnExport'])){
		$objExcel = new PHPExcel;
		$objExcel->setActiveSheetIndex(0);
		$sheet = $objExcel ->getActiveSheet()->setTitle('Thong ke');
		$rowCount = 1;
		$sheet->setCellValue('A'.$rowCount, 'STT');
		$sheet->setCellValue('B'.$rowCount, 'Tên giảng viên');
		$sheet->setCellValue('C'.$rowCount, 'Khoa');
		$sheet->setCellValue('D'.$rowCount, 'Thời gian NCKH');
		$sheet->setCellValue('E'.$rowCount, 'Xếp loại');
        
        foreach ($result as $key =>  $row)
		{
            $rowCount++;
            
            $sheet->setCellValue('A'.$rowCount, $key+1);			
			$sheet->setCellValue('B'.$rowCount, $row['Name']);
			$sheet->setCellValue('C'.$rowCount, $row['DepartName']);
			$sheet->setCellValue('D'.$rowCount, $row['Time']);
			$sheet->setCellValue('E'.$rowCount, $row['Rating']);
        }    
		$objWriter = new PHPExcel_Writer_Excel2007($objExcel);
		$filename = 'export.xlsx';
		$objWriter->save($filename);
		
		header('Content-Disposition: attachment; filename="' . $filename . '"');
		header('Content-Type: application/vnd.openxmlformatsofficedocument.spreadsheetml.sheet');
		header('Content-Length:'. filesize($filename));
		header('Content-Transfer-Encoding: binary');
		header('Cache-Control: must-revalidate');
		header('Pragma:no-cache');
		readfile($filename);
		return;		
	}
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
	<form method="POST">
        <p>Xuất file excel</p>
		<button type="submit" name="btnExport">Export file</button>
	</form>

</body>
</html>