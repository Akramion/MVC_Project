<?php 
namespace application\lib;
use PDO;
/**
 * 
 */
class Db
{
	protected $db;
	
	public function __construct()
	{
		$config = require 'application/config/db.php';
		$opt = [
	        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
	        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
	        PDO::ATTR_EMULATE_PREPARES   => false,
	    ];
		$db = new PDO("mysql:host={$config['host']};dbname={$config['name']};charset=utf8", $config['user'], $config['password'], $opt);
	}

	public function query($sql)
	{
		$this->db->query();
	}
}






 ?>