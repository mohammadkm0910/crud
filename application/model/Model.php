<?php

namespace Application\Model;
use PDO;
use PDOException;
class Model
{
    protected $conn;
    public function __construct()
    {
        if (!isset($this->conn)){
            $option = [
                PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE=>PDO::FETCH_ASSOC,
                PDO::MYSQL_ATTR_INIT_COMMAND=>"SET NAMES utf8"
            ];
            try {
                $dsn = "mysql:host=".DB_HOST.";dbname=".DB_NAME;
                $this->conn = new PDO($dsn,DB_USER,DB_PASS,$option);
            } catch (PDOException $e){
                echo "<p class='text-danger'>".$e->getMessage()."</p>";
            }
        }
    }
    protected function selectAll($tableName)
    {
        $sql = "SELECT * FROM `$tableName`";
        try {
            $query = $this->conn->prepare($sql);
            $query->execute();
            if ($query->rowCount() > 0){
                return $query->fetchAll();
            } else {
                return [];
            }
        } catch (PDOException $e){
            return false;
        }
    }
    protected function selectById()
    {

    }
    protected function execute($query, $values = null)
    {
        try {
            if ($values == null){
                $this->conn-exec($query);
            } else {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($values);
            }
            return true;
        } catch (PDOException $e){
            echo "<p class='text-danger'>".$e->getMessage()."</p>";
            return false;
        }
    }
    protected function closeConnection()
    {
        $this->conn = null;
    }
}