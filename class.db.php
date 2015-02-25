<?php
class database{
	/* DATABASE PARAMETERS */
	private $dbHost;
	private $dbUser;
	private $dbPwd;
	private $dbConn;
	private $dbConnAttiva = false;
	private $dbNome;
	
	/* DATABASE TABLES */
	public $tb_entries = "entries";
	public $tb_login = "login";
	
	/* INTERNAL VARIABLES */
	private $localhost = array('127.0.0.1','::1');
	public function is_localhost(){
		if(in_array($_SERVER['REMOTE_ADDR'], $this->localhost)){
			return true;
		}
		return false;
	}
	
	private $lastQuery = "";
	private $lastResult;
	private $lastRow;
	
	/* CONCTRUCTOR AND DESTRUCTOR */
	public function __construct(){
		$this->dbHost = "localhost";
		$this->dbUser = "angelotm";
		// ACTUAL SERVER, DATABASE ON LOCALHOST OR ONLINE
		if($this->is_localhost()){
			$this->dbPwd = "olegnatm";
			$this->dbNome = "angelocovino";
		}else{
			$this->dbPwd = "";
			$this->dbNome = "my_angelotm";
		}
		if(!($this->connect())){
		/*
			echo "<script type=\"text/javascript\">alert(\"ERROR WITH CONNECTION TO THE DATABASE!!\");</script>";
		*/
		}
	}
	public function __destruct(){
		$this->disconnect();
	}
	
	/* CONNECTION AND DISCONNECTION */
	public function connect(){
		if(!($this->isConnected())){
			$this->dbConn = @mysqli_connect($this->dbHost,$this->dbUser,$this->dbPwd);
			if($this->dbConn){
				$this->dbConnAttiva = true;
				if(mysqli_select_db($this->dbConn, $this->dbNome)){return true;}
			}
		}
		return false;
	}
	public function isConnected(){return $this->dbConnAttiva;}
	public function disconnect(){
		if($this->isConnected()){
			if(mysqli_close($this->dbConn)){
				$this->dbConnAttiva = false;
				return true;
			}
			return false;
		}
		return true;
	}
	
	/* QUERY */
	public function executeQuery($query){return ($this->lastResult = mysqli_query($this->dbConn, $query));}
	public function executeQueryStored(){return ($this->lastResult = mysqli_query($this->dbConn, $this->lastQuery));}
	
	public function update($cosa, $come, $dove, $quando){
		$this->executeQuery("UPDATE ".$dove." SET ".$cosa."=".$come." WHERE ".$quando);
		//echo "UPDATE ".$dove." SET ".$cosa."=".$come." WHERE ".$quando;
	}
	public function insert($dove, $valori, $tabella){
		$this->executeQuery("INSERT INTO ".$tabella." (".$dove.") VALUES (".$valori.")");
		//echo "INSERT INTO ".$tabella." (".$dove.") VALUES (".$valori.")";
	}
	
	/* FETCH */
	public function fetchRow($result){return ($this->lastRow = mysqli_fetch_row($result));}
	public function fetchRowStored(){return ($this->lastRow = mysqli_fetch_row($this->lastResult));}
	public function fetchAssoc($result){return ($this->lastRow = mysqli_fetch_assoc($result));}
	public function fetchAssocStored(){return ($this->lastRow = mysqli_fetch_assoc($this->lastResult));}
	public function fetchField($result){return ($this->lastRow = mysqli_fetch_field($result));}
	public function fetchFieldStored(){return ($this->lastRow = mysqli_fetch_field($this->lastResult));}
	
	/* AFFECTED ROWS */
	public function affectedRows(){return mysqli_affected_rows($this->dbConn);}
	
	/* CONTEGGIO NUMERO RIGHE */
	public function getNumRows($result){return (mysqli_num_rows($result));}
	public function getNumRowsStored(){return (mysqli_num_rows($this->lastResult));}
	public function getNumFields($result){return (mysqli_num_fields($result));}
	public function getNumFieldsStored(){return (mysqli_num_fields($this->lastResult));}
	
	/* ENTRIES */
	private $orderby = "ORDER BY date_year DESC, date_month DESC, date_day DESC, title ASC, entry_id DESC";
	public function getEntriesCount(){
		$this->executeQuery("SELECT COUNT(*) AS conto FROM ".$this->tb_entries);
		$conto = $this->fetchAssocStored();
		return ($conto['conto']);
	}
	public function getAnEntry($id){
		$this->executeQuery("SELECT * FROM {$this->tb_entries} WHERE entry_id={$id}");
		return ($this->fetchAssocStored());
	}
	public function monthAssociation($intMonth){
		$months = array ("Jan","Feb","Mar","Apr","May","Jun","Jul","Aug","Sep","Oct","Nov","Dec");
		return ($intMonth>0 && $intMonth<13)?($months[$intMonth-1]):"-";
	}
	public function getEntries($limitStart=0, $limitAmount=20){
		$this->executeQuery("SELECT * FROM {$this->tb_entries} ".$this->orderby." LIMIT ".$limitStart.",".$limitAmount);
		for($i=0;$i<$this->getNumRowsStored();$i++){
			$entries[$i] = $this->fetchAssocStored();
		}
		return ($entries);
	}
	public function deleteAnEntry($id){
		$this->executeQuery("DELETE FROM {$this->tb_entries} WHERE entry_id={$id}");
		return ($this->affectedRows());
	}
	
	public function checkEntry($str){
		$str=str_replace("'","&#39;",$str);
		$str=str_replace("\"","\\\"",$str);
		$str=nl2br($str);
		return $str;
	}
	public function checkEntryReverse($str){
		$str=str_replace("&#39;","'",$str);
		$str=str_replace("\\\"","\"",$str);
		$str=str_replace("<br />","",$str);
		return $str;
	}
	public function insertAnEntry($day, $month, $year, $title, $body){
		$this->executeQuery("INSERT INTO {$this->tb_entries} VALUES(NULL, {$day}, {$month}, {$year}, '{$title}', '{$body}')");
		return ($this->affectedRows());
	}
	public function updateAnEntry($id, $day, $month, $year, $title, $body){
		$this->executeQuery("UPDATE {$this->tb_entries} SET date_day={$day}, date_month={$month}, date_year={$year}, title='{$title}', entry_body='{$body}' WHERE entry_id={$id}");
		return ($this->affectedRows());
	}
	
	/* LOGIN */
	public function checkLogin($user, $password){
		$this->executeQuery("SELECT COUNT(*) AS conto FROM {$this->tb_login} WHERE user='{$user}' AND password='{$password}'");
		$conto = $this->fetchAssocStored();
		if(intval($conto['conto'])==1){
			return true;
		}
		return false;
	}
}
?>