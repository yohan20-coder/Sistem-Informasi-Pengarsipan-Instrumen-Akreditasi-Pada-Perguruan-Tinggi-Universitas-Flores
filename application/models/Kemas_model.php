<?php

class Kemas_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('kemahasiswaan');
        return $query->result_array();
    }

     public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('kemahasiswaan');
    }

     public function ubah($id)
    {
        $query =  $this->db->get_where('kemahasiswaan',['id'=>$id]);
        return $query->row_array();
    }
}