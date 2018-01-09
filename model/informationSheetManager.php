<?php
	
	namespace Project5\Model;

	use \Project5\Model\DBManager;

	class InformationSheetManager extends DBManager {

		public function getLastGamesList()
		{
			$db = $this->dbConnect();
			$gamesList = $db->query('SELECT id, gameName, gameCoopType, gameMinPlayerNumber, gameMaxPlayerNumber FROM informationsheet ORDER BY sheetCreationDate DESC LIMIT 0, 4');

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