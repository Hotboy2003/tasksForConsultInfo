<?php

namespace App\Service;

class FileService
{
	public static function checkExtensionFromLoadedFile(string $pathToLoadedFile, array $allowedExtensions): bool
	{
		$fileExtension = pathinfo($pathToLoadedFile, PATHINFO_EXTENSION);

		if (in_array(strtolower($fileExtension), $allowedExtensions, true))
		{
			return true;
		}

		return false;
	}
}