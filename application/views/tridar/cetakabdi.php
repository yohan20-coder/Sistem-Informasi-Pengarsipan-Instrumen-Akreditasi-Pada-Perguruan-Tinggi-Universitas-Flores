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
    <h5 class="text-center">Laporan Data Tridharma Pengabdian FTI</h5>
<table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                        <th scope="col">No</th>
                            <th scope="col">Nama Dosen</th>
                            <th scope="col">NIDN</th>
                            <!-- <th scope="col">Jenis Pengabdian</th> -->
                            <th scope="col">Tahun</th>
                            <th scope="col">Judul Pengabdian</th>
                            <th scope="col">Lama Kegiatan</th>
                            <th scope="col">Afiliasi</th>
                            <th scope="col">Kelompok Bidang</th>
                            <th scope="col">No. SK Penugasan</th>
                            <th scope="col">Tanggal Penugasan</th>
                            <th scope="col">Lokasi Kegiatan</th>
                            <th scope="col">Tahun Pelaksana</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php $no = 1 ?>
                    <?php foreach($tampil as $sm): ?>
                      <tr>
                            <td scope="row"><?= $no ?></td>
                          <td><?= $sm['nama_dosen'] ?></td>
                          <td><?= $sm['nidn'] ?></td>
                          <!-- <td><?= $sm['jenis_pengabdian'] ?></td> -->
                          <td><?= $sm['tahun'] ?></td>
                          <td><?= $sm['judul_pengabdian'] ?></td>
                          <td><?= $sm['lama_kegiatan'] ?></td>
                          <td><?= $sm['afiliasi'] ?></td>
                          <td><?= $sm['kelompok_bidang'] ?></td>
                          <td><?= $sm['no_sk_tugas'] ?></td>
                          <td><?= $sm['tgl_sk_tugas'] ?></td>
                          <td><?= $sm['lokasi_kegiatan'] ?></td>
                          <td><?= $sm['tahun_pelaksanaan'] ?></td>
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