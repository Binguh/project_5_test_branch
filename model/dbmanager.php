<?php
	namespace Project5\Model;

	class DBManager {
		protected function dbConnect() {
			$db = new \PDO('mysql:host=localhost;dbname=mywebsite;charset=utf8', 'root', '');
			return $db;
		}
	}