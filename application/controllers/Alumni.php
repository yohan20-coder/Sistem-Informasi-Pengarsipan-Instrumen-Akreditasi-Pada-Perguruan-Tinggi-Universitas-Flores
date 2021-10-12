<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Alumni extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model 
      $this->load->model('Alumni_model');
      //user akses
     is_log_in();
  }

    public function index()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Alumni_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Alumni';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('alumni/index',$data);
      $this->load->view('template/footer');
    }

    public function add ()
    {
     //mengambil data dari session di controller auth
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

     $this->form_validation->set_rules('nama','Nama','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('nim','Nim','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('tahun','Tahun','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('alamat','Alamat','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('hp','Hp','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('pekerjaan','Pekerjaan','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);

    //memanggil model arsip
    // $this->load->model('Alumni_model','arsip');
    // $data['tampil'] = $this->arsip->tampil();
    
  //  var_dump($data['tampil']);die;

    if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Alumni';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('alumni/add',$data);
    $this->load->view('template/footer');
    }else{
      $data = [
      'nama' => $this->input->post('nama'),
      'nim' => $this->input->post('nim'),
      'tahun_lulus' => $this->input->post('tahun'),
      'no_hp' => $this->input->post('hp'),
      'alamat' => $this->input->post('alamat'),
      'pekerjaan' => $this->input->post('pekerjaan')
    ];
    $this->db->insert('alumni',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
    redirect('alumni');
    }
    }

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $data['edit'] = $this->Alumni_model->Ubah($id);

       $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nim','Nim','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('alamat','Alamat','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('hp','Hp','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('pekerjaan','Pekerjaan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);


      if($this->form_validation->run() == FALSE){
        $data['judul'] = 'Halaman Tambah Data Alumni';
        $this->load->view('template/header',$data);
        $this->load->view('template/sidebar',$data);
        $this->load->view('template/topbar',$data);
        $this->load->view('alumni/edit',$data);
        $this->load->view('template/footer');
    }else{
      $data = [
        'nama' => $this->input->post('nama'),
        'nim' => $this->input->post('nim'),
        'tahun_lulus' => $this->input->post('tahun'),
        'no_hp' => $this->input->post('hp'),
        'alamat' => $this->input->post('alamat'),
        'pekerjaan' => $this->input->post('pekerjaan')
      ];

        $this->db->where('id', $id);
        $this->db->update('alumni', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
      redirect('alumni');
    }

    }

    public function cetak()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Alumni_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $this->load->view('alumni/cetak',$data);
    }

    public function hapus($id)
    {
      $this->Alumni_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('alumni');
    }

}
