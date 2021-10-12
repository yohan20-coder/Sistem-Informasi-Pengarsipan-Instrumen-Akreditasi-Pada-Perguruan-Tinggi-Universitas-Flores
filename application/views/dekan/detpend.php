
 <!-- Begin Page Content -->
 <div class="container-fluid">
 <!-- Basic Card Example -->
              <div class="card shadow border-left-primary border-bottom-primary">
                <div class="card-header py-3" style="background:#073644 !important">
                  <h6 class="m-0 font-weight-bold text-white text-center"><?= $judul;?></h6>
                </div>
                <div class="card-body ">

            <!-- konfirmasi -->
          <div class="row">
            <div class="col-md-12">
              <?= $this->session->flashdata('message'); ?>
            </div>
          </div>

          <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $detail['id'];?>">
                        <div class="row">
                            <div class="col-lg-6">
                        <!-- Default Card Example -->
                        <div class="card mb-4">
                            <div class="card-header bg-info text-white" style="background:#073644 !important">
                            Informasi Detail
                            </div>
                            <div class="card-body">
                            <table class="table"  width="100%" cellspacing="0">

                                <tr>
                                    <td>Nama Dosen</td>
                                    <td>: <?= $detail['nama_dosen'] ?></td>
                                </tr>

                                <tr>
                                    <td>NIDN</td>
                                    <td>: <?=$detail['nidn']?></td>
                                </tr>

                                <tr>
                                    <td>Nama Tes</td>
                                    <td>: <?= $detail['nama_tes']?></td>
                                </tr>

                                <tr>
                                    <td>Skor Tes</td>
                                    <td>: <?= $detail['skor_tes'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Tes</td>
                                    <td>: <?= $detail['jenis_tes'] ?></td>
                                </tr>
                                <tr>
                                    <td>Penyelenggara</td>
                                    <td>: <?= $detail['penyelenggara'] ?></td>
                                </tr>
                                <tr>
                                    <td>Tahun</td>
                                    <td>: <?= $detail['tahun'] ?></td>
                                </tr>
                               
                            </table>

                         </div>      
                        </div>
                        <!-- <div class="card shadow">
                                <div class="card-header bg-info text-white">
                                  Isi Disposisi
                                </div>
                                <div class="card-body">

                            <table class="table"  width="100%" cellspacing="0">

                                    <tr>
                                        <td>Perintah Dari</td>
                                        <td>: Sekertaris Bappeda</td>
                                    </tr>

                                    <tr>
                                        <td>Catatan</td>
                                        <td>: <?= $detail['catatan'] ?></td>
                                    </tr>
                            </table> -->
<!-- 
                        <div class="form-group row justify-content-start">
                            <div class="col-sm-10">
                            <a href="<?= base_url('bidangi/masuk') ?>" class="btn btn-primary btn-sm">Kembali</a>
                            </div>
                         </div> -->
                                        
                                 <!-- </div> -->
                                 
                            <!-- </div> -->
                    </div>
                   
                        <!-- penutup 1 -->

                    <div class="col-lg-6">
                        <!-- Default Card Example -->
                        <div class="card mb-2">
                        <div class="card-header bg-info text-white" style="background:#073644 !important">
                        Informasi Detail
                            </div>
                            <div class="card-body">     
                            <table class="table"  width="100%" cellspacing="0">

                            <tr>
                                    <td>Mata Kuliah</td>
                                    <td>: <?= $detail['mata_kuliah'] ?></td>
                                </tr>

                                 <tr>
                                    <td>Kelas</td>
                                    <td>: <?= $detail['kelas'] ?></td>
                                </tr>

                                <tr>
                                    <td>Semester</td>
                                    <td>: <?= $detail['semester'] ?></td>
                                </tr>

                                <tr>
                                    <td>SKS</td>
                                    <td>: <?= $detail['sks'] ?></td>
                                </tr>

                                <tr>
                                    <td>Judul Bimbingan</td>
                                    <td>: <?= $detail['judul_bimbingan'] ?></td>
                                </tr>

                                <tr>
                                    <td>Jenis Bimbingan</td>
                                    <td>: <?= $detail['jenis_bimbingan'] ?></td>
                                </tr>

                                <tr>
                                    <td>Program Studi</td>
                                    <td>: <?= $detail['prodi'] ?></td>
                                </tr>
                            </table>
                                       
                      

                        <!-- <iframe src="<?= base_url('assets/surma/'.$detail['file_surat'])?>" height="750px" width="100%"></iframe> -->

                    </div>

                       

                            </div>
                        </div>
                        </div>
                        </div>
                      
                        </form>

                        <div class="container row">
                            <div class="col-lg-12">
                        <!-- Default Card Example -->
                        <div class="card mb-4">
                            <div class="card-header bg-info text-white" style="background:#073644 !important">
                            Informasi Detail Bahan Ajar
                            </div>
                        <div class="card-body">

                          <iframe src="<?= base_url('assets/file/'.$detail['bahan_ajar'])?>" height="750px" width="100%"></iframe>

                    </div>
                    </div>
                    </div>
                    </div>

      </div>
    </div>
</div>

