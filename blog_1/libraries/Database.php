<?php 
/* Objects and Database */

class Database{
	public $host = DB_HOST;
	public $username = DB_USER;
	public $password = DB_PASS;
	public $db_name = DB_NAME;

	public $link; //mysqli objekt
	public $error;

	/*
	 * Class Constructor
	*/
	public function __construct()
	{

		//Call Connect Function
		$this->connect();
		
	}

	/*
	 *  Connector
	*/
	private function connect(){
		$this->link = new mysqli ($this->host, $this->username, $this->password, $this->db_name);
	
		if(!$this->link){
			$his->error = "Connection Faile ".$this->link->connect_error;
			return false;
		}
	}
	/*
	 * Select
	*/
	public function select($query){
		$result = $this->link->query($query) or die($this->link->error.__LINE__);
		if ($result->num_rows > 0) {
			return result ;
		}else{
			return false;
		}
	}
}

?>