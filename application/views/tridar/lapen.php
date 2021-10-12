<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cetak Laporan</title>
    <link href="<?= base_url('assets/');?>css/sb-admin-2.min.css" rel="stylesheet">
</head>
<body>
<div class="ml-3 mr-3 mt-5">
    <h5 class="text-center">Laporan Data Tridharma Pendidikan FTI</h5>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th scope="col">No</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">NIDN</th>
                            <th scope="col">Nama Tes</th>
                            <th scope="col">Skor Tes</th>
                            <th scope="col">Jenis Tes</th>
                            <th scope="col">Penyelenggara</th>
                            <th scope="col">Tahun</th>
                            <th scope="col">Mata Kuliah</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                        <td scope="row"><?= $no ?></td>
                          <td><?= $sm['nama_dosen'] ?></td>
                          <td><?= $sm['nidn'] ?></td>
                          <td><?= $sm['nama_tes'] ?></td>
                          <td><?= $sm['skor_tes'] ?></td>
                          <td><?= $sm['jenis_tes'] ?></td>
                          <td><?= $sm['penyelenggara'] ?></td>
                          <td><?= $sm['tahun'] ?></td>
                          <td><?= $sm['mata_kuliah'] ?></td>
                      </tr>
                  <?php $no++ ?>
                  <?php endforeach ?>

                    </tbody>
                </table>
                </div>

    <script>
        window.print();
    </script>
    <!-- Bootstrap core JavaScript-->
<script src="<?= base_url('assets/');?>vendor/jquery/jquery.min.js"></script>
  <script src="<?= base_url('assets/');?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
</body>
</html>