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
             <form action="<?= base_url();?>tridar/editabdi/<?= $detail['id'] ?>" method="post">

              <!-- <?php echo form_open_multipart('') ?> -->

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
                <label for="menu" class="col-sm-2 col-form-label">Judul Pengabdian</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="judul" value="<?= $detail['judul_pengabdian'];?>">
                  <?= form_error('judul','<small class="text-danger pl-3">', '</small>'); ?>
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
         				<label for="menu" class="col-sm-2 col-form-label">Lama Kegiatan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="lama" value="<?= $detail['lama_kegiatan'];?>">
                   <?= form_error('lama','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Afiliasi</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="afiliasi" value="<?= $detail['afiliasi'];?>">
                   <?= form_error('afiliasi','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Kelompok Bidang</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="kelompok" value="<?= $detail['kelompok_bidang'];?>">
                   <?= form_error('kelompok','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Nomor SK Penugasan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="nosk" value="<?= $detail['no_sk_tugas'];?>">
                   <?= form_error('nosk','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Tanggal SK Penugasan</label>
         				<div class="col-sm-10">
                   <input type="date" class="form-control" name="tglsk" value="<?= $detail['tgl_sk_tugas'];?>">
                   <?= form_error('tglsk','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Lokasi Kegiatan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="lokasi" value="<?= $detail['lokasi_kegiatan'];?>">
                   <?= form_error('lokasi','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Tahun Pelakasana</label>
         				<div class="col-sm-10">
                   <input type="number" class="form-control" name="thnpel" value="<?= $detail['tahun_pelaksanaan'];?>">
                   <?= form_error('thnpel','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                    

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                            <button type="Submit" class="btn btn-sm btn-primary">Edit Data</button>
                            </div>
                         </div>
         		</form>
             <!-- <?php echo form_close() ?> -->
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>