<?php

class tamuActionModel extends Dbmysql
{
    protected $table = 'tamu';
    protected $primaryKey = 'no_identitas';
    protected $allowedFields = 'no_identitas, nama, alamat, pekerjaan, agama, keperluan, jenis_kelamin, no_telepon, tanggal';
}
