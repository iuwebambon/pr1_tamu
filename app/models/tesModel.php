<?php

class tesModel extends Dbmysql
{
    protected $table = 'tes';
    protected $primaryKey = 'id';
    protected $allowedFields = 'id, nama, nim';
}
