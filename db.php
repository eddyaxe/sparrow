<?php

class Cindy
{
	
	public function __construct($db = null, $cache = null)
	{
		if ($db !== null) {
			$this->setDb($db);
		}
		if ($cache !== null) {
			$this->setCache($cache);
		}
	}
	
	public function setDb($db)
	{
		if (is_string($db)) {
			$cfg = $this->parseConnection($db);
			
			switch($cfg->type) {
			
			}
			
			$this->db_type = $cfg->type;
		} else {
			$type = $this->getDbType($db);
			
			if ($type == null)
				throw new Exception('Database is not supported.');
			
			$this->db = $db;
			$this->db_type = $type;
		}
	}
	
	public function parseConnection($connection)
	{
		$url = parse_url($connection);
		
	}

	


}