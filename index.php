<!DOCTYPE html>
<html>
<head>
  <title>Pembayaran SPP</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" rel="stylesheet">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-md-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center">
          <img src="logo_spp.png" width="100%">
          <h4 class="text-center">Login Siswa</h4>
        </div>
        <div class="card-body">
          <form action="proses_login_siswa.php" method="POST">
            <div class="form-group mb-2">
              <label>NISN</label>
              <input type="number" name="nisn" class="form-control" placeholder="Masukkan NISN anda" required>
            </div>
            <div class="form-group mb-2">
              <label>NIS</label>
              <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS anda" required>
            </div>
            <div class="form-group mb-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
          <a href="index2.php">Login sebagai Administrator/Petugas</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
