<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dekan extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model 
    //   $this->load->model('Alumni_model');
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
      $data['judul'] = 'Halaman Monitoring Data Prodi';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/index',$data);
      $this->load->view('template/footer');
    }

    public function alumni()
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
       $this->load->view('dekan/alumni',$data);
       $this->load->view('template/footer');
    }

    public function dosen()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Dosen_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Dosen';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/dosen',$data);
      $this->load->view('template/footer');
    }

    public function detdosen($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Dosen_model');
      $data['edit'] = $this->Dosen_model->Ubah($id);

      $data['judul'] = 'Halaman Detail Data Dosen FTI';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/detdosen',$data);
      $this->load->view('template/footer');
    }
    
    public function pendidikan()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Tridar_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Penelitian Tridharma Pendidikan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/pendidikan',$data);
      $this->load->view('template/footer');
    }

    public function detpend($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Tridar_model');
      $data['detail'] = $this->Tridar_model->ubahpend($id);

      $data['judul'] = 'Halaman Detail Data Tridarma Pendidikan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/detpend',$data);
      $this->load->view('template/footer');
    }

    public function penelitian()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Tridar_model','arsip');
      $data['tampil'] = $this->arsip->teliti();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Tridharma Penelitian';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/penelitian',$data);
      $this->load->view('template/footer');
    }

    public function pengabdian()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      //memanggil model arsip
      $this->load->model('Tridar_model','arsip');
      $data['tampil'] = $this->arsip->abdi();
      
    //  var_dump($data['tampil']);die;
      $data['judul'] = 'Halaman Data Penelitian Tridharma Pengabdian';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/pengabdian',$data);
      $this->load->view('template/footer');
    }

    public function detabdi($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
      $this->load->model('Tridar_model');
      $data['detail'] = $this->Tridar_model->ubahabdi($id);

      $data['judul'] = 'Halaman Detail Data Tridarma Pengabdian';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dekan/detabdi',$data);
      $this->load->view('template/footer'); 
  }

  public function kemas()
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
    $this->load->view('dekan/kemas',$data);
    $this->load->view('template/footer');
  }

}