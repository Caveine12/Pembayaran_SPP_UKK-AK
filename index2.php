<!DOCTYPE html>
<html>
<head>
  <title>Login Admin/Petugas</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/bootstrap.bundle.min.js"></script>
</head>
<body>
<div class="container mt-5">
  <div class="row justify-content-md-center">
    <div class="col-md-4">
      <div class="card">
        <div class="card-header text-center">
          <h4 class="text-center">Login Admin/Petugas</h4>
        </div>
        <div class="card-body">
          <form action="proses_login_admin.php" method="POST">
            <div class="form-group mb-2">
              <label>Username</label>
              <input type="text" name="username" class="form-control" placeholder="Masukkan username" required>
            </div>
            <div class="form-group mb-2">
              <label>Password</label>
              <input type="password" name="password" class="form-control" placeholder="Masukkan password" required>
            </div>
            <div class="form-group mb-2">
              <button type="submit" class="btn btn-primary">Login</button>
            </div>
          </form>
          <a href="index.php">Login sebagai Siswa</a>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>
