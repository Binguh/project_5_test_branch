<?php

	use Project5\Model\InformationSheetManager;

// Games sheet controler

	function lastGamesList()
	{
		$gameManager = new InformationSheetManager();

		$lastGamesList = $gameManager->getLastGamesList();

		require('view/backend/adminHomePageView.php');
	}

	function goToAddGame()
	{
		$errorMessage = '';
		require('view/backend/addGameSheetView.php');
	}

	function uploadGameSheetImage($fileToUploadName, $fileToUploadTmpName, $fileToUploadSize)
	{
		$targetDir = 'public/images/games/';
		$targetFile = $targetDir . basename($fileToUploadName);
		$uploadOk = 1;
		$errorMessage = '';
		$imageFileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));
		if (file_exists($targetFile)) {
			$uploadOk = 0;
			$errorMessage = 'Désolé, ce fichier existe Déjà';
		}
		if ($fileToUploadSize > 1048576) {
			$uploadOk = 0;
			$errorMessage = 'Désolé, ce fichier est trop gros';
		}
		if ($imageFileType != 'jpg' && $imageFileType != 'png' && $imageFileType != 'jpeg' && $imageFileType != 'gif') {
			$uploadOk = 0;
			$errorMessage = 'Désolé, seulement les fortmats jpg, jpeg, png et gif sont autorisés';
		}
		if ($uploadOk === 0) {
			header('index.php?action=goToAddGame');
		} else {
			if (move_uploaded_file($fileToUploadTmpName, $targetFile)) {
				$errorMessage = 'Fichier télecharger avec succés';
			} else {
				$errorMessage = 'Désolé, une erreur est survenue';
			}
		}

		require('view/backend/addGameSheetView.php');
	}

	function addGame($name, $coopType, $microLoot, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite)
	{
		$gameManager = new InformationSheetManager();

		$newGame = $gameManager->newGame($name, $coopType, $microLoot, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite);
		if ($newGame === false) {
			throw new Exception('Impossible d\'ajouter le nouveau jeu');			
		} else {
			header('Location: index.php');
		}
	}

// Login controler