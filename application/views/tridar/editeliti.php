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
             <form action="<?= base_url();?>tridar/editeliti/<?= $detail['id'] ?>" method="post">
              <!-- <?php echo form_open_multipart('tridar/addteliti') ?> -->

              
              <input type="hidden" class="form-control" name="id" value="<?= $detail['id'];?>">

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="<?= $detail['nama_dosen'];?>">
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">NIDN</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nidn" value="<?= $detail['nidn'];?>">
                  <?= form_error('nidn','<small class="text-danger pl-3">', '</small>'); ?>
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
         				<label for="menu" class="col-sm-2 col-form-label">Judul Penelitian</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="judul" value="<?= $detail['judul_penelitian'];?>">
                   <?= form_error('judul','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Jenis Penelitian</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="jenis" value="<?= $detail['jenis'];?>">
                   <?= form_error('jenis','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

              <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Lama Penelitian</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="lama" value="<?= $detail['lama_penelitian'];?>">
                   <?= form_error('lama','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-sm btn-primary">Edit Data</button>
                            </div>
                         </div>
         		</form>
             <!-- <?php echo form_close() ?>
              -->
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>