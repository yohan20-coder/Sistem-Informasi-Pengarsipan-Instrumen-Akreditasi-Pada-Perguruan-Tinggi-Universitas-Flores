<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tridar extends CI_Controller
{

  public function __construct()
  {
      parent::__construct();
      //memanggil model 
      $this->load->model('Tridar_model');
      //user akses
     is_log_in();
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
      $this->load->view('tridar/pendidikan',$data);
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
      $data['judul'] = 'Halaman Data Penelitian Tridharma Penelitian';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('tridar/penelitian',$data);
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
      $this->load->view('tridar/pengabdian',$data);
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
    $this->form_validation->set_rules('nates','Nates','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('skor','Skor','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('jenis','Jenis','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('penyelenggara','Penyelenggara','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('tahun','Tahun','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('makul','Makul','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('kelas','Kelas','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('semester','Semester','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('sks','SKS','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('judul','Judul','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('jenis','Jenis','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    $this->form_validation->set_rules('prodi','Prodi','required',[
      'required' => 'Data Tidak Boleh Kosong !'
    ]);
    // $this->form_validation->set_rules('surat','Surat','required',[
    //   'required' => 'Data Tidak Boleh Kosong !'
    // ]);

    //memanggil model arsip
    // $this->load->model('Alumni_model','arsip');
    // $data['tampil'] = $this->arsip->tampil();
    
  //  var_dump($data['tampil']);die;

    if($this->form_validation->run() == FALSE){
    $data['judul'] = 'Halaman Tambah Data Tridarma Pendidikan';
    $this->load->view('template/header',$data);
    $this->load->view('template/sidebar',$data);
    $this->load->view('template/topbar',$data);
    $this->load->view('tridar/addpen',$data);
    $this->load->view('template/footer');
    }else{

      $surat = $_FILES['surat'];
      if($surat = ''){}else{
        $config['upload_path']  = './assets/file';
        $config['allowed_types'] = 'pdf';

        $this->load->library('upload', $config);
        if($this->upload->do_upload('surat')){
           $surat = $this->upload->data('file_name');
        }
      };

      $data = [
      'nidn' => $this->input->post('nidn'),
      'nama_dosen' => $this->input->post('nama'),
      'nama_tes' => $this->input->post('nates'),
      'skor_tes' => $this->input->post('skor'),
      'jenis_tes' => $this->input->post('jenis'),
      'penyelenggara' => $this->input->post('penyelenggara'),
      'tahun' => $this->input->post('tahun'),
      'mata_kuliah' => $this->input->post('makul'),
      'bahan_ajar' => $surat,
      'kelas' => $this->input->post('kelas'),
      'semester' => $this->input->post('semester'),
      'sks' => $this->input->post('sks'),
      'judul_bimbingan' => $this->input->post('judul'),
      'jenis_bimbingan' => $this->input->post('jenis'),
      'prodi' => $this->input->post('prodi')
    ];
    $this->db->insert('pendidikan',$data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
    redirect('tridar/pendidikan');
    }
    }

    public function detpend($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['detail'] = $this->Tridar_model->ubahpend($id);

      $data['judul'] = 'Halaman Detail Data Tridarma Pendidikan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('tridar/detpend',$data);
      $this->load->view('template/footer');
    }

    public function editpend($id)
    {
      $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
      $data['detail'] = $this->Tridar_model->ubahpend($id);

      $data['judul'] = 'Halaman Detail Data Tridarma Pendidikan';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('tridar/editpend',$data);
      $this->load->view('template/footer');
    }

    public function editpendproses()
    {

      $id = $this->uri->segment(3);

      $surat = $_FILES['surat'];
      // var_dump($surat); die;
      if($surat = ''){}else{
      $config['upload_path']         = './assets/file/';  // foler upload 
      $config['allowed_types']        = 'pdf'; // jenis file
      // $config['max_size']             = 50000;
      $this->load->library('upload', $config);

      if ( ! $this->upload->do_upload('surat')){
        $nama = $this->input->post('nama');
        $nidn =  $this->input->post('nidn');
        $nates = $this->input->post('nates');
        $skor = $this->input->post('skor');
        $jenis = $this->input->post('jenis');
        $penye = $this->input->post('penyelenggara');
        $tahun = $this->input->post('tahun');
        $makul = $this->input->post('makul');
        $kelas = $this->input->post('kelas');
        $semester = $this->input->post('semester');
        $sks = $this->input->post('sks');
        $judul = $this->input->post('judul');
        $jenis =  $this->input->post('jenis');
        $prodi = $this->input->post('prodi');
        $file = $this->upload->data();

        $this->Tridar_model->updatepend(array(
          'nidn' => $nidn,
          'nama_dosen' => $nama,
          'nama_tes' => $nates,
          'skor_tes' => $skor,
          'jenis_tes' => $jenis,
          'penyelenggara' => $penye,
          'tahun' => $tahun,
          'mata_kuliah' => $makul,
          'kelas' => $kelas,
          'semester' => $semester,
          'sks' => $sks,
          'judul_bimbingan' => $judul,
          'jenis_bimbingan' => $jenis,
          'prodi' => $prodi
          ), array('id' => $this->input->post('id')
              )
      );
          $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiKirim</div>');
          redirect('tridar/pendidikan');
        }else{
          $id = $this->input->post('id');
          $data = $this->Tridar_model->ubahpend($id);
          $gambar1 ='./assets/file/'.$data['bahan_ajar'];

        if($data['bahan_ajar']){
          is_readable($gambar1) && unlink($gambar1);
        };

          $nama = $this->input->post('nama');
          $nidn =  $this->input->post('nidn');
          $nates = $this->input->post('nates');
          $skor = $this->input->post('skor');
          $jenis = $this->input->post('jenis');
          $penye = $this->input->post('penyelenggara');
          $tahun = $this->input->post('tahun');
          $makul = $this->input->post('makul');
          $kelas = $this->input->post('kelas');
          $semester = $this->input->post('semester');
          $sks = $this->input->post('sks');
          $judul = $this->input->post('judul');
          $jenis =  $this->input->post('jenis');
          $prodi = $this->input->post('prodi');
          $file = $this->upload->data();

          $this->Tridar_model->updatepend(array(
            'nidn' => $nidn,
            'nama_dosen' => $nama,
            'nama_tes' => $nates,
            'skor_tes' => $skor,
            'jenis_tes' => $jenis,
            'penyelenggara' => $penye,
            'tahun' => $tahun,
            'mata_kuliah' => $makul,
            'kelas' => $kelas,
            'semester' => $semester,
            'sks' => $sks,
            'judul_bimbingan' => $judul,
            'jenis_bimbingan' => $jenis,
            'prodi' => $prodi,
            'bahan_ajar' => $file['file_name']
            ), array('id' => $this->input->post('id')
                )
        );
            $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiKirim</div>');
            redirect('tridar/pendidikan');

        }
      }
      
    }

    public function lapen()
    {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $this->load->model('Tridar_model','arsip');
       $data['tampil'] = $this->arsip->tampil();
       
     //  var_dump($data['tampil']);die;
       $this->load->view('tridar/lapen',$data);
    }

    public function hapuspend($id)
    {   
      //menghapus gambar pada folder 
      $data = $this->Tridar_model->ubahpend($id);
      $gambar1 ='./assets/file/'.$data['bahan_ajar'];

      if($data['bahan_ajar']){
        is_readable($gambar1) && unlink($gambar1);
        $this->Tridar_model->hapuspend($id);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
        redirect('tridar/pendidikan');
       }else{
        $this->Tridar_model->hapuspend($id);
        $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
        redirect('tridar/pendidikan');
       }
    }

    public function addabdi()
    {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       //Validasi Form
       $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nidn','Nidn','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('judul','Judul','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('lama','Lama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('afiliasi','Afiliasi','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kelompok','Kelompok','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nosk','Nosk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tglsk','Tglsk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('lokasi','Lokasi','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('thnpel','Thnpel','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
        
       //  var_dump($data['tampil']);die;
       if($this->form_validation->run() == FALSE){
         $data['judul'] = 'Halaman Tambah Data Tridharma Pengabdian';
         $this->load->view('template/header',$data);
         $this->load->view('template/sidebar',$data);
         $this->load->view('template/topbar',$data);
         $this->load->view('tridar/addabdi',$data);
         $this->load->view('template/footer');
    }else{

      $data = [
        'nidn' => $this->input->post('nidn'),
        'nama_dosen' => $this->input->post('nama'),
        'judul_pengabdian' => $this->input->post('judul'),
        'tahun' => $this->input->post('tahun'),
        'lama_kegiatan' => $this->input->post('lama'),
        'afiliasi' => $this->input->post('afiliasi'),
        'kelompok_bidang' => $this->input->post('kelompok'),
        'no_sk_tugas' => $this->input->post('nosk'),
        'tgl_sk_tugas' => $this->input->post('tglsk'),
        'lokasi_kegiatan' => $this->input->post('lokasi'),
        'tahun_pelaksanaan' => $this->input->post('thnpel'),
      ];
      $this->db->insert('pengabdian',$data);
      $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
      redirect('tridar/pengabdian');

    }
  }

  public function detabdi($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
      $data['detail'] = $this->Tridar_model->ubahabdi($id);

      $data['judul'] = 'Halaman Detail Data Tridarma Pengabdian';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('tridar/detabdi',$data);
      $this->load->view('template/footer'); 
  }

  public function editabdi($id)
  {
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
    
      $data['detail'] = $this->Tridar_model->ubahabdi($id);

      //Validasi Form
      $this->form_validation->set_rules('nama','Nama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nidn','Nidn','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('judul','Judul','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tahun','Tahun','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('lama','Lama','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('afiliasi','Afiliasi','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('kelompok','Kelompok','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('nosk','Nosk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('tglsk','Tglsk','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('lokasi','Lokasi','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);
      $this->form_validation->set_rules('thnpel','Thnpel','required',[
        'required' => 'Data Tidak Boleh Kosong !'
      ]);

      if($this->form_validation->run() == FALSE){
      $data['judul'] = 'Halaman Detail Data Tridarma Pengabdian';
      $this->load->view('template/header',$data);
      $this->load->view('template/sidebar',$data);
      $this->load->view('template/topbar',$data);
      $this->load->view('tridar/editabdi',$data);
      $this->load->view('template/footer'); 
  }else{

    $data = [
      'nidn' => $this->input->post('nidn'),
      'nama_dosen' => $this->input->post('nama'),
      'judul_pengabdian' => $this->input->post('judul'),
      'tahun' => $this->input->post('tahun'),
      'lama_kegiatan' => $this->input->post('lama'),
      'afiliasi' => $this->input->post('afiliasi'),
      'kelompok_bidang' => $this->input->post('kelompok'),
      'no_sk_tugas' => $this->input->post('nosk'),
      'tgl_sk_tugas' => $this->input->post('tglsk'),
      'lokasi_kegiatan' => $this->input->post('lokasi'),
      'tahun_pelaksanaan' => $this->input->post('thnpel'),
    ];
    $this->db->where('id', $id);
    $this->db->update('pengabdian', $data);
    $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
    redirect('tridar/pengabdian');

  }
}

  public function cetakabdi()
  {
       //mengambil data dari session di controller auth
       $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

       $this->load->model('Tridar_model','arsip');
      $data['tampil'] = $this->arsip->abdi();
       
     //  var_dump($data['tampil']);die;
       $this->load->view('tridar/cetakabdi',$data);
  }

  public function hapusabdi($id)
  {
      $this->Tridar_model->hapusabdi($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('tridar/pengabdian');
  }

  public function addteliti()
  {

    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $this->form_validation->set_rules('nama','Nama','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('nidn','Nidn','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('tahun','Tahun','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('judul','Judul','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('jenis','Jenis','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('lama','Lama','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);

   if($this->form_validation->run() == FALSE){
   $data['judul'] = 'Halaman Tambah Data Tridharma Penelitian';
   $this->load->view('template/header',$data);
   $this->load->view('template/sidebar',$data);
   $this->load->view('template/topbar',$data);
   $this->load->view('tridar/addteliti',$data);
   $this->load->view('template/footer');
   }else{
     $data = [
     'nama_dosen' => $this->input->post('nama'),
     'nidn' => $this->input->post('nidn'),
     'tahun' => $this->input->post('tahun'),
     'judul_penelitian' => $this->input->post('judul'),
     'jenis' => $this->input->post('jenis'),
     'lama_penelitian' => $this->input->post('lama')
   ];
   $this->db->insert('penelitian',$data);
   $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
   redirect('tridar/penelitian');
   }
  }

   public function editeliti($id)
  {

    //mengambil data dari session di controller auth
    $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

    $data['detail'] = $this->Tridar_model->ubahteliti($id);

    $this->form_validation->set_rules('nama','Nama','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('nidn','Nidn','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('tahun','Tahun','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('judul','Judul','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('jenis','Jenis','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);
   $this->form_validation->set_rules('lama','Lama','required',[
     'required' => 'Data Tidak Boleh Kosong !'
   ]);

   if($this->form_validation->run() == FALSE){
   $data['judul'] = 'Halaman Edit Data Tridharma Penelitian';
   $this->load->view('template/header',$data);
   $this->load->view('template/sidebar',$data);
   $this->load->view('template/topbar',$data);
   $this->load->view('tridar/editeliti',$data);
   $this->load->view('template/footer');
   }else{
     $data = [
     'nama_dosen' => $this->input->post('nama'),
     'nidn' => $this->input->post('nidn'),
     'tahun' => $this->input->post('tahun'),
     'judul_penelitian' => $this->input->post('judul'),
     'jenis' => $this->input->post('jenis'),
     'lama_penelitian' => $this->input->post('lama')
   ];
   $this->db->where('id', $id);
   $this->db->update('penelitian',$data);
   $this->session->set_flashdata('message','<div class="alert alert-success" role="alert">Data Berhasil DiEdit</div>');
   redirect('tridar/penelitian');
   }
  }

  public function cetakteliti()
  {
     //mengambil data dari session di controller auth
     $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

     $this->load->model('Tridar_model','arsip');
     $data['tampil'] = $this->arsip->teliti();
     
   //  var_dump($data['tampil']);die;
     $this->load->view('tridar/cetakteliti',$data);
  }

  public function hapusteliti($id)
  {
      $this->Tridar_model->hapusteliti($id);
      $this->session->set_flashdata('message','<div class="alert alert-danger" role="alert">Data Berhasil DiHapus</div>');
      redirect('tridar/penelitian');
  }


}
