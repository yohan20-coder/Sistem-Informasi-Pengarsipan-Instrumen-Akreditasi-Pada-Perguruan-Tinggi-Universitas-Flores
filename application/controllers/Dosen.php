<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dosen extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model 
      $this->load->model('Dosen_model');
      //user akses
     is_log_in();
  }

    public function index()
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
      $this->load->view('dosen/index',$data);
      $this->load->view('template/footer');
    }

    public function add ()
    {
     //mengambil data dari session di controller auth
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

     $this->form_validation->set_rules('nama','Nama','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('nidn','Nidn','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('jk','JK','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('ttl','TTL','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('ibu','Ibu','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('rtw','RTW','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('kelur','Kelur','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('kab','Kab','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('prov','Prov','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('hp','Hp','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('pangkat','Pangkat','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    // $this->form_validation->set_rules('nosk','Nosk','required',[
    //   'required' => 'Data Tidak Boleh Kosong !'
    // ]);
    $this->form_validation->set_rules('tgl','Tgl','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('jabatan','Jabatan','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);

    //memanggil model arsip
    // $this->load->model('Alumni_model','arsip');
    // $data['tampil'] = $this->arsip->tampil();
    
  //  var_dump($data['tampil']);die;

    if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Dosen FTI';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('dosen/add',$data);
    $this->load->view('template/footer');
    }else{
      $data = [
      'nidn' => $this->input->post('nidn'),
      'nama' => $this->input->post('nama'),
      'jenis_kelamin' => $this->input->post('jk'),
      'ttl' => $this->input->post('ttl'),
      'ibu' => $this->input->post('ibu'),
      'rtw' => $this->input->post('rtw'),
      'kelurahan' => $this->input->post('kelur'),
      'kabupaten' => $this->input->post('kab'),
      'propinsi' => $this->input->post('prov'),
      'no_hp' => $this->input->post('hp'),
      'pangkat' => $this->input->post('pangkat'),
      'nosk' => $this->input->post('nosk'),
      'tgl' => $this->input->post('tgl'),
      'jabatan' => $this->input->post('jabatan')
    ];
    $this->db->insert('profil',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
    redirect('dosen');
    }
    }

    public function detail($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['edit'] = $this->Dosen_model->Ubah($id);

      $data['judul'] = 'Halaman Detail Data Dosen FTI';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dosen/detail',$data);
      $this->load->view('template/footer');
    }

    public function edit($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['edit'] = $this->Dosen_model->Ubah($id);

      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nidn','Nidn','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('jk','JK','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('ttl','TTL','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('ibu','Ibu','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('rtw','RTW','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kelur','Kelur','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kab','Kab','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('prov','Prov','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('hp','Hp','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('pangkat','Pangkat','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      // $this->form_validation->set_rules('nosk','Nosk','required',[
      //   'required' => 'Data Tidak Boleh Kosong !'
      // ]);
      $this->form_validation->set_rules('tgl','Tgl','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('jabatan','Jabatan','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Edit Data Dosen FTI';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('dosen/edit',$data);
      $this->load->view('template/footer');
      }else{
        $data = [
          'nidn' => $this->input->post('nidn'),
          'nama' => $this->input->post('nama'),
          'jenis_kelamin' => $this->input->post('jk'),
          'ttl' => $this->input->post('ttl'),
          'ibu' => $this->input->post('ibu'),
          'rtw' => $this->input->post('rtw'),
          'kelurahan' => $this->input->post('kelur'),
          'kabupaten' => $this->input->post('kab'),
          'propinsi' => $this->input->post('prov'),
          'no_hp' => $this->input->post('hp'),
          'pangkat' => $this->input->post('pangkat'),
          'nosk' => $this->input->post('nosk'),
          'tgl' => $this->input->post('tgl'),
          'jabatan' => $this->input->post('jabatan')
        ];

        $this->db->where('id', $id);
        $this->db->update('profil', $data);
        $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
      redirect('dosen');

      }
    }

    public function cetak()
    {
       //mengambil data dari session di controller auth
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

      $this->load->model('Dosen_model','arsip');
      $data['tampil'] = $this->arsip->tampil();
      
    //  var_dump($data['tampil']);die;
      $this->load->view('dosen/cetak',$data);
    }

    public function hapus($id)
    {
      $this->Dosen_model->hapus($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('dosen');
    }

}
