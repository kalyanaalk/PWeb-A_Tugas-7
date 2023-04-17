<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Pendaftaran Siswa</title>

  <!-- CDN Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>
<body class="text-light d-flex flex-column align-items-center" style="background-image: linear-gradient(to bottom, rgb(0, 50, 80), rgb(130, 35, 135));">
  <div class="row" style="height: 100vh">
    <div class="col d-flex flex-column justify-content-center align-items-center mb-5">

      <header>
        <h5>Pendaftaran Siswa Baru</h5>
        
      </header>
      <h1>SMA Coding<h1>
        
      <nav class="d-flex justify-content-center" style="margin-top: 50px;">
        <div class="btn-group" role="group" aria-label="Basic example">
            <div class="d-grid gap-2">
                <button class="btn btn-light" type="button"><a href="form-daftar.php" class="text-dark text-decoration-none">Daftar Baru</a></button>
                <button class="btn btn-light" type="button"><a href="list-siswa.php" class="text-dark text-decoration-none">Pendaftar</a></button>
            </div>  
        </div>
      </nav>

      <?php if(isset($_GET['status'])): ?>
        <div>
          <?php 
            if($_GET['status'] == 'sukses') {
              echo "<p class='fw-bold fs-3' style='color: rgb(150, 255, 150); margin-top: 30px'>Pendaftaran berhasil!</p>";
            } else {
              echo "<p class='fw-bold fs-3 text-danger'>Pendaftaran gagal!</p>";
            }
            ?>
        </div>
      <?php endif; ?>

    </div>
  </div>

  <!-- cdn Bootstrap js -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js">
</body>
</html>