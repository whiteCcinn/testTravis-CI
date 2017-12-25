<?php

class PDOConfig extends PDO {
   
    private $engine;
    private $host;
    private $database;
    private $user;
    private $pass;
   
    public function __construct(){
            $this->engine = 'mysql';
            $this->host = '127.0.0.1';
            $this->database = 'test';
            $this->user = 'root';
            $this->pass = '';
            $dns = $this->engine.':dbname='.$this->database.";host=".$this->host;
            parent::__construct( $dns, $this->user, $this->pass );
        }

    public function success()
    {
        echo 'Success';
    }
}
