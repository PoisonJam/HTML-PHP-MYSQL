<?php
class Dbconfig {
    
    protected $serverName;
    protected $userName;
    protected $passCode;
    protected $dbName;

    public function __construct(){
        $this -> serverName = 'localhost';
        $this -> userName = 'root';
        $this -> passCode = 'ifl8kbkh4mj';
        $this -> dbName = 'keiserbenefactor';
    }
}
?>