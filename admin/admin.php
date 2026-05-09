<!DOCTYPE html>
<html>
<head>
  <title>Halaman Admin</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
  <h4 class="text-info">Anda login sebagai <b>Administrator</b> Aplikasi Pembayaran SPP</h4>

  <!-- Menu navigasi -->
  <a href="admin.php?url=administrator" class="btn btn-primary">Administrator</a>
  <a href="admin.php?url=spp" class="btn btn-primary">SPP</a>
  <a href="admin.php?url=siswa" class="btn btn-primary">Siswa</a>
  <a href="admin.php?url=petugas" class="btn btn-primary">Petugas</a>
  <a href="admin.php?url=pembayaran" class="btn btn-primary">Pembayaran</a>
  <a href="admin.php?url=laporan" class="btn btn-primary">Laporan</a>
  <a href="admin.php?url=logout" class="btn btn-danger">Logout</a>

  <!-- Isi konten -->
  <div class="card mt-2">
    <div class="card-body">
      <?php
        $file = @$_GET['url'];
        if(empty($file)){
          echo "<h4>Selamat datang di halaman administrator</h4>";
          echo "Aplikasi Pembayaran SPP digunakan untuk mempermudah mencatat pembayaran siswa.";
        } else {
          include $file.".php";
        }
      ?>
    </div>
  </div>
</div>
</body>
</html>
