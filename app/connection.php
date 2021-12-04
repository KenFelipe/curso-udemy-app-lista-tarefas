<?php

class Connection {
	public static $dsn = 'mysql:host=localhost;dbname=udemy_app_lista_tarefas;charset=utf8';
	private static $username = 'root';
	private static $password = '';

	public static function connect() {
		try {
			$conn = new \PDO(self::$dsn, self::$username, self::$password);

			return $conn;

		} catch (PDOException $e) {
			echo "Connection Error: {$e->getCode()}: {$e->getMessage()}";
			exit();
		}
	}
}

?>