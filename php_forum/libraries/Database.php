<?php
/**
* Database with PDO 
* Prevent PHP SQL Injection with PDO Prepared Statements.
* website: http://culttt.com/2012/10/01/roll-your-own-pdo-php-class/
*/
class Database{
	//Configuration
	private $host = DB_HOST;
	private $user = DB_USER;
	private $pass = DB_PASS;
	private $dbname = DB_NAME;
		
	private $dbh;
	private $error;
	private $stmt;

	// Magical Method
	public function __construct(){
		// Set Database Source Name DSN
		$dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->dbname;
		// Set options
		$options = array(
		    PDO::ATTR_PERSISTENT => true, 
		    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
		);
		// Create new PDO instance
		try {
		    $this->dbh = new PDO($dsn, $this->user, $this->pass, $options);
		}		// Catch any errors
		catch (PDOException $e) {
		    $this->error = $e->getMessage();
		}
	}

	// PDO::prepare function
	public function query($query){
    $this->stmt = $this->dbh->prepare($query);
}
	// PDOStatement::bindValue 
	public function bind($param, $value, $type = null){
		 if (is_null($type)) {
		  switch (true) {
		    case is_int($value):
		      $type = PDO::PARAM_INT;
		      break;
		    case is_bool($value):
		      $type = PDO::PARAM_BOOL;
		      break;
		    case is_null($value):
		      $type = PDO::PARAM_NULL;
		      break;
		    default:
		      $type = PDO::PARAM_STR;
		  }
		}
    $this->stmt->bindValue($param, $value, $type);
}

	public function execute(){
		return $this->stmt->execute();
	}

	
	public function resultset(){
		$this->execute();
		return $this->stmt->fetchAll(PDO::FETCH_OBJ);
	}

	
	public function single(){
		$this->execute();
		return $this->stmt->fetch(PDO::FETCH_ORJ);
	}

	
	public function rowCount(){
		return $this->stmt->rowCount();
	}


	public function lastInsertId(){
		return $this->dbh->lastInsertId();
	}


	public function beginTransaction(){
		return $this->dbh->beginTransaction();
	}


	public function endTransaction(){
		return $this->dbh->commit();
	}


	public function cancelTransaction(){
		return $this->dbh->rollBack();
	}

}