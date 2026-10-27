<?php

class Pengembalian_model {
    private $table = '2511500047pengembalian';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllPengembalian()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getPengembalianById($id)
    {
        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE Kd_Kembali047 = :id');
        $this->db->bind('id', $id);
        return $this->db->single();
    }

    public function tambahDataPengembalian($data)
    {
        $query = "INSERT INTO " . $this->table . " 
                  VALUES (:Kd_Kembali047, :NimMhs047, :NmMhs047, :NmBuku047, :JumBuku047, :TglKembali047, :Denda047)";
        
        $this->db->query($query);
        $this->db->bind('Kd_Kembali047', $data['Kd_Kembali047']);
        $this->db->bind('NimMhs047', $data['NimMhs047']);
        $this->db->bind('NmMhs047', $data['NmMhs047']);
        $this->db->bind('NmBuku047', $data['NmBuku047']);
        $this->db->bind('JumBuku047', $data['JumBuku047']);
        $this->db->bind('TglKembali047', $data['TglKembali047']);
        $this->db->bind('Denda047', $data['Denda047']);

        $this->db->execute();

        return $this->db->rowCount();
    }

    public function hapusDataPengembalian($id)
    {
        $query = "DELETE FROM " . $this->table . " WHERE Kd_Kembali047 = :id";
        
        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();
    }
}