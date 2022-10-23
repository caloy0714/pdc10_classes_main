<?php

namespace App;

use PDO;
use Exception;

class Connection
{
	private $dsn;
	private $user;
	private $password;
	private $conn;

	public function __construct($host, $database, $user, $password)
	{
		$this->dsn = 'mysql:host=localhost' . $host . ';dbname=pdc10_classes' . $database;
		$this->user = $user;
		$this->password = $password;
	}

	public function connect()
	{
		try {
			$this->conn = new PDO($this->dsn, $this->user, $this->password);
			return $this->conn;
		} catch (Exception $e) {
			error_log($e->getMessage());
			return false;
		}
	}

	public function disconnect()
	{
		$this->conn = null;
	}

}
