<?php
include('koneksi.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Halaman Lihat Data Bandha </title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

  

</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
<header>
  <nav class="navbar navbar-expand-lg navbar-dark bg-warning">
      <div class="container">
          <a class="navbar-brand" style="font-family: Tahoma" href="#"> 
          <img src="images/logo bandha 1.png" class="rounded-circle mb-1" alt="logo" width="40" height="40" /> BANDHA</a>
       <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
         <span class="navbar-toggler-icon"></span>
      </button>
           <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <div class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Admin
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="admin.php">Halaman Utama Admin</a></li>
            <li><a class="dropdown-item" href="daftar.php">Daftar Admin</a></li>
            <li><a class="dropdown-item" href="viewadmin.php">Lihat Admin</a></li>
            </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link avtive dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Info Dana
                </a>
            <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="info.php">Isi Informasi Dana</a></li>
            <li><a class="dropdown-item" href="viewinfodana.php">Informasi Dana Bantuan</a></li>
            <li><a class="dropdown-item" href="chartbar.php">Grafik Dana</a></li>
			</ul>
            </li>
			  	  <a class="nav-link active"  href="bansos.php">Pendataan Dana Bantuan</a>
                  <a class="nav-link active"  href="view.php">Data Pengajuan</a>
                  <a class="nav-link active" href="keluar.php">Keluar</a>
                
          </div>
          </div>   
</header>

<div class="container-fluid" style="margin-top: 50px; font-size: small;">
                <table class="table table-hover">
                    <thead class="table-dark">
                        <tr>
                            <th>No</th>
                            <th>Id Bansos</th>
                            <th>No KK</th>
                            <th>NIK</th>
                            <th>Nama Lengkap</th>
                            <th>Jenis Kelamin</th>
                            <th>Agama</th>
                            <th>Tempat Lahir</th>
                            <th>Tanggal Lahir</th>
                            <th>Usia</th>
                            <th>Status Pernikahan</th>
                            <th>Jumlah Anggota Keluarga</th>
                            <th>Alamat</th>
                            <th>RT</th>
                            <th>RW</th>
                            <th>Pekerjaan</th>
                            <th>Penghasilan</th>
                            <th>Nomor HP</th>
                            <th>Ikut JPS</th>
                            <th>Kriteria</th>
                            <th>Keterangan</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-light">
                        <?php
                        $no = 1;

                        include ('koneksi.php');
                        if (!$koneksi) {
                            die("Connection Failed : ". mysqli_connect_error());
                        }
                
                        $sql = mysqli_query($koneksi, "SELECT id_bansos, no_kk, nik, nama_lengkap, jenis_kelamin, agama, tempat_lahir, tanggal_lahir, usia, status_pernikahan, jumlah_anggota_keluarga, alamat, rt, rw, pekerjaan, penghasilan, nomor_hp, ikut_jps, kriteria, keterangan FROM bantuan_sosial");

                        foreach ($sql as $row){
                            echo "<tr>"; 
                            echo "<td> " .$no. " </td>";
                            echo "<td> " .$row['id_bansos']. " </td>";
                            echo "<td> " .$row['no_kk']. "</td>";
                            echo "<td> " .$row['nik']. "</td>";
                            echo "<td> " .$row['nama_lengkap']. " </td>";
                            echo "<td> " .$row['jenis_kelamin']. " </td>";
                            echo "<td> " .$row['agama']. " </td>";
                            echo "<td> " .$row['tempat_lahir']. " </td>";
                            echo "<td> " .$row['tanggal_lahir']. " </td>";
                            echo "<td> " .$row['usia']. " </td>";
                            echo "<td> " .$row['status_pernikahan']. " </td>";
                            echo "<td> " .$row['jumlah_anggota_keluarga']. " </td>";
                            echo "<td> " .$row['alamat']. " </td>";
                            echo "<td> " .$row['rt']. " </td>";
                            echo "<td> " .$row['rw']. " </td>";
                            echo "<td> " .$row['pekerjaan']. " </td>";
                            echo "<td> " .$row['penghasilan']. " </td>";
                            echo "<td> " .$row['nomor_hp']. " </td>";
                            echo "<td> " .$row['ikut_jps']. " </td>";
                            echo "<td> " .$row['kriteria']. " </td>";
                            echo "<td> " .$row['keterangan']. " </td>";
                            echo "<td> <a class='btn btn-primary' href='edit_bansos.php?id=$row[id_bansos]'> Edit </a>
                            <a class='btn btn-danger' href='hapus_bansos.php?id=$row[id_bansos]'> Delete </a></td>";
                            echo "</tr>";
                            $no++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
<form method="POST" action="cetakpdf.php">
        <!-- tombol untuk membuat laporan pdf -->
         <button type="submit" class="btn btn-danger"> BUAT LAPORAN PDF</button>
</form>
<br>
<form method="POST" action="cetakexcel.php">
        <!-- tombol untuk membuat laporan excel -->
         <button type="submit" class="btn btn-success"> BUAT LAPORAN EXCEL</button>
</form>

<footer class="footer-container bg-light">
            <center>
            <p>&copy; Elsa Indah Suci Paralel A 2021 <br>
        Website Bandha <br>
        Pemrograman Website
           </p>
            </center>
</footer>

</body>
</html>