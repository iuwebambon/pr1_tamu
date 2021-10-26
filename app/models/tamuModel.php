<?php

class tamuModel extends Model
{
    protected $table = 'tamu';
    protected $primaryKey = 'no_identitas';
    protected $allowedFields = ['no_identitas, nama, alamat, pekerjaan, agama, keperluan, jenis_kelamin, no_telepon, tanggal'];

    public function __construct()
    {
        $this->db = new Database;
    }

    public function gettamu($no_identitas = false)
    {

        if ($no_identitas == false) {
            return $this->findAll();
        }

        return $this->where(['no_identitas' => $no_identitas])->first();
    }

    public function simpan($data)
    {
        $query = "INSERT INTO users
                    VALUES
                  (
                    :no_identitas, :nama, :alamat, :pekerjaan, :agama, :keperluan, :jenis_kelamin, :no_telepon, tanggal
                    )";

        $this->db->query($query);
        // Informasi Umum
        $this->db->bind('no_identitas', $data['no_identitas']);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('alamat', $data['alamat']);
        $this->db->bind('pekerjaan', $data['pekerjaan']);
        $this->db->bind('agama', $data['agama']);
        $this->db->bind('keperluan', $data['keperluan']);
        $this->db->bind('jenis_kelamin', $data['jenis_kelamin']);
        $this->db->bind('no_telepon', $data['no_telepon']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->execute();
        return $this->db->rowCount();
    }
}
