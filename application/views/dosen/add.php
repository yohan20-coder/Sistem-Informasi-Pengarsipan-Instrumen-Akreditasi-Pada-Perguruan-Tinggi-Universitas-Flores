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
         		 <!-- <form action="" method="post"> -->

              <?php echo form_open_multipart('dosen/add') ?>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nidn">
                  <?= form_error('nidn','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama">
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
              <label for="menu" class="col-sm-2 col-form-label">Jenis Kelamin</label>
              <div class="col-sm-10">
                        <select name="jk" id="jk" class="form-control">
                            <option value="">Pilih</option>
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                        <?= form_error('jk','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                </div>

         	    <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Tempat Tanggal Lahir</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="ttl">
                   <?= form_error('ttl','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Nama Ibu Kandung</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="ibu">
                   <?= form_error('ibu','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">RT/RW</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="rtw">
                   <?= form_error('rtw','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Desa/Kelurahan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="kelur">
                   <?= form_error('kelur','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Kota/Kabupaten</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="kab">
                   <?= form_error('kab','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Propinsi</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="prov">
                   <?= form_error('prov','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">No.Hp</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="hp">
                   <?= form_error('hp','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Pangkat</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="pangkat">
                   <?= form_error('pangkat','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Nomor SK</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="nosk">
                   <?= form_error('nosk','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Tanggal SK</label>
         				<div class="col-sm-10">
                   <input type="date" class="form-control" name="tgl">
                   <?= form_error('tgl','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

              <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Jabatan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="jabatan">
                   <?= form_error('jabatan','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-sm btn-primary">Tambah Data</button>
                            </div>
                         </div>
         		
             <?php echo form_close() ?>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>