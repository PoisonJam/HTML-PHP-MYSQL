<?php
require_once 'DBconfig.php';

class DBConnection extends Dbconfig{
    public $connectionString;
    public $dataSet;
    private $sqlQuery;
    
    protected $databaseName;
    protected $hostName;
    protected $userName;
    protected $passCode;
    
    public function __construct(){
        $this -> connectionString = NULL;
        $this -> sqlQuery = NULL;
        $this -> dataSet = NULL;
        
        $dbPara = new Dbconfig();
        $this -> databaseName = $dbPara -> dbName;
        $this -> hostName = $dbPara -> serverName;
        $this -> userName = $dbPara -> userName;
        $this -> passCode = $dbPara ->passCode;
        $dbPara = NULL;
    }
}