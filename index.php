<?php
	require('model/dbmanager.php');
	require('model/informationSheetManager.php');
	require('controler/backend.php');

	try {
		if (isset($_GET['action'])) {
	// Add a game
			if ($_GET['action'] === 'goToAddGame') {
				goToAddGame();
			} elseif ($_GET['action'] === 'addGameSheet') {
				if (!empty($_POST['name']) && !empty($_POST['coopType']) && !empty($_POST['microLoot']) && !empty($_POST['minPlayerNumber']) && !empty($_POST['maxPlayerNumber']) && !empty($_POST['releaseDate']) && !empty($_POST['price']) && !empty($_POST['officialWebsite'])) {
					addGame($_POST['name'], $_POST['coopType'], $_POST['microLoot'], $_POST['minPlayerNumber'], $_POST['maxPlayerNumber'], $_POST['releaseDate'], $_POST['price'], $_POST['officialWebsite']);
				} else {
					throw new Exception('Tous les champs pour ajouter une fiche ne sont pas remplis');		
				}
			}
		} else {
			lastGamesList();
		}
	} catch (Exception $e) {
		$errorMessage = $e->getMessage();
		require('view/frontend/errorView.php');
	}