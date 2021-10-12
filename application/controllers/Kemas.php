<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kemas extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model 
      $this->load->model('Kemas_model');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Kemas_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Penelitian Mahasiswa Dan Dosen';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('kemas/index',$data);
      $this->load->view('template/footer');
    }

    public function add ()
    {
      //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tema','Tema','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('mahasiswa','Mahasiswa','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kegiatan','Kegiatan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      //memanggil model arsip
      // $this->load->model('Alumni_model','arsip');
      // $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;

      if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Tambah Data Kemahasiswaan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('kemas/add',$data);
      $this->load->view('template/footer');
      }else{
        $data = [
        'nama_dosen' => $this->input->post('nama'),
        'tema_penelitian' => $this->input->post('tema'),
        'nama_mahasiswa' => $this->input->post('mahasiswa'),
        'judul_kegiatan' => $this->input->post('kegiatan'),
        'tahun' => $this->input->post('tahun')
      ];
        $this->db->insert('kemahasiswaan',$data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
        redirect('kemas');
      }
    }

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['edit'] = $this->Kemas_model->Ubah($id);

       $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tema','Tema','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('mahasiswa','Mahasiswa','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kegiatan','Kegiatan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);


      if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Edit Data Kemahasiswaan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('kemas/edit',$data);
      $this->load->view('template/footer');
    }else{
      $data = [
        'nama_dosen' => $this->input->post('nama'),
        'tema_penelitian' => $this->input->post('tema'),
        'nama_mahasiswa' => $this->input->post('mahasiswa'),
        'judul_kegiatan' => $this->input->post('kegiatan'),
        'tahun' => $this->input->post('tahun')
      ];

        $this->db->where('id', $id);
        $this->db->update('kemahasiswaan', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
      redirect('kemas');
    }

    }

    public function cetak()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Kemas_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $this->load->view('kemas/cetak',$data);
    }


    public function hapus($id)
    {
      $this->Kemas_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('kemas');
    }

}
