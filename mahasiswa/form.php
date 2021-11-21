<?php
	include'../cekmahasiswa.php';

  include'../koneksi.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mahasiswa - Form</title>

    <!-- Custom fonts for this template-->
    <link href="../assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-university"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Banding UKT<sup></sup></div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/banding_ukt/mahasiswa/">
                    <i class="fas fa-home "></i>
                    <span>Home</span></a>
            </li>
           

            <li class="nav-item active">
                <a class="nav-link" href="http://localhost/banding_ukt/mahasiswa/form.php">
                    <i class="fas fa-list"></i>
                    <span>Pengajuan</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="https://api.whatsapp.com/message/4GGSQUOWZPACI1">
                    <i class="fas fa-phone "></i>
                    <span>Hubungi Admin</span></a>
            </li>


            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>


        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?=$_SESSION['username'] ?></span>
                                <img class="img-profile rounded-circle"
                                    src="../assets/img/undraw_profile.svg">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">

                                <a class="dropdown-item" href="../logout.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

						<!-- Page Heading -->
	                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
	                        <h1 class="h3 mb-0 text-gray-800">Selamat Datang <?=$_SESSION['username']?>!</h1>
	                    </div>

		                    <!-- DataTales Example -->
		                    <div class="card shadow mb-4">
		                        <div class="card-header py-3">
		                            <h5 class="m-0 font-weight-bold text-primary">Data Banding</h5>
		                        </div>
		                        <div class="card-body">
		                            <div class="table-responsive">
                                	<form  action="aksi.php" method="post" enctype="multipart/form-data">
		                                <table class="table table-bordered" id="dataTable"  cellspacing="0">
                                      <tr>
                                        <td>Nama</td>
                                        <td><input type="text" name="nama" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>NPM</td>
                                        <td><input type="number" name="npm" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Program Studi</td>
                                        <td><input type="text" name="program_studi" style="width: 650px;"> </td>
                                      </tr>
                                      <tr>
                                        <td>Fakultas</td>
                                        <td><select name="fakultas" style="width: 650px;">
                                        <option >Ekonomi & Bisnis</option>
                                        <option >Pertanian</option>
                                        <option >Teknik</option>
                                        <option >Ilmu Sosial & Politik</option>
                                        <option >Ilmu Komputer</option>
                                        <option >Arsitektur & Desain</option>
                                        <option >Hukum</option>
                                        <option >Program Pascasarjana</option>
                                        </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Semester</td>
                                        <td><input type="number" name="semester" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Alasan Banding</td>
                                        <td><textarea name="alasan_banding" rows="4" cols="50" style="width: 650px;"></textarea></td>
                                      </tr>
                                      <tr>
                                        <td>Nama Ayah</td>
                                        <td><input type="text" name="nama_ayah" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Nama Ibu</td>
                                        <td><input type="text" name="nama_ibu" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan Ayah</td>
                                        <td><input type="text" name="pekerjaan_ayah" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Pekerjaan Ibu</td>
                                        <td><input type="text" name="pekerjaan_ibu" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Penghasilan Total Perbulan</td>
                                        <td>
                                        <select name="penghasilan_total" style="width: 650px;">
                                        <option value="Golongan 1">Gol 1: Rp.0 - Rp.500.000 </option>
                                        <option value="Golongan 2">Gol 2: Rp.500.000 - Rp.1.000.000</option>
                                        <option value="Golongan 3">Gol 3: Rp.1.000.000 - Rp.2.500.000</option>
                                        <option value="Golongan 4">Gol 4: Rp.2.500.000 - Rp.5.000.000</option>
                                        <option value="Golongan 5">Gol 5: Diatas Rp.5.000.000</option>
                                        </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Status Diri</td>
                                        <td><input type="text" name="status_diri"style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Jumlah Saudara Yang Bersekolah</td>
                                        <td><input type="text" name="jumlah_saudara" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Jumlah Pengeluaran Perbulan</td>
                                        <td><input type="text" name="jumlah_pengeluaran_perbulan" style="width: 650px;">
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Tagihan Listik Perbulan</td>
                                        <td><input type="text" name="tagihan_listrik_perbulan" style="width: 650px;"></td>
                                      </tr>
                                      <tr>
                                        <td>Status Tempat Tinggal</td>
                                        <td>
                                        <select name="status_tempat_tinggal" style="width: 650px;">
                                        <option >Sewa</option>
                                        <option >Pribadi</option>
                                        </select>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Jenis Aset Yang Dimiliki</td>
                                        <td><input type="text" name="jenis_aset_yang_dimiliki" style="width: 650px;"><p style="font-size: 12px;">Masukkan jenis aset konsumtif yang ada dirumah</p></td>
                                      </tr>
                                      <tr>
                                        <td>Fotocopy KTP dan KK</td>
                                        <td><input type="file" name="bukti_terlampir" style="width: 650px;">
                                            <p style="font-size: 12px;">Upload KTP Kedua Orang tua</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>SuKet Tidak Mampu </td>
                                        <td><input type="file" name="suket" style="width: 650px;">
                                            <p style="font-size: 12px;">Harus Dari Kelurahan 
                                            </p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td>Surat Pengahsilan Perbulan</td>
                                        <td><input type="file" name="surat_penghasilan" style="width: 650px;">
                                            <p style="font-size: 12px;">Harus Ditandatangani RW</p>
                                        </td>
                                      </tr>
                                      <tr>
                                        <td></td>
                                        <td>
										<input type="text" name="id_user" value="<?=$_SESSION['id_user']?>" hidden>
                                        <input type="submit" value="SIMPAN"></td>
                                      </tr>
									   </table>
		                            </div>
		                        </div>
		                    </div>

                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2020</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../assets/vendor/jquery/jquery.min.js"></script>
    <script src="../assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../assets/vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../assets/js/sb-admin-2.min.js"></script>

</body>

</html>
