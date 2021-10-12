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
         		 <form action="<?= base_url();?>kemas/edit/<?= $edit['id'] ?>" method="post">

             <!--  <?php echo form_open_multipart('kemas/edit') ?> -->

               <input type="hidden" class="form-control" name="nama" value="<?= $edit['id'];?>">

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama Dosen</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="<?= $edit['nama_dosen'];?>">
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Tema Penelitian</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="tema" value="<?= $edit['tema_penelitian'];?>">
                  <?= form_error('tema','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

         	    <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Nama Mahasiswa</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="mahasiswa" value="<?= $edit['nama_mahasiswa'];?>">
                   <?= form_error('mahasiswa','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Judul Kegiatan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="kegiatan" value="<?= $edit['judul_kegiatan'];?>">
                   <?= form_error('kegiatan','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

              <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Tahun</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="tahun" value="<?= $edit['tahun'];?>">
                   <?= form_error('tahun','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                <div class="form-group row justify-content-end">
                            <div class="col-sm-10">
                                <button type="Submit" class="btn btn-sm btn-primary">Edit Data</button>
                            </div>
                         </div>
         		
           <!--   <?php echo form_close() ?> -->
         </form>
             
         	</div>
         </div>       
      </div>

       </div>       
      </div>  

      <!-- End of Main Content -->

</div>