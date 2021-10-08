<?php

class Model
{
	protected $db;

	public function __construct()
	{
		$this->db = new mysqli(DB['host'], DB['username'], DB['password'], DB['database']);

		if ($this->db->connect_errno) {
			echo "Failed to connect database : " . $this->db->connect_error;
			die;
		}
	}


	public function query($sql)
	{
		$result = $this->db->query($sql);

		$rows = [];

		while ($row = $result->fetch_assoc()) {
			$rows[] = $row;
		}

		return $rows;
	}
}
