<!-- Begin Page Content -->
<div class="container-fluid">
              <!-- Basic Card Example -->
              <div class="card shadow">
                <div class="card-header py-3">
                  <h6 class="m-0 font-weight-bold text-primary"><?= $judul;?></h6>
                </div>
                <div class="card-body col-lg-12">

          <!-- Page Heading -->
         <!--  <h1 class="h3 mb-4 text-gray-800"><?= $judul;?></h1> -->

         <div class="row">
         	<div class="col-lg-12">
             <!-- <form action="<?= base_url();?>tridar/editpend/<?= $detail['id'] ?>" method="post"> -->

              <?php echo form_open_multipart('tridar/editpendproses') ?>
              <input type="hidden" class="form-control" name="id" value="<?= $detail['id'];?>">

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nidn" value="<?= $detail['nidn'];?>">
                  <?= form_error('nidn','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="<?= $detail['nama_dosen'];?>">
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

         	    <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Nama Tes</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="nates" value="<?= $detail['nama_tes'];?>">
                   <?= form_error('nates','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Skor Tes</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="skor" value="<?= $detail['skor_tes'];?>">
                   <?= form_error('skor','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Jenis Tes</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="jenis" value="<?= $detail['jenis_tes'];?>">
                   <?= form_error('jenis','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Penyelenggara</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="penyelenggara" value="<?= $detail['penyelenggara'];?>">
                   <?= form_error('penyelenggara','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Tahun</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="tahun" value="<?= $detail['tahun'];?>">
                   <?= form_error('tahun','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Mata Kuliah</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="makul" value="<?= $detail['mata_kuliah'];?>">
                   <?= form_error('makul','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Kelas</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="kelas" value="<?= $detail['kelas'];?>">
                   <?= form_error('kelas','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Semester</label>
         				<div class="col-sm-10">
                   <input type="number" class="form-control" name="semester" value="<?= $detail['semester'];?>">
                   <?= form_error('semester','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">SKS</label>
         				<div class="col-sm-10">
                   <input type="number" class="form-control" name="sks" value="<?= $detail['sks'];?>">
                   <?= form_error('sks','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Judul Bimbingan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="judul" value="<?= $detail['judul_bimbingan'];?>">
                   <?= form_error('judul','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

              <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Jenis Bimbingan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="jenis" value="<?= $detail['jenis_bimbingan'];?>">
                   <?= form_error('jenis','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Program Studi</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="prodi" value="<?= $detail['prodi'];?>">
                   <?= form_error('prodi','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Bahan Ajar</label>
         				<div class="col-sm-10">
                         <iframe src="<?= base_url('assets/file/'.$detail['bahan_ajar'])?>" height="150px" width="30%"></iframe>
                   <input type="file" class="form-control" name="surat">
                  
         				</div>
         			</div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-sm btn-primary">Edit Data</button>
                            </div>
                         </div>
                <!-- </form> -->
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>