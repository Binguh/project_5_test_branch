<?php
	
	namespace Project5\Model;

	use \Project5\Model\DBManager;

	class InformationSheetManager extends DBManager {

		public function getLastGamesList()
		{
			$db = $this->dbConnect();
			$gamesList = $db->query('SELECT id, gameName, gameCoopType, gameMicroLoot, gameMinPlayerNumber, gameMaxPlayerNumber, DATE_FORMAT(gameReleaseDate, \'%d/%m/%Y\') AS gameReleaseDateFr, gamePrice, gameOfficialWebsite FROM informationsheet ORDER BY sheetCreationDate DESC LIMIT 0, 6');

			return $gamesList;
		}

		public function newGame($name, $coopType, $microLoot, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite)
		{
			$db = $this->dbConnect();
			$game = $db->prepare('INSERT INTO informationsheet(gameName, gameCoopType, gameMicroLoot, gameMinPlayerNumber, gameMaxPlayerNumber, gameReleaseDate, gamePrice, gameOfficialWebsite, sheetCreationDate) VALUES(?, ?, ?, ?, ?, ?, ?, ?, NOW())');
			$newGame = $game->execute(array($name, $coopType, $microLoot, $minPlayerNumber, $maxPlayerNumber, $releaseDate, $price, $officialWebsite));

			return $newGame;
		}
	}