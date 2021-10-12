<?php

class Alumni_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('alumni');
        return $query->result_array();
    }

    public function hapus($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('alumni');
    }

    public function ubah($id)
    {
        $query =  $this->db->get_where('alumni',['id'=>$id]);
        return $query->row_array();
    }

    //jumlah alumni
    public function jmlalumni()
    {
        $query = $this->db->get('alumni');
        if($query->num_rows() > 0)
        {
            return $query->num_rows();
        }else {
           return 0;
        }
    }
}