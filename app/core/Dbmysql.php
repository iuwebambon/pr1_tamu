<?php

class Dbmysql
{
    protected $table;
    protected $allowedFields = [];

    public function conn()
    {
        $conn = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME);
        return $conn;
    }

    public function save($val)
    {
        $query = "INSERT INTO $this->table ($this->allowedFields) VALUES ('', 'tes', 'tes')";
        $count = mysqli_query($this->conn(), $query);
        if ($count > 0) {
            return true;
        }
        return false;
    }
}
