<?php

	class Database{
		public static function startUP()
		{
			$pdo = new PDO('mysql:host=localhost;dbname=adsi_mvc;charset=utf8', 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo; 
		} 
	}