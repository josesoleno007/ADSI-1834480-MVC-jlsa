<?php

	class Database{
		public static function startUP()
		{
			$pdo = new PDO('mysql:host=localhost;dbname=adsi_mvc;charset=utf8', 'root', '');
			$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $pdo; 
		} 

		public static function encryptor($action, $string)
		{
			$output = false;
			$encrypt_method = "AES-256-CBC";
			$secret_key = 'JoseSoleno';
			$secret_iv = '56546548246';

			$key = hash('sha256', $secret_key);
			$iv = substr(hash('sha256', $secret_iv), 0, 16);

			if ($action == 'encrypt') {
				$output = openssl_encrypt($string, $encrypt_method, $key, 0, $iv);
				$output = base64_encode($output);
			}
				else if($action == 'decrypt'){
				$output = openssl_decrypt(base64_decode($string), $encrypt_method, $key, 0, $iv);
			}

				return $output;  
		}	

	}