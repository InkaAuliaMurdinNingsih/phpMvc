<?php
class Blog_model
{
    private $table = 'guru';
    private $db;
    public function __construct()
    {
        $this->db = new Database;
    }

    public function getAllBlog()
    {
        $this->db->query("SELECT * FROM " . $this->table);
        return $this->db->resultAll();
    }

    public function getBlogById($id)
    {
        $this->db->query("SELECT * FROM " . $this->table . ' WHERE id=:id');
        $this->db->bind('id', $id);
        return $this->db->resultSingle();
    }
    public function tambahData($data){
        $query =" INSERT INTO guru VALUES
        (NULL, :kode_guru, :nama_guru, :matpel, :prod_noprod) ";
        $this->db->query($query);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('matpel', $data['matpel']);
        $this->db->bind('prod_noprod', $data['prod_noprod']);
        $this->db->execute();
        return $this->db->rowCount();
    }

    public function hapusDataGuru($id)
    {
        $query = "DELETE FROM guru WHERE id =:id";

        $this->db->query($query);
        $this->db->bind('id', $id);

        $this->db->execute();

        return $this->db->rowCount();

    }
    public function ubahDataGuru($data)
    {
    $query = "UPDATE guru SET
        kode_guru= :kode_guru,
        nama_guru= :nama_guru,
        Matpel = :matpel,
        prod_noprod = :alamat
        WHERE id = :id";

        $this->db->query($query);
        $this->db->bind('kode_guru', $data['kode_guru']);
        $this->db->bind('nama_guru', $data['nama_guru']);
        $this->db->bind('matpel', $data['matpel']);
        $this->db->bind('prod_noprod', $data['prod_noprod']);
        $this->db->bind('id', $data['id']);
        $this->db->execute();
        return $this->db->rowCount();
        }

}