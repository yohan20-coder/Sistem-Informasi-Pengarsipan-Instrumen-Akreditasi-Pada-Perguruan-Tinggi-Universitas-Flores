<?php

class Dosen_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('profil');
        return $query->result_array();
    }

    public function ubah($id)
    {
        $query =  $this->db->get_where('profil',['id'=>$id]);
        return $query->row_array();
    }

    
    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('profil');
    }

    //jumlah alumni
    public function jmldosen()
    {
        $query = $this->db->get('profil');
        if($query->num_rows() > 0)
        {
            return $query->num_rows();
        }else {
           return 0;
        }
    }

}