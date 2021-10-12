
  <div class="container"><br><br>

    <!-- Outer Row -->
    <div class="row mt-5 justify-content-center">

      <div class="col-lg-6">
        <!-- <h4 class ="text-center mt-3 pt-4 text-gray-900">Selamat Datang di Sistem Kearsipan <br> Kelurahan Rewarangga</h4> -->
        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg">
                <div class="p-5">
                  <div class="text-center">
                    <h4 class="h4 text-gray-900 mb-4">Sistem Informasi Pengarsipan Instrumen <br> Akreditasi Pada Perguruan Tinggi <br> Universitas Flores</h4>
                    <!-- <marquee><p>Sistem Arsip Digital</p></marquee> -->
                  </div>

                  <?= $this->session->flashdata('message');?>

                  <form class="user" method="post" action="<?= base_url('auth');?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="email" name="email" value="<?= set_value('email'); ?>"placeholder="Masukan Email Anda...">
                      <?= form_error('email','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password" class="form-control form-control-user" id="password" name="password" placeholder="Masukan Password Anda...">
                      <?= form_error('password','<small class="text-danger pl-3">', '</small>'); ?>
                    </div>
        
                    <button type="submit" class="btn btn-primary btn-user btn-block" style="background : #073644 !important">Login</button>
                  
                    
                  </form>
   
                  <div class="text-center mt-5">
                    <h5 class="text-gray-900">FTI Unflor 2021</h5>
                  </div>
                  <!-- <div class="text-center">
                    <a class="small" href="<?= base_url();?>auth/registration">Daftar Account!</a>
                  </div> -->
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>
    </div>
  </div>

 