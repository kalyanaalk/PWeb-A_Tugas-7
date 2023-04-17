<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Pendaftaran Siswa Baru | SMK Coding</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
</head>

<body class="text-light d-flex flex-column align-items-center" style="background-image: linear-gradient(to bottom, rgb(0, 50, 80), rgb(0, 50, 80)); margin: 80px 30px 80px 30px;">
    <header>
        <h3>Siswa yang sudah mendaftar</h3>
    </header>

    

    <br>

    <table  class="table table-light table-hover" border="1">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Jenis Kelamin</th>
            <th>Agama</th>
            <th>Sekolah Asal</th>
            <th>Tindakan</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM calon_siswa";
        $query = mysqli_query($db, $sql);

        while($siswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$siswa['id']."</td>";
            echo "<td>".$siswa['nama']."</td>";
            echo "<td>".$siswa['alamat']."</td>";
            echo "<td>".$siswa['jenis_kelamin']."</td>";
            echo "<td>".$siswa['agama']."</td>";
            echo "<td>".$siswa['sekolah_asal']."</td>";

            echo "<td>";
            echo "<button type='button' class='btn btn-outline-secondary' style='margin-right:5px'><a href='form-edit.php?id=".$siswa['id']."'>Edit</a>";
            echo "<button type='button' class='btn btn-outline-danger'><a href='hapus.php?id=".$siswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>

    <?php if(isset($_GET['status'])): ?>
      <div>
        <?php 
          if($_GET['status'] == 'sukses') {
            echo "<p class='fw-bold fs-3' style='color: rgb(150, 255, 150)'>Perubahan berhasil!</p>";
          } else {
            echo "<p class='fw-bold fs-3 text-danger'>Perubahan gagal!</p>";
          }
          ?>
      </div>
    <?php endif; ?>

    <p>Total: <?php echo mysqli_num_rows($query) ?></p>

    <nav>
    <button type="button" class="btn btn-light"><a href="form-daftar.php">Tambah Baru</a></button>
    </nav>

    </body>
</html>