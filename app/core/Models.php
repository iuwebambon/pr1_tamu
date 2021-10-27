<?php

class Models
{
    protected $table = '';
    protected $primaryKey = 'id';
    protected $allowedFields = '';
    protected $query = "";
    protected $data = false;

    // koneksi mysql
    public function conn()
    {
        mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_USER);
    }

    public function findAll()
    {
        mysqli_query($this->conn, "SELECT * FROM $this->table");
    }

    public function first($value)
    {
        mysqli_query($this->conn, "SELECT * FROM $this->table WHERE $this->primaryKey = $value");
    }
}
