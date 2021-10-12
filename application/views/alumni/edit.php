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
         		 <form action="<?= base_url();?>alumni/edit/<?= $edit['id'] ?>" method="post">

             <!--  <?php echo form_open_multipart('alumni/edit') ?> -->

               <input type="hidden" class="form-control" name="id" value="<?= $edit['id'];?>">

               <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nama" value="<?= $edit['nama'];?>">
                  <?= form_error('nama','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

              <div class="form-group row">
                <label for="menu" class="col-sm-2 col-form-label">NIM</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" name="nim" value="<?= $edit['nim'];?>">
                  <?= form_error('nim','<small class="text-danger pl-3">', '</small>'); ?>
                </div>
              </div>

         	    <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Tahun Lulus</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="tahun" value="<?= $edit['tahun_lulus'];?>">
                   <?= form_error('tahun','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">No.Hp</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="hp" value="<?= $edit['no_hp'];?>">
                   <?= form_error('hp','<small class="text-danger pl-3">', '</small>'); ?>
         				</div>
         			</div>

                     <div class="form-group row">
                        <label for="ringkas" class="col-sm-2 col-form-label">Alamat</label>
                        <div class="col-sm-10">
                        <textarea class="form-control" name="alamat" rows="4"><?= $edit['alamat'];?></textarea>
                        <?= form_error('alamat','<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                    </div>

              <div class="form-group row">
         				<label for="menu" class="col-sm-2 col-form-label">Pekerjaan</label>
         				<div class="col-sm-10">
                   <input type="text" class="form-control" name="pekerjaan" value="<?= $edit['pekerjaan'];?>">
                   <?= form_error('pekerjaan','<small class="text-danger pl-3">', '</small>'); ?>
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