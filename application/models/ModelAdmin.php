<?php 
class ModelAdmin extends CI_model
{
    public function view_kategori()
    {
        return $this->db->get('kategori_produk')->result_array();
    }

    public function view_produk()
    {
        return $this->db->get('produk')->result_array();
    }

    public function tambah_kategori_produk()
    {
        return $this->db->insert('kategori_produk', ['nama_kategori'=> $this->input->post('kategori')]);
    }

    public function tambah_produk($table, $data)
    {
        // return $this->db->insert($data);
        return $this->db->insert($table, $data);
    }

    public function view_tambah_produk()
    {
        $this->db->select('*');
        $this->db->from('produk');
        $this->db->join('kategori_produk','kategori_produk.id_kategori = produk.id_kategori');      
        $query = $this->db->get()->result_array();
        return $query;
        
        // $query = " SELECT * FROM produk JOIN kategori_produk ON produk.id_kategori = kategori_produk.id_kategori
        // ";
        // $produk= $this->db->query($query)->result_array();
        // return $produk;
    }

    public function view_ordering($table,$order,$ordering)
    {
        $this->db->select('*');
        $this->db->from($table);
        $this->db->order_by($order,$ordering);
        return $this->db->get()->result_array();
    }
}