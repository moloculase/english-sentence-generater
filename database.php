<?php
/* mandarin bot
made by: ahmed adhiyyu mohamed hassan
email: adhiyyuahmed@gmail.com
*/	
	$database_name = 'mandrain_bot';
	$username = 'root';
	$password = '';
	$host = 'localhost';
	$dsn = "mysql:host=$host;dbname=$database_name;charset=UTF8";
	$pdo = new PDO($dsn, $username, $password);
	