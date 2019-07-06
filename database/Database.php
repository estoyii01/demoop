<?php
class Database{
    private $con;
    public $servername="localhost";
    public $username="root";
    public $password="";
    public $dbname = "demooop";

    public function __construct(){
        $this->con = mysqli_connect($this->servername, $this->username,$this->password,$this->dbname);
    }

    public function execute($sql){
        if(mysqli_query($this->con, $sql)){
            return TRUE;
        }else{
            return FALSE;
        }
    }

    public function __destruct(){
        mysqli_close($this->con);
    }
}
?>