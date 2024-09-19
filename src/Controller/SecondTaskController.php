<?php

namespace App\Controller;

use App\Service\FileService;

class SecondTaskController extends BaseController
{
	public function showSecondTask(): void
	{
		$csvFile = fopen(ROOT . "/data/loadedCsvFile.csv", "r");
		$csvData = [];

		if ($csvFile !== false)
		{
			while (($data = fgetcsv($csvFile)) !== false) {
				$rowData = [];
				foreach ($data as $i) {
					$rowData[] = htmlspecialchars($i);
				}
				$csvData[] = $rowData;
			}
			fclose($csvFile);
		}

		echo self::render('layout.php', ['content' => self::render('SecondTask/secondTask.php', ['csvData' => $csvData, 'isSuccess' => $_GET['isSuccess']])]);
	}

	public function rememberDataFromSecondTask(): void
	{
		if (isset($_FILES['files']))
		{
			$fileName = basename($_FILES['files']['name']);
			$pathToCsvFile = ROOT . '/data/' . 'loadedCsvFile.csv';

			if (FileService::checkExtensionFromLoadedFile($fileName, ['csv']))
			{
				move_uploaded_file($_FILES['files']['tmp_name'], $pathToCsvFile);

				header('Location: /task2?isSuccess=1');
			}
			else
			{
				header('Location: /task2?isSuccess=0');
			}
		}
	}
}