<?php
	
	namespace Project5\Model;

	use \Project5\Model\DBManager;

	class InformationSheetManager extends DBManager {

		public function getLastGamesList()
		{
			$db = $this->dbConnect();
			$gamesList = $db->query('SELECT id, gameName, gameCoopType, gameMinPlayerNumber, gameMaxPlayerNumber, pathToGameSheetImage FROM informationsheet ORDER BY sheetCreationDate DESC LIMIT 0, 4');

			return $gamesList;
		}

		public function newGame($name, $coopType, $microLoot, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite, $path)
		{
			$db = $this->dbConnect();
			$game = $db->prepare('INSERT INTO informationsheet(gameName, gameCoopType, gameMicroLoot, gameMinPlayerNumber, gameMaxPlayerNumber, gameReleaseDate, gamePrice, gameOfficialWebsite, sheetCreationDate, pathToGameSheetImage) VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW(), ?)');
			$newGame = $game->execute(array($name, $coopType, $microLoot, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite, $path));

			return $newGame;
		}
	}