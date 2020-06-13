<?php
class MAdmin extends CI_Model{
    public function Get($table)
    {
        $res = $this->db->get($table);
        return $res->result();
    }

    public function GetWhere($table, $data){
        $res = $this->db->get_where($table, $data);
        return $res->result();
    }

    public function Insert($table, $data){
        $res = $this->db->insert($table, $data);
        return $res;
    }

    public function Update($table, $data, $id){
        $res = $this->db->update($table, $data, $id);
        return $res;
    }

    public function Delete($table, $id){
        $res = $this->db->delete($table, $id);
    }

    public function Sum($table, $field){
        $res = $this->db->select_sum($field)
                        ->from($table)
                        ->get();
        return $res->result();
    }

    public function GetKategori(){
        $this->db->select ( 'tb_barang.*, kategori.id as id_kat, kategori.kategori' ); 
        $this->db->from ('tb_barang');
        $this->db->join ('kategori', 'kategori.id = tb_barang.id_kategori' , 'left' );
        $query = $this->db->get ();
        return $query->result ();
    }

    public function GetWhereKategori($id){
        $this->db->select ( 'tb_barang.*, kategori.id as id_kat, kategori.kategori' ); 
        $this->db->from ('tb_barang');
        $this->db->join ('kategori', 'kategori.id = tb_barang.id_kategori' , 'left' );
        $this->db->where('kategori.id = '.$id);
        $this->db->order_by('tb_barang.nm_barang', 'asc');
        $query = $this->db->get ();
        return $query->result ();
    }

    public function GetBarangMasuk($id){
        $this->db->select ( 'tb_barang.*, barang_masuk.id as id_masuk, barang_masuk.tgl_masuk, barang_masuk.jumlah' ); 
        $this->db->from ('barang_masuk');
        $this->db->join ('tb_barang', 'tb_barang.id = barang_masuk.id_barang' , 'left' );
        $this->db->where('tb_barang.id = '.$id);
        $query = $this->db->get ();
        return $query->result ();        
    }

    public function GetKategoriWhere($id){
        $this->db->select ( 'tb_barang.*, kategori.id as id_kat, kategori.kategori' ); 
        $this->db->from ('tb_barang');
        $this->db->join ('kategori', 'kategori.id = tb_barang.id_kategori' , 'left' );
        $this->db->where('tb_barang.id = '.$id);
        $query = $this->db->get ();
        return $query->result ();
    }

    public function GetOrder($table,$kolom,$order){
        $this->db->from($table);
        $this->db->order_by($kolom, $order);
        $res = $this->db->get();
        return $res->result();
    }
}
?>