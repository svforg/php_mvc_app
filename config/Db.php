<?php

class DB {
	const HOST 		= 'localhost';
	const USER 		= 'root';
	const PASS 		= '';
	const DB 		= 'dashboard';
	const CHARSET 	= 'utf8';
	
	public static function connectToDB() {

		$host 		= self::HOST;
		$user 		= self::USER;
		$pass 		= self::PASS;
	    $db 		= self::DB;
	    $charset 	= self::CHARSET;

	    $dsn = "mysql:host=$host;dbname=$db;charset=$charset"; 

	    $connection = new PDO($dsn, $user, $pass);

	    return $connection;
	}
}