<?php

/*
 * This file is generated by S. Das.
 * Do not copy it without permission.
 */
//Contact at: tapan84silchar[at]gmail.com
define("HOST11", "http://localhost/ProjectUploader");
define("HOSTNAME", "localhost");
define("USERNAME", "root");
define("PASS", "");
define("DBNAME", "project");

class Config
{
    private $conn;
    
    public function __construct()
    {
        if (!$this->isConnected()) {
            $this->connect();
        }
    }
    
    public function connect()
    {
        $this->conn = new \mysqli('localhost', 'root', '', 'project');
        
        if ($this->conn->connect_error) {
			throw new \Exception('Error: ' . $this->conn->error . '<br />Error No: ' . $this->conn->errno);
		}
        
		$this->conn->set_charset("utf8");
		$this->conn->query("SET SQL_MODE = ''");
    }
    
    public function isConnected()
    {
        return $this->conn->ping();
    }
}

if (function_exists('base_path')) {
    function base_path($path = '')
    {
        return dirname(dirname(__FILE__));
    }
}

function getUserNamePattern() {
    return "/^[a-zA-Z0-9_\.]+$/";
}

function getPasswordPattern() {
    return "/^[a-zA-Z0-9]{6,12}$/";
}

function getRollPattern(){
    return "/^[0-9]{7,8}$/";
}

function getNamePattern(){
    return "/^[a-zA-Z\s\.]+$/";
}

function getThesisFileNamePattern() {
    return "/^[0-9]{7,8}-[MB]TP[I]{1,2}\.pdf$/";
}
?>
