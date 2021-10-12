<?php

class Tridar_model extends CI_Model
{
    public function tampil()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('pendidikan');
        return $query->result_array();
    }

    public function abdi()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('pengabdian');
        return $query->result_array();
    }

     public function teliti()
    {
        $this->db->order_by('id', 'DESC');
        $query = $this->db->get('penelitian');
        return $query->result_array();
    }

    public function ubahpend($id)
    {
        $query =  $this->db->get_where('pendidikan',['id'=>$id]);
        return $query->row_array();
    }

    public function updatepend($data, $where)
    {
        // $this->db->where('id', $id);
        return $this->db->update('pendidikan',$data,$where);
    }
   
    public function hapuspend($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pendidikan');
    }
 
    public function  ubahabdi($id)
    {
        $query =  $this->db->get_where('pengabdian',['id'=>$id]);
        return $query->row_array();
    }

    public function hapusabdi($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('pengabdian');
    }

    public function ubahteliti($id)
    {
        $query =  $this->db->get_where('penelitian',['id'=>$id]);
        return $query->row_array();
    }

    public function hapusteliti($id)
    {
        $this->db->where('id', $id);
        $this->db->delete('penelitian');
    }

      //jumlah alumni
      public function jmlpenelitian()
      {
          $query = $this->db->get('penelitian');
          if($query->num_rows() > 0)
          {
              return $query->num_rows();
          }else {
             return 0;
          }
      }

      public function jmlpengabdian()
      {
          $query = $this->db->get('pengabdian');
          if($query->num_rows() > 0)
          {
              return $query->num_rows();
          }else {
             return 0;
          }
      }

}