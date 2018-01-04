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
		require('view/backend/addGameSheetView.php');
	}

	function addGame($name, $coopType, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite)
	{
		$gameManager = new InformationSheetManager();

		$newGame = $gameManager->newGame($name, $coopType, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite);
		if ($newGame === false) {
			throw new Exception('Impossible d\'ajouter le nouveau jeu');			
		} else {
			header('Location: index.php');
		}
	}

// Login controler