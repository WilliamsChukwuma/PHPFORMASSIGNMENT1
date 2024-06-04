<?php
  class Database{
    private $connection;

    function __construct() {
        $this->connect_db();
    }

    public function connect_db() {
       $this->connection = mysqli_connect('localhost', 'root', '', 'phpa1s2');
    }

    public function create($fname, $lname, $email, $address){
      $sql = "INSERT INTO assignment1(fname, lname, email, address) VALUES ('$fname', '$lname', '$email', '$address')";
      $res = mysqli_query($this->connection, $sql);

      if($res){
         return true;
      }
    }

    public function read(){
      $sql = "SELECT * FROM assignment1";
      $res = mysqli_query($this->connection, $sql);
      return $res;
    }
 }
  $database = new Database();
?>