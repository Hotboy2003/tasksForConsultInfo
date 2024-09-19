<?php

namespace App\Controller;

use App\Service\FileService;

class FirstTaskController extends BaseController
{
	public function showFirstTask(): void
	{
		echo self::render('layout.php', ['content' => self::render('FirstTask/firstTask.php', ['isSuccess' => $_GET['isSuccess']])]);
	}

	public function rememberDataFromFirstTask(): void
	{
		if (isset($_POST['name'], $_POST['email'], $_POST['message']) && str_contains($_POST['email'], '@'))
		{
			$pathToFileWithData = ROOT . '/data/dataForFirstTask.txt';
			$this->writePersonalDataToFile($_POST, $pathToFileWithData);

			if (is_uploaded_file($_FILES['files']['tmp_name']))
			{
				$fileName = basename($_FILES['files']['name']);
				$pathToLoadedImage = ROOT . "/data/imageForFirstTask/" . $fileName;

				if (FileService::checkExtensionFromLoadedFile($fileName, ['jpg', 'jpeg', 'png']))
				{
					move_uploaded_file($_FILES['files']['tmp_name'], $pathToLoadedImage);
					$this->writePathToImageToFile($pathToLoadedImage, $pathToFileWithData);

					header('Location: /task1?isSuccess=1');
				}
				else {header('Location: /task1?isSuccess=0');}
			}
			else
			{
				file_put_contents($pathToFileWithData, 'File was not uploaded' . PHP_EOL . PHP_EOL, FILE_APPEND);
				header('Location: /task1?isSuccess=1');
			}
		}
		else {header('Location: /task1?isSuccess=0');}
	}

	private function writePersonalDataToFile(array $data, string $pathToFileWithData): void
	{
		$textForFile = date('Y-m-d H:i:s') . " - " . json_encode($data, JSON_UNESCAPED_UNICODE) . PHP_EOL;
		file_put_contents($pathToFileWithData, $textForFile, FILE_APPEND);
	}

	private function writePathToImageToFile(string $pathToImage, string $pathToFileWithData): void
	{
		$textForFile = "Uploaded File: " . $pathToImage . PHP_EOL . PHP_EOL;
		file_put_contents($pathToFileWithData, $textForFile, FILE_APPEND);
	}
}